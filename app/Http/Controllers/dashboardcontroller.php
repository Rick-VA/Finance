<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function income()
    {
        return view('dashboard');
    }

    public function store(Request $request)
    {
     //   
    }
}
