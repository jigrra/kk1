<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category View</title>
    <link rel="stylesheet"  href="bootstrap.min.css">

</head>
<body>
    <div class="bg-dark py-3">
        <div class="container">
           
    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Categories</div><br>
            <div>
              
            </div>
        </div>
        <form action="{{route('category.create')}}" method="get">

      
            @csrf
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="cname" class="form-lable">Room Type</label>
                        <input type="text" name="roomtype">
                    </div> 
<br>
                    <div class="mb-3">
                        <label for="brandname" class="form-lable">Room Price</label>
                          <input type="text" name="roomprice">

                    </div> <br>

                    <div class="mb-3">
                        <label for="image" class="form-lable">Image</label>
                          <input type="file" name="image">
                    </div>             <br>
                </div>
             </div>
             <button class="btn btn-primary mt-3 ">Save Category</button>
        </form>
    </div>
</body>
</html>