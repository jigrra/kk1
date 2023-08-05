<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin site</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	
</head>
<body background="homebg1.jpg">
	@section('header')
	<div>
	<header>
			<ul class="nav-area">
				
				<li><a href="/A_contactview">User Contact Us</a></li>
				
            <li>
                  	<form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                  </li>
				<li> @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                  </li>
                  <li>
                  	      @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                  </li>

				

			</ul>
			</header>
		</div>	<br>
	<h1>Welcome Admin! </h1>
	<div class="but">
		<a href="A_HotelBookingRegistrationview"><button class="ts">visitors Booking detail</button></a><br>
		<a href="A_contactview"><button class="ts">Users Contact Us</button></a><br>
	</div>
	@show

	@section('change')
	@show

	@section('footer')

	<footer>

  <div class="social">
					<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/?lang=en-in"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
				</div>

</footer>

	@show
</body>
</html>