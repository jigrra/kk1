<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="ContactUs.css"> 
</head>
<body background="banner.png">
	
		
		<div class="section">
		<ul class="nav-area">
				<li> <a href="home">HOME</a></li>
				<li> <a href="aboutus">ABOUT US</a></li>
				<li> <a href="p2">PACKAGE INFO</a></li>
				
			</ul>
		</div>

	<div class="contact-title">
		<h1>We are always ready to serve You!</h1>
		
	</div>
	<div class="contact-form">
		<form action="{{ route('contact.store') }}" id="contact-form" method="post">
			@csrf
			<p><b>Your Name</b></p>
			<input type="text" name="name" class="form-control"><br>
			 @error('name')
                    <span>{{$message}}</span>                  
                @enderror
			<p><b>Your Email</b></p>
			<input type="email" name="email" class="form-control"  ><br>
			 @error('email')
                    <span>{{$message}}</span>                  
                @enderror

			<p><b>Your Message</b></p>

			<textarea name="message" class="form-control" rows="4" ></textarea><br>
			 @error('message')
                    <span>{{$message}}</span>                  
                @enderror
			
			<button class="form-control submit">Send Message
			</button>

			<!-- <button class="app-form-button"><a href="/A_contactview" style="text-decoration: none;">YOUR DATA</a></button> -->

		</form>
	</div>

</body>
</html>