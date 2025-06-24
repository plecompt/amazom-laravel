<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController
{
    //Dashboard home page
    public function index(){
        return view('dashboard.index');
    }
}
