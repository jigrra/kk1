<?php

namespace App\Http\Controllers;
use App\Models\HotelBookingRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\brreq;
use App\Rules\brrule;
use PDF;

class HotelBookingRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // return view('HotelBookingRegistration'); 
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
    public function store(brreq $request)
    {
        //return $request;  
       $name = $request->get('name');
       $email = $request->get('email');
       $age = $request->get('age');
       $phone = $request->get('phone');
       $bookingdate = $request->get('bookingdate');
       $abookingdate = $request->get('abookingdate');
       $aadhar = $request->get('aadhar');
        $imagee = time().'.'.$request->image->extension();
       $request->image->storeAs('images', $imagee);

       $HotelBookingRegistration = new HotelBookingRegistration();
       $HotelBookingRegistration->name = $name;
       $HotelBookingRegistration->email = $email;
       $HotelBookingRegistration->age = $age;
       $HotelBookingRegistration->phone = $phone;
       $HotelBookingRegistration->bookingdate = $bookingdate;
       $HotelBookingRegistration->abookingdate = $abookingdate;
       $HotelBookingRegistration->aadhar = $aadhar;
       // $HotelBookingRegistration->image = $imagee;
       $HotelBookingRegistration->save();
       return view('bookconfirm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HotelBookingRegistration  $hotelBookingRegistration
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $data = HotelBookingRegistration::paginate(3);
        return view('A_HotelBookingRegistrationview',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HotelBookingRegistration  $hotelBookingRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelBookingRegistration $HotelBookingRegistration)
    {
         $id=$HotelBookingRegistration->id;
        $HotelBookingRegistration=HotelBookingRegistration::find($id);
        return view("editHotelBookingRegistration",compact('HotelBookingRegistration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HotelBookingRegistration  $hotelBookingRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HotelBookingRegistration $HotelBookingRegistration)
    {
        $HotelBookingRegistration->name=$request->name;
        $HotelBookingRegistration->email=$request->email;
        $HotelBookingRegistration->phone=$request->phone;
        $HotelBookingRegistration->bookingdate=$request->bookingdate;
        $HotelBookingRegistration->abookingdate=$request->abookingdate;
        $HotelBookingRegistration->aadhar=$request->aadhar;
if($request->has('image')) {
            // Delete the old image if it exists
            if ($HotelBookingRegistration->image) {
                Storage::delete('images/' . $HotelBookingRegistration->image);
            }
            
            // Upload the new image
            $image = $request->file('image');
            $file_name = "IMG-".time().".".$image->getClientOriginalExtension();
            
            $imagePath = $image->storeAs('images', $file_name); // store in public/images direcctory


            // $image->move(public_path('/images'), $file_name);
 
            // Update the HotelBookingRegistration record with the new image path
            $HotelBookingRegistration->image = $file_name;    
        }
        $HotelBookingRegistration->save();

        return redirect('/A_HotelBookingRegistrationview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HotelBookingRegistration  $hotelBookingRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelBookingRegistration $HotelBookingRegistration)
    {
         $HotelBookingRegistration->delete();
        return redirect('/A_HotelBookingRegistrationview');
    }

    public function search(request $request)
    {
        $h_name=$request->HotelBookingRegistration_name;
        $data=DB::table('hotel_booking_registrations')->where('name',$h_name)->paginate();
        return view("/A_HotelBookingRegistrationview",compact('data'));
    }

    public function dow_pdf()
    {
        $data = HotelBookingRegistration::all();
        // share data to view 
        view('view_pdf',compact('data'));
        // 
        $pdf = PDF::loadView('view_pdf',compact('data'));

        return $pdf->download('HotelBookingRegistration.pdf');
    }
}
