<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    //

 //    public $Web3 =require ("web3");
    public function accountlist()
    {
        return view('Accounts.accountlist');
    }
    public function chargeAccount()
    {
        return view('Accounts.chargeAccount');
    }

    public function createAccount()
    {
        return view('Accounts.createAccount');
    }

    public function getBalance()
    {
        return view('Accounts.getBalance');
    }
    public function rigisterAccounts()
    {
        return view('Accounts.rigisterAccounts');
    }
    public function rigisterAccountList()
    {
        return view('Accounts.rigisterAccountList');
    }


}
