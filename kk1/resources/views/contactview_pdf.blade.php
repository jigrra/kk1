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
        <div class="h4 container" >Contact data View</div>
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
                    <th>Message</th>
                    <!-- {{-- <th>Image</th> --}} -->
                </tr>
                    
                @foreach($data as $c)

                <tr valign="middle">
                    <td>{{ $c->id }}</td>                      
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->message }}</td>
                    <!-- {{-- <td> <img src="{{asset('/images/' . $t->image)}}" class="img-thumbnail" alt="Responsive image" style="width:90px;height:90px"></td> --}} -->
                </tr>

                @endforeach

            </table>             
        </div>
    </div>
</div>


</body>
</html>