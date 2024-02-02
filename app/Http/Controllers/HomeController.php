<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function account_statement()
    {
        $current_page = 'account_statement';
        return view('account_statement')->with('current_page', $current_page);
    }

    public function dashboard()
    {
        $current_page = 'dashboard';
        return view('dashboard')->with('current_page',$current_page);
    }
    
    public function fund_transfer()
    {
        $current_page = 'fund_transfer';
        return view('fund_transfer')->with('current_page',$current_page);; 
    }

    public function form_validate()
    {
        return view('form');
    }
    
}
