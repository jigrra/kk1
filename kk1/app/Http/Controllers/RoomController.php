<?php

namespace App\Http\Controllers;
use App\Models\room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('room');
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
    public function store(Request $request)
    {
       $imagee = time().'.'.$request->image->extension(); 
       $request->image->storeAs('images', $imagee);
       $type = $request->get('type');
       $description = $request->get('description');
       $rate = $request->get('rate');
            

       $room = new room();
       $room->image = $imagee;
       $room->type = $type;
       $room->description = $description;
       $room->rate = $rate;
       $room->save();
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = room::all();
        return view('U_roomview',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(room $room)
    {
         $id=$room->id;
        $room=room::find($id);
        return view("A_room",compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, room $room)
    {
        if($request->has('image')) {
            // Delete the old image if it exists
            if ($room->image) {
                Storage::delete('images/' . $room->image);
            }
            
            // Upload the new image
            $image = $request->file('image');
            $file_name = "IMG-".time().".".$image->getClientOriginalExtension();
            
            $imagePath = $image->storeAs('images', $file_name); // store in public/images direcctory

        $room->type=$request->type;
        $room->description=$request->description;
        $room->rate=$request->rate;
      

            // $image->move(public_path('/images'), $file_name);
 
            // Update the room record with the new image path
            $room->image = $file_name;    
        
        $room->save();

        return redirect('/A_roomview');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(room $room)
    {
        $room->delete();
        return redirect('/U_roomview');
    }
}
