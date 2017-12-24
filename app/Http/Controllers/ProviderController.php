<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    //
    public function Provider_data()
    {
        return view('Provider.Provider_data');
    }

    public   function  Data_List()
    {
        return view("Provider.Data_List");
    }
    public   function  Provider_Task()
    {
        return view("Provider.Provider_Task");
    }
    public   function  Task_List()
    {
        return view("Provider.Task_List");
    }

}
