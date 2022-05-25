<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\user_profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    //show form of update user profile
    public function profile()
    {

        $id = Auth::user()->id;
        $user = User::with(['profile'])->find($id);
        $Total_sales = $this->Ledger_accounts();
        // return $Total_sales;
        return view('customer_dashboard.home', ['user' => $user],compact('Total_sales'));
    }
    public function addProfile()
    {
    }
    /** update profile with name, email, address and phone */
    function editProfile(Request $req)
    {

        $first_name = $req->first_name;
        $middle_name = $req->middle_name;
        $last_name = $req->last_name;
        $email = $req->email;
        $phone = $req->phone;
        $first_address = $req->first_address;
        $second_address = $req->second_address;
        $merchant_name = $req->merchant_name;


        $id = Auth::id();
        $user = User::where('id', Auth::id())->update([
            'first_name' => $first_name,
            'middle_name' => $middle_name,
            'last_name' => $last_name,
            'email' => $email

        ]);
        $user_profile = user_profile::where('user_id', Auth::id())->update([
            'first_address' => $first_address,
            'second_address' => $second_address,
            'phone' => $phone,
            'merchant_name'=>$merchant_name,

        ]);
        if ($user || $user_profile) {
            return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
        } else {
            return back()->with(['wrong' => 'خطاء لم يتم التعديل']);
        }
    }
    // edit image
    function editImage(Request $req)
    {
        Validator::validate($req->all(), [
            'avatar' => 'required|mimes:jepg,png,jpg,gif,svg|max:6000',
        ], [
            'avatar.required' => 'هذا الحقل مطلوب',
            'avatar.mimes' => 'الامتداد من نوع'

        ]);
        if ($req->hasFile('avatar')) {
            $image = $this->uploadFile($req->file('avatar'));
            $user_profile = user_profile::where('user_id', Auth::id())->update([
                'avatar' => $image
            ]);
        }



        if ($user_profile) {
            return redirect()->back()->with(['succes' => 'تم التعديل الصورة بنجاح']);
        } else {
            return back()->with(['eror' => ' الصورة خطاء لم يتم التعديل']);
        }
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
}
