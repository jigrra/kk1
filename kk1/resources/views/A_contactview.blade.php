<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>A contact data</title>

    <style>
        body{
            background: linear-gradient(to right, black 0%, white 100%);
        }
 
        .h4{
            color: white;
            background-color: black;
            height: 60px;
            border:3px solid red;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
        }
        .filter {
            float: right;
            margin-right: 120px;
        }
        .bor_rad{
            border-radius: 10px;
            text-decoration: none;
        }

        .editbtn{
            color: white; 
            background-color: blue; 
            text-decoration:none; 
            border:1px solid black;
            text-decoration: none;
            border-radius: 8px;
        }
        .editbtn a{
            color: white; 
            text-decoration: none;   
        }
        .editbtn:hover{
            background-color: darkblue; 
            text-decoration: none;
           
        }

        .deletebtn{
            color: white;
            background-color: black;
            border-radius: 8px;
        }
        .deletebtn:hover{
            color: white;
            background-color: green;
            border-radius: 8px;
        }

         .pdf {
            float: right;
            margin-left: 120px;
            margin-top: 25px;

        }

        .pdf button{
            background-color:red;
            border-radius: 15px;
            width: 130px;   
        }
    </style>
</head>
<body>
<br><br>
<a href="dashboard">Back</a>


<div class=" py-3">
        <div class="h4 container" >contact data View</div>
</div>
<div class="filter .bor_rad">
        <form action="/search" method="post">
            @csrf
                <input type="text" name="contact_name" class="bor_rad" placeholder="Search.." id="">
                <button type="submit" class="bor_rad">Search</button>
        </form>
</div><br>

<div class="container"><br>
    <div class="card border-0 shadow-lg">
        <div class="card-body">

        <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Edit</th> 
                        <th>Delete</th>
                    </tr>
                    
                    @foreach ($data as $c1)
                    <tr valign="middle"> 
                        <td>{{ $c1->id }}</td>                      
                        <td>{{ $c1->name }}</td>
                        <td>{{ $c1->email }}</td>
                        <td>{{ $c1->message }}</td>
         <td><button class="editbtn"><a href="\contact\{{ $c1->id }}\edit" >Edit</a></button></td> 
                        <td>
                            <form action="\contact\{{ $c1->id }}" method="post"> 
                                @csrf 
                                @method('delete')    
                                <input type="submit" value="delete" class="deletebtn">
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                   
                </table>

        </div>
    </div>

    <!-- {{-- all data into PDF  --}} -->
<div class="pdf bor_rad">
        
    <form action="downloadpdff" method="post">
        @csrf
        <button>Download</button>
    </form>
</div><br>


  <!-- {{-- for pagination --}} -->
    <br><h3 style="width: 800px; height: 80px;"> {{$data->links( )}} </h3>

</body>
</html>