<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories1;

class Categories1Controller extends Controller
{
     public function index()
    {
        $categories1 = Categories1::all();
        //return view ('students.index')->with('students', $students);
        return response()->json($categories1);
    }
}
