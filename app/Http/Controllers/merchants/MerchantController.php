<?php

namespace App\Http\Controllers\merchants;

use App\Http\Controllers\Controller;
use App\Models\bank_account;
use App\Models\Credit_cards;
use App\Models\PaymentInvoice;
use App\Models\TransactionOverView;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PDF;

class MerchantController extends Controller
{
    //constructor function
    public function __construct()
    {
        $this->middleware('auth');
    }
    // the main function to log to merchant dashboard
    public function index()
    {

        $data = bank_account::select('balance')->where('id', Auth::user()->id)->get();
        $Total_sales = $this->Ledger_accounts();
        $Total_transaction=$this->customer_account_statement();
        $Total_Invoice=$this->getinvoice();
        // return $Total_sales[0]->Balance;
        
        // etc.


        return view('merchant_dashboard/home', compact('data', 'Total_sales','Total_transaction','Total_Invoice'));
    }
    // transactions function that show finanicial transaction
    public function Transactions()
    {
        $data = bank_account::select('balance')->where('id', Auth::user()->id)->get();
        $transactions = TransactionOverView::where('user_id', Auth::user()->id)->paginate(8);
        return view('merchant_dashboard/Transactions', compact('data', 'transactions'));
    }
    //list function to show all invoice transaction
    public function listInvoice()
    {
        $data = bank_account::select('balance')->where('id', Auth::user()->id)->get();
        $Invoices = PaymentInvoice::with('Orders_invoice')->where('user_id', Auth::user()->id)->get();

        // return $Invoices[0];
        // return $Invoice_product;

        return view('merchant_dashboard/listInvoice', compact('data', 'Invoices'));
    }

    //
    public function financial_movement()
    {
        $data = bank_account::select('balance')->where('id', Auth::user()->id)->get();
        $customer_account_pro = DB::table('transactions')
        ->select(
            DB::raw('null as transaction_date'),

            DB::raw('(CASE WHEN financial_transactions.entry_type = "Debit" THEN credit_cards.card_holder ELSE CONCAT("-",credit_cards.card_holder) END) AS account_number'),
            DB::raw('(CASE WHEN financial_transactions.entry_type = "Debit" THEN financial_transactions.amount ELSE null END) AS AmountDebit'),
            DB::raw('(CASE WHEN financial_transactions.entry_type = "Cred" THEN financial_transactions.amount ELSE null END) AS AmountDebit'),
            'transactions.id AS Reference',
            DB::raw(
                '(CASE WHEN financial_transactions.entry_type = "Debit" THEN 1 ELSE 2 END) AS IsLine'
            )
        )
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->leftJoin('credit_cards', 'credit_cards.id', '=', 'financial_transactions.bank_acount_id')
            ->where('transactions.user_id', Auth()->user()->id)
            ->orderBy('Reference', 'asc');
        $customer_account = DB::table('transactions')
        ->select('transactions.transaction_date', 'transactions.description AS DescriptionOrAccountTitle', DB::raw('null as AmountDebit'), DB::raw('null as AmountCredit'), 'transactions.id AS Reference', DB::raw('null as IsLine'))
        ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
        ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
        ->leftJoin('credit_cards', 'credit_cards.id', '=', 'financial_transactions.bank_acount_id')
        ->where('transactions.user_id', Auth()->user()->id)
        ->union($customer_account_pro)
        ->get();
        $movements = $customer_account;
        // return $movements;
        // // // return $customer_account_pro;
        return view('merchant_dashboard/financial_movement', compact('data', 'movements'));
    }
    public function filter_financial_movement(Request $request)
    {
        $from = $request->from;
        $to = $request->to;
        $data = bank_account::select('balance')->where('id', Auth::user()->id)->get();
        $customer_account_pro = DB::table('transactions')
            ->select(
                DB::raw('null as transaction_date'),

                DB::raw('(CASE WHEN financial_transactions.entry_type = "Debit" THEN credit_cards.card_holder ELSE CONCAT("-",credit_cards.card_holder) END) AS account_number'),
                DB::raw('(CASE WHEN financial_transactions.entry_type = "Debit" THEN financial_transactions.amount ELSE null END) AS AmountDebit'),
                DB::raw('(CASE WHEN financial_transactions.entry_type = "Cred" THEN financial_transactions.amount ELSE null END) AS AmountDebit'),
                'transactions.id AS Reference',
                DB::raw(
                    '(CASE WHEN financial_transactions.entry_type = "Debit" THEN 1 ELSE 2 END) AS IsLine'
                )
            )
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->leftJoin('credit_cards', 'credit_cards.id', '=', 'financial_transactions.bank_acount_id')
            ->whereBetween('transactions.transaction_date', [$from, $to])
            ->where('transactions.user_id', Auth()->user()->id)
            ->orderBy('Reference', 'asc');
        $customer_account = DB::table('transactions')
            ->select('transactions.transaction_date', 'transactions.description AS DescriptionOrAccountTitle', DB::raw('null as AmountDebit'), DB::raw('null as AmountCredit'), 'transactions.id AS Reference', DB::raw('null as IsLine'))
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->leftJoin('credit_cards', 'credit_cards.id', '=', 'financial_transactions.bank_acount_id')
            ->whereBetween('transactions.transaction_date', [$from, $to])
            ->where('transactions.user_id', Auth()->user()->id)
            ->union($customer_account_pro)
            ->get();
        $movements = $customer_account;
        // return $movements;
        // // // return $customer_account_pro;

        return view('merchant_dashboard/financial_movement', compact('data', 'movements'));
    }
    public function bank_account()
    {
        $merchant = Auth::user();
        $public_key = $merchant->public_key;
        $private_key = $merchant->private_key;
        $bank_acount = bank_account::where('user_id', $merchant->id)->first();
        $account_num = $bank_acount->account_number;
        $card_info = credit_cards::where('bank_accounts_id', $bank_acount->id)->first();
        $card_num = $card_info->card_number;
        $card_holder = $card_info->card_holder;
        $cvv = $card_info->cvv;
        $expiration_yy = $card_info->expiration_yy;
        $expiration_mm = $card_info->expiration_mm;
        return view('merchant_dashboard/bank_account_information', compact('public_key', 'private_key', 'bank_acount', 'card_info'));
    }
    public function seprateDate($date)
    {
        return  $dates = explode('/', $date);
    }
    public function update_acount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cvv' => ['required', 'max:3'],
        ]);
        $cvv = $request->input('cvv');
        Credit_cards::where('id', $request->id)->update(array('cvv' => $cvv));
        return redirect()->back();
    }
    public function key_genrator()
    {
        $merchant = Auth::user();
        $public_key = $merchant->public_key;
        $private_key = $merchant->private_key;
        return view('merchant_dashboard/key_generator', compact('public_key', 'private_key'));
    }
    public function key_generat()
    {
        $merchant = Auth::user();
        $public_key = $this->generate_string(15);
        $private_key = $this->generate_string(24);
        User::where('id', $merchant->id)->update(array(
            'public_key' => $public_key,
            'private_key' => $private_key
        ));
        return redirect()->back();
    }
    public function generate_string($strength = 16)
    {
        $input = '0123456789';
        $input_length = strlen($input);
        $random_string = '';
        for ($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string;
    }
    public function Ledger_accounts()
    {
        $accounts = DB::table('transactions')
        ->select(
            'financial_transactions.financial_acount_id',
            'financial_acounts.acount_name',
            DB::raw('SUM(CASE WHEN financial_transactions.entry_type = "Debit" THEN financial_transactions.amount ELSE -financial_transactions.amount END) AS Balance')
        )
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->where('transactions.user_id', '=', Auth::user()->id)
            ->groupBy('financial_transactions.financial_acount_id')
            ->orderBy('financial_transactions.financial_acount_id', 'asc')
            ->get();
        return $accounts;
    }
    public function customer_account_statement()
    {

        $customer_account_pro = DB::table('transactions')
            ->select(
                DB::raw('null as transaction_date'),
                DB::raw('(CASE WHEN financial_transactions.entry_type = "Debit" THEN financial_acounts.acount_name ELSE CONCAT("-",financial_acounts.acount_name) END) AS DescriptionOrAccountTitle'),
                DB::raw('(CASE WHEN financial_transactions.entry_type = "Cred" THEN financial_transactions.amount ELSE null END) AS AmountDebit'),
                DB::raw('(CASE WHEN financial_transactions.entry_type = "Debit" THEN financial_transactions.amount ELSE null END) AS AmountDebit'),
                'transactions.id AS Reference',
                DB::raw(
                    '(CASE WHEN financial_transactions.entry_type = "Debit" THEN 1 ELSE 2 END) AS IsLine'
                )
            )
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->whereBetween('transactions.transaction_date', ['2022-05-09', '2022-05-30'])
            ->where('transactions.user_id', Auth::user()->id)
            ->orderBy('Reference', 'Desc');
        $customer_account = DB::table('transactions')
            ->select('transactions.transaction_date', 'transactions.description AS DescriptionOrAccountTitle', DB::raw('null as AmountDebit'), DB::raw('null as AmountCredit'), 'transactions.id AS Reference', DB::raw('null as IsLine'))
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->whereBetween('transactions.transaction_date', ['2022-05-09', '2022-05-30'])
            ->where('transactions.user_id', Auth::user()->id)
            ->union($customer_account_pro)
            ->get();







        return count($customer_account);
    }
    public function getinvoice()
    {
        $item = PaymentInvoice::get()->where('user_id', Auth::user()->id);
        return count($item);
    }
    public function transferMony(){
        return view('merchant_dashboard/transferMony');
    }


    //transfer mony by merchant
    public function transfer(Request $request){
        $userId = $this->getUserId();

        $validator = Validator::make(
            $request->all(),
            [
                'email' => ['required', 'min:3', 'email', 'not_in:' . auth::user()->email],
                'transfer_money' => ['required', 'numeric', 'max:600000', 'min:1000'],
                'transfer_desc' => ['required', 'min:10']
            ],
            [
                'email.required' => ' الحقل مطلوب',
                'email.not_in' => 'هذا ايميلك المسجل به الآن !',
                'transfer_money.required' => ' الحقل مطلوب',
                'transfer_money.numberic' => 'قيمة رقمية',
                'transfer_money.max' => 'ادخل مبلغ اقل من 600000',
                'transfer_money.min' => 'ادخل مبلغ اكبر من 100',
                'transfer_desc.required' => 'الحقل مطلوب',
                'transfer_desc.min' => 'يجب ادخال اكثر من عشرة احرف',

            ]
        );

        $email = $request->input('email');
        $money = $request->input('transfer_money');
        $description = $request->input('transfer_desc');
        $tax = 200;

        if ($this->currentBalance() <= 100) {
            $balanecError = "رصيدك غير كافي";
            $validator->errors()->add('customError', $balanecError);
            return Redirect::back()->withInput()->withErrors($validator);
        } elseif ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }


        $value = $this->getAnotherBalance($email);
        $total_balance = $value += $money;
        $valuee=$this->currentBalance();
        $total_balancee=$valuee -=$money;
        
        
        $recieverID = $this->getAnotherUsersId($email);

        $date = Carbon::now();
        $date = $date->toDateTimeString();
        bank_account::where('user_id', $recieverID)->update(array('balance' => $total_balance));
        bank_account::where('user_id',Auth::user()->id)->update(array('balance' => $total_balancee));
        notify()->success('تم تحويل المبلغ شكرا لك ', 'معلومات');
        return Redirect::back();
    }
    public function getUserId()
    {
        return    $userId = Auth::user()->id;
    }
    public function currentBalance()
    {
        $value = DB::select('SELECT balance from bank_accounts where user_id=?', [$this->getUserId()]);

        foreach ($value as $val) {
            $val = $val->balance;
        }
        return $val;
    }
    public function getAnotherBalance($email)
    {
        $value = DB::select('SELECT s.balance FROM users u inner join bank_accounts s on u.id = s.user_id WHERE u.email =?', [$email]);
        foreach ($value as $val) {
            $val = $val->balance;
        }
        return $val;
    }
    public function getAnotherUsersId($email)
    {
        $value = DB::select('SELECT id from users where email=?', [$email]);
        foreach ($value as $val) {
            $val = $val->id;
        }
        return $val;
    }
    
}
