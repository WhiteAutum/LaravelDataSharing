<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function Data_List()
    {
        return view('Search.Data_List');
    }
    public function Search_Pro_Data()
    {
        return view('Search.Search_Pro_Data');
    }

    public function Search_Req_Data()
    {
        return view('Search.Search_Req_Data');
    }
    public function Task_List()
    {
        return view('Search.Task_List');
    }
    public function Search_Pro_Task()
    {
        return view('Search.Search_Pro_Task');
    }
    public function Search_Req_Task()
    {
        return view('Search.Search_Req_Task');
    }
}
