<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>A Booking data</title>

    <style>
        body{
            background: linear-gradient(to right, yellow 0%, green 100%);
        }
 
        .h4{
            color: white;
            background-color: red;
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
            background-color: red;
            border-radius: 8px;
        }
        .deletebtn:hover{
            color: white;
            background-color: darkred;
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


<div class=" py-3">
        <div class="h4 container" >Booking data View</div>
</div>

<div class="container"><br>
    <div class="card border-0 shadow-lg">
        <div class="card-body">
           
        <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>image</th>
                        <th>type</th>
                        <th>description</th>
                        <th>Rate</th> 
                    </tr>
                    
                    @foreach ($data as $r1)
                    <tr valign="middle"> 
                        <td>{{ $r1->id }}</td>                      
                        <td> <img src="{{asset('storage/images/' . $r1->image)}}" class="img-thumbnail" alt="Responsive image" style="width:90px;height:90px"></td>
                        <td>{{ $r1->type }}</td>
                        <td>{{ $r1->description }}</td>
                        <td>{{ $r1->rate }}</td>
                        <td><button class="editbtn"><a href="\room\{{ $r1->id }}\edit" >Edit</a></button></td> 
                        <td>
                            <form action="\room\{{ $r1->id }}" method="post"> 
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
<!--
    {{-- all data into PDF  --}} -->
<! <div class="pdf bor_rad"> -->
        
    <! <form action="downloadpdf" method="post"> -->
        <!-- @csrf -->
        <!- <button>Download</button> -->
    <!-</form> -->
<!-</div><br> -->

    <!-- {{-- for pagination --}} -->
    <!- <br><h3 style="width: 800px; height: 80px;"> {{$data->links( )}} </h3> --> -->
 -->
</body>
</html> 