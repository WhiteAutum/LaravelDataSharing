<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequesterController extends Controller
{
    //
    public function Requeste_Data()
    {
        return view('Requeste.Requeste_Data');
    }

    public function Data_List()
    {
        return view('Requeste.Data_List');
    }

    public function Requeste_Task()
    {
        return view('Requeste.Requeste_Task');
    }

    public function Task_List()
    {
        return view('Requeste.Task_List');
    }
}
