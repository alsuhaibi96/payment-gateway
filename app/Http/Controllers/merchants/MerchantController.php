<?php

namespace App\Http\Controllers\merchants;

use App\Http\Controllers\Controller;
use App\Models\bank_account;
use App\Models\PaymentInvoice;
use App\Models\TransactionOverView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MerchantController extends Controller
{
    public function __construct() {
         $this->middleware('auth');
    }
    public function index(){
        
        $data=bank_account::select('balance')->where('id',Auth::user()->id)->get();
        // etc.
        notify()->success('تم ايداع 10000000$ الى حسابك','تهانينا');
        return view('merchant_dashboard/home',compact('data'));
    }
    public function Transactions(){
        $data=bank_account::select('balance')->where('id',Auth::user()->id)->get();
        $transactions=TransactionOverView::where('user_id',Auth::user()->id)->paginate(3);
        return view('merchant_dashboard/Transactions',compact('data','transactions'));
    }
    public function listInvoice(){
        $data=bank_account::select('balance')->where('id',Auth::user()->id)->get();
        $Invoices=PaymentInvoice::with('Orders_invoice')->where('user_id',Auth::user()->id)->get();
        $Invoice_product=json_decode($Invoices[0]->orders_invoice->products);
        // return $Invoices[0];
        // return $Invoice_product;

        return view('merchant_dashboard/listInvoice',compact('data','Invoices'));

    }
    public function financial_movement($id){
        $data=bank_account::select('balance')->where('id',Auth::user()->id)->get();
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
            ->where('transactions.user_id', $id)
            ->orderBy('Reference', 'Desc');
        $customer_account = DB::table('transactions')
        ->select('transactions.transaction_date', 'transactions.description AS DescriptionOrAccountTitle', DB::raw('null as AmountDebit'), DB::raw('null as AmountCredit'), 'transactions.id AS Reference', DB::raw('null as IsLine'))
        ->leftJoin('financial_transactions', 'financial_transactions.transaction_id', '=', 'transactions.id')
        ->leftJoin('financial_acounts', 'financial_acounts.id', '=', 'financial_transactions.financial_acount_id')
        ->leftJoin('bank_accounts', 'bank_accounts.id', '=', 'financial_transactions.bank_acount_id')
        ->whereBetween('transactions.transaction_date', ['2022-05-09', '2022-05-26'])
        ->where('transactions.user_id', $id)
        ->union($customer_account_pro)
            ->get();
        $movements= $customer_account;
        // return $movements;
        // // // return $customer_account_pro;
        return view('merchant_dashboard/financial_movement',compact('data','movements'));

    }
}
