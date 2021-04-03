<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agung Ramadhan Suyono</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}" />
	<!--Jquery-->
	<script type="text/javascript" src="{{ asset('js/JQuery3.3.1.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/lightslider.js') }}"></script>
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js') }}" crossorigin="anonymous"></script>
</head>

<body>
	<section class="main">
		<nav>
			<!--logo-------------------->
			{{-- <div class="menu-left">
				<img src="images/logo.png" class="logo">
				<a href="#">Agung Ramadhan Suyono</a>
				<a href="#">Website design</a>
			</div> --}}
			<!--sign-in----------------------------->
			{{-- <a href="#" class="sign-in">Sign In</a> --}}
		</nav>
		

        @yield('content')
	</section>
	<!--plans-->


	<!--sevices-heading-->
	{{-- <section class="services">
		<div class="s-heading">
			<p>Services</p>
			<p>Our Services,Trems and Conditions</p>
		</div>

		<div class="services-container">
			<!--1-box---------------------->
			<div class="s-box">
				<div class="s-icon front-icon"></div>
				<a href="#">Front End Devolper</a>
				<p>This website is best for your website make plan and this website pro10 /10 website services that
					other website not provide. </p>
				<button class="service-button">Read More</button>
			</div>
			<!--2----------------------->
			<div class="s-box">
				<div class="s-icon back-icon"></div>
				<a href="#">Back End</a>
				<p>This website is best for your website make plan and this website pro10 /10 website services that
					other website not provide. </p>
				<button class="service-button">Read More</button>
			</div>
			<!--3----------------------->
			<div class="s-box">
				<div class="s-icon seo-icon"></div>
				<a href="#">SEO/Security</a>
				<p>This website is best for your website make plan and this website pro10 /10 website services that
					other website not provide. </p>
				<button class="service-button">Read More</button>
			</div>
			<!--4----------------------->
			<div class="s-box">
				<div class="s-icon gui-icon"></div>
				<a href="#">GUI</a>
				<p>This website is best for your website make plan and this website pro10 /10 website services that
					other website not provide. </p>
				<button class="service-button">Read More</button>
			</div>


		</div>
	</section>
	<!----------------Team-------------------->
	<section class="team">
		<!--team-heading-->
		<div class="t-heading">
			<p>Team</p>
			<p>This is our Teams members</p>
		</div>
		<!--team-conatiner-->
		<div class="t-box-container">
			<!--member-box-1--->
			<div class="team-box">
				<!--member-img-->
				<div class="team-img t-img1"></div>
				<div class="t-id">
					<a href="#">Danyal Siddique</a>
					<p>Graphic designer</p>
				</div>
			</div>
			<!--member-box-2--->

			<div class="team-box">
				<!--member-img-->
				<div class="team-img t-img2"></div>
				<div class="t-id">
					<a href="#">Touseeq Ijaz</a>
					<p>Web designer</p>
				</div>
			</div>
			<!--member-box-3--->

			<div class="team-box">
				<!--member-img-->
				<div class="team-img t-img3"></div>
				<div class="t-id">
					<a href="#">Umair Malik</a>
					<p>Video Editor</p>
				</div>
			</div>

			<!--member-box-4--->

			<div class="team-box">
				<!--member-img-->
				<div class="team-img t-img4"></div>
				<div class="t-id">
					<a href="#">Zahid Chuhan</a>
					<p>Music Producer</p>
				</div>
			</div>

		</div>
	</section>
	<!--conatct-box------------------->
	<div class="contact">
		<h1>If You Have Any Project In Your Mind.</h1>
		<button class="contact-btn">Conatct Me</button>
	</div>
	<section class="palns">
		<!--plans-heading------------------------------------>
		<div class="p-heading">
			<p>Pricing</p>
			<p>This is our membership plan you will see chose the best plan.This Site make you design Attractive.</p>
		</div>
		<!--plan-conatiner-->
		<div class="p-box-conatiner">
			<!--plan-box-1-->
			<div class="p-box">
				<!--plan-box-heading-->
				<p class="p-box-heading">Enterprise Plan</p>
				<!--price-->
				<div class="price">
					<a href="#">12$</a>
					<p>Monthly</p>
				</div>
				<!--plan-box-details-->
				<p class="p-box-details">Free plan available when you regisration you account</p>
				<!--price-button-->
				<button class="price-button">Start Now</button>
			</div>
			<!--plan-box-2-->
			<div class="p-box">
				<!--plan-box-heading-->
				<p class="p-box-heading">Enterprise Plan</p>
				<!--price-->
				<div class="price">
					<a href="#">12$</a>
					<p>Monthly</p>
				</div>
				<!--plan-box-details-->
				<p class="p-box-details">Free plan available when you regisration you account</p>
				<!--price-button-->
				<button class="price-button">Start Now</button>
			</div>
			<!--plan-box-3-->
			<div class="p-box">
				<!--plan-box-heading-->
				<p class="p-box-heading">Enterprise Plan</p>
				<!--price-->
				<div class="price">
					<a href="#">12$</a>
					<p>Monthly</p>
				</div>
				<!--plan-box-details-->
				<p class="p-box-details">Free plan available when you regisration you account</p>
				<!--price-button-->
				<button class="price-button">Start Now</button>
			</div>
			<!--plan-box-4-->
			<div class="p-box">
				<!--plan-box-heading-->
				<p class="p-box-heading">Enterprise Plan</p>
				<!--price-->
				<div class="price">
					<a href="#">12$</a>
					<p>Monthly</p>
				</div>
				<!--plan-box-details-->
				<p class="p-box-details">Free plan available when you regisration you account</p>
				<!--price-button-->
				<button class="price-button">Start Now</button>
			</div>
		</div>
	</section>
	</section> --}}
	<!--footer-->
	{{-- <footer>
		<!---------------------------->
		<div class="dw-footer">
			<!--1-->
			<ul>
				<h1>Team</h1>
				<li><a href="#">Zahid Music</a></li>
				<li><a href="#">Azhar Editor</a></li>
				<li><a href="#">Tousee Owner</a></li>
			</ul>
			<!--2-->
			<ul>
				<h1>Channel</h1>
				<li><a href="#">Video Tutorial</a></li>
				<li><a href="#">Website</a></li>
				<li><a href="#">Bolgs</a></li>

			</ul>

			<!--socail-->
			<div class="social">
				<h1>Social</h1>
				<div class="social-icons">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
			<!--search-->
			<div class="search">
				<h1>Search</h1>
				<input type="search" placeholder=" Search Somthing Here">
			</div>
		</div>
		<!--copyright-->
		<p class="copyright">Going-To Internet copyright 2020</p>

	</footer> --}}
	<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
</body>

</html>