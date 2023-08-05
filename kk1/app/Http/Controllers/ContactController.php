<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Http\Requests\contactreq;
use App\Rules\contactrule;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('contact'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(contactreq $request)
    {
       $name = $request->get('name');
       $email = $request->get('email');
       $message = $request->get('message');

       $contact = new contact();
       $contact->name = $name;
       $contact->email = $email;
       $contact->message = $message;

       $contact->save();
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = contact::paginate(15);
        return view('A_contactview',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
         $id=$contact->id;
        $contact=contact::find($id);
        return view("editcontact",compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();

        return redirect('/A_contactview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
          $contact->delete();
        return redirect('/A_contactview');
    }

     public function search(request $request)
    {
        $c_name=$request->contact_name;
        $data=DB::table('contacts')->where('name',$c_name)->get();
        return view("/A_contactview",compact('data'));
    }

    public function dow_pdf()
    {
        $data = contact::all();
        // share data to view 
        view('contactview_pdf',compact('data'));
        // 
        $pdf = PDF::loadView('contactview_pdf',compact('data'));

        return $pdf->download('contact.pdf');
    }

    
}
