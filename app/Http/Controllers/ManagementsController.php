<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementsController extends Controller
{
    //
    public function Personal_Data_List()
    {
        return view('Managements.Personal_Data_List');
    }

    public function Provide_Data_Control()
    {
        return view('Managements.Provide_Data_Control');
    }

    public function Personal_Task_List()
    {
        return view('Managements.Personal_Task_List');
    }

    public function Provide_Task_Control()
    {
        return view('Managements.Provide_Task_Control');
    }

}
