   <!DOCTYPE html>
   <html>
   <head>
      <title>Hotel booking website</title>
         <!-- <link rel="stylesheet" type="text/css" href="HotelBookingRegistration.css"> -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
         <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="HBR.css">
         <link rel="stylesheet" href="HotelBookingRegistration.css">
   </head>

   <body>

   <section class="header">

     <nav class="navbar">
      <a href="home">home</a>
      <a href="aboutus">about</a>
      <a href="contact">contact us</a>
      <button ><a href="/A_HotelBookingRegistrationview" style="text-decoration: none;">YOUR BOOKING</a></button>
      </nav>

   

   </section>
      
   <section>
      <div class="heading" style="background:url(header-bg-3.png) no-repeat">
            <h1>book now</h1>
      </div>
   </section>

<!-- booking section starts  -->

   <section class="booking">
      <h1 class="heading-title">book your trip!</h1>
         <form action="{{ route('HotelBookingRegistration.store') }}" id="div1" method="post" enctype="multipart/form-data" class="book-form">
            @csrf
            <div class="flex">
               <div class="inputBox">
                  <span>name :</span>
                  <input type="text" placeholder="enter your name" name="name">
                   @error('name')
                    <span>{{$message}}</span>                  
                @enderror
               </div>
            <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
             @error('email')
                    <span>{{$message}}</span>                  
                @enderror
         </div>
         <div class="inputBox">
            <span>age :</span>
            <input type="age" placeholder="enter your age" name="age">
            @error('age')
                    <span>{{$message}}</span>                  
                @enderror
         </div>
            
            <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
             @error('phone')
                    <span>{{$message}}</span>                  
                @enderror
         </div>
            <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="bookingdate">
         </div>
            <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="abookingdate">
         </div>
            <div class="inputBox">
            <span>Aadhar No. :</span>
            <input type="number" placeholder="enter your aadhar no." name="aadhar">
         </div><br>
            <div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="app-form-control" type="file" name="image" id="image"><br>
            <font color="red">*<b>please add the aadhar card in PDF format.</b></font>
            </div><br>
               <button  class="btn">BOOK
         </button>
         
         </form>
      </div>
   </section>
</div>
<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +918799051416 </a>
         <a href="#"> <i class="fas fa-phone"></i> +917575427768 </a>
         <a href="#"> <i class="fas fa-envelope"></i> krutanshu@gmail.com  </a>
         <a href="#"> <i class="fas fa-map"></i> gujarat, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->


   </body>
   </html>

