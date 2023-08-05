<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\validator;
use Illuminate\support\facades\file;


class categorycontroller extends Controller
{
    public function index(){

      
        return view('category',['categories']);
    }

    public function create(){
        return view('categorycreate');
    }



        

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'roomtype' => 'required',
            'roomprice' => 'required',
            'image' => 'sometimes|image:png,jpg,jpeg'
        ]);

        if ( $validator->passes() ) {
            
            $category = new Category();
            $category->roomtype = $request->roomtype;
            $category->roommprice = $request->roomprice;
            $category->save();

            if ($request->image) {
                $ext = $request->image->getClientOriginalExtension();
                $newFileName = time().'.'.$ext;
                $request->image->move(public_path().'/upload/category',$newFileName);

                $category->image = $newFileName;
                $category->savecategory();
            }

            $request->session()->flash('success','category added successfully.');

            return redirect()->route('category.index');
        }
        else
        {
            

            return redirect()->route('category.create')->withErrors($validator)->withInput();
        }
    }
}

