<?php

namespace App\Http\Controllers\merchants;

use App\Http\Controllers\Controller;
use App\Models\bank_account;
use App\Models\Credit_cards;
use App\Models\PaymentInvoice;
use App\Models\TransactionOverView;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $Total_sales=$this->Ledger_accounts(4);
        // etc.
        
        
        return view('merchant_dashboard/home', compact('data','Total_sales'));
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

                DB::raw('(CASE WHEN financial_transactions.entry_type = "Debit" THEN bank_accounts.account_number ELSE CONCAT("-",bank_accounts.account_number) END) AS account_number'),
                DB::raw('(CASE WHEN financial_transactions.entry_type = "Debit" THEN financial_transactions.amount ELSE null END) AS AmountDebit'),
                DB::raw('(CASE WHEN financial_transactions.entry_type = "Cred" THEN financial_transactions.amount ELSE null END) AS AmountDebit'),
                'transactions.id AS Reference',
                DB::raw(
                    '(CASE WHEN financial_transactions.entry_type = "Debit" THEN 1 ELSE 2 END) AS IsLine'
                )
            )
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->leftJoin('bank_accounts', 'bank_accounts.id', '=', 'financial_transactions.bank_acount_id')
            ->whereBetween('transactions.transaction_date', ['2022-05-09', '2022-05-26'])
            ->where('transactions.user_id', Auth()->user()->id)
            ->orderBy('Reference', 'asc');
        $customer_account = DB::table('transactions')
            ->select('transactions.transaction_date', 'transactions.description AS DescriptionOrAccountTitle', DB::raw('null as AmountDebit'), DB::raw('null as AmountCredit'), 'transactions.id AS Reference', DB::raw('null as IsLine'))
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->leftJoin('bank_accounts', 'bank_accounts.id', '=', 'financial_transactions.bank_acount_id')
            ->whereBetween('transactions.transaction_date', ['2022-05-09', '2022-05-26'])
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

                DB::raw('(CASE WHEN financial_transactions.entry_type = "Debit" THEN bank_accounts.account_number ELSE CONCAT("-",bank_accounts.account_number) END) AS account_number'),
                DB::raw('(CASE WHEN financial_transactions.entry_type = "Debit" THEN financial_transactions.amount ELSE null END) AS AmountDebit'),
                DB::raw('(CASE WHEN financial_transactions.entry_type = "Cred" THEN financial_transactions.amount ELSE null END) AS AmountDebit'),
                'transactions.id AS Reference',
                DB::raw(
                    '(CASE WHEN financial_transactions.entry_type = "Debit" THEN 1 ELSE 2 END) AS IsLine'
                )
            )
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->leftJoin('bank_accounts', 'bank_accounts.id', '=', 'financial_transactions.bank_acount_id')
            ->whereBetween('transactions.transaction_date', [$from, $to])
            ->where('transactions.user_id', Auth()->user()->id)
            ->orderBy('Reference', 'asc');
        $customer_account = DB::table('transactions')
            ->select('transactions.transaction_date', 'transactions.description AS DescriptionOrAccountTitle', DB::raw('null as AmountDebit'), DB::raw('null as AmountCredit'), 'transactions.id AS Reference', DB::raw('null as IsLine'))
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->leftJoin('bank_accounts', 'bank_accounts.id', '=', 'financial_transactions.bank_acount_id')
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
    public function Ledger_accounts($id)
    {
        $accounts = DB::table('transactions')
        ->select(
            'financial_transactions.financial_acount_id',
            'financial_acounts.acount_name',
            DB::raw('SUM(CASE WHEN financial_transactions.entry_type = "Debit" THEN financial_transactions.amount ELSE -financial_transactions.amount END) AS Balance')
        )
            ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
            ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
            ->where('transactions.user_id', '=', $id)
            ->groupBy('financial_transactions.financial_acount_id')
            ->orderBy('financial_transactions.financial_acount_id', 'asc')
            ->first();
        return $accounts->Balance;
    }
}
