<?php $total=0; ?>

<!DOCTYPE html>
<html lang="en">
<head> 
   
    <style>
       .title{
        color: Green;
        background: yellow;
        font-size: 40px;
        text-align: center;
       }
       table,tr,td,th{
        border: 1px solid black;
        border-collapse: collapse;
        font-size: 19px;
        text-align: left;
       }
       th{
        text-align: center;
       }
        
    </style>
   
</head>
<body>



<div class="title py-1" >
        <div class="h4 container" >HotelBookingRegistration data View</div>
</div>


<!-- {{-- all HotelBookingRegistration data in form format  --}} -->
<div class="container"><br>
    <div class="card border-0 shadow-lg">
        <div class="card-body">

            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>bookingdate</th>
                    <th>aadhar</th>
                    <!-- {{-- <th>Image</th> --}} -->
                </tr>
                    
                @foreach($data as $t)

                <tr valign="middle">
                    <td>{{ $t->id }}</td>                      
                    <td>{{ $t->name }}</td>
                    <td>{{ $t->email }}</td>
                    <td>{{ $t->phone }}</td>
                    <td>{{ $t->bookingdate }}</td>
                    <td>{{ $t->aadhar }}</td>
                    <!-- {{-- <td> <img src="{{asset('/images/' . $t->image)}}" class="img-thumbnail" alt="Responsive image" style="width:90px;height:90px"></td> --}} -->
                </tr>

                @endforeach

            </table>             
        </div>
    </div>
</div>


</body>
</html>