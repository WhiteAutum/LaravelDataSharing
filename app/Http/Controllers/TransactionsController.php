<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    //
    public function Search_Transaction()
    {
        return view('Transactions.Search_Transaction');
    }
    public function Ether_Transaction()
    {
        return view('Transactions.Ether_Transaction');
    }
}
