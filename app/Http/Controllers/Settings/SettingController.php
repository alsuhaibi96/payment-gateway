<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;


class SettingController extends Controller
{
    function generateRoles(){
        Role::create([
            'name' => 'Super Admin',
            'display_name' => 'مالك الموقع', // optional
            'description' => 'مالك الموقع ', // optional
        ]);
        Role::create([
            'name' => 'Contnet Admin',
            'display_name' => 'مديرالمحتوى', // optional
            'description' => 'مدير محتوى الموقع', // optional
        ]);
        Role::create([
            'name' => 'Merchant',
            'display_name' => 'حساب شركة', // optional
            
        ]);
        Role::create([
            'name' => 'Customer',
            'display_name' => 'حساب عميل', // optional
            
        ]);
    }
}
