<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function checkuser()
    {
        if(auth()->user()->email=='kr@gmail.com')
        {
            return view('adminpage');
        }
        else
        {
             return view('home');
        }
    }
    public function checklogin()
    {
        if(auth()->user())
        {
            return view('p2');
        }
        else
        {
             return "login first";
        }
    }
}

