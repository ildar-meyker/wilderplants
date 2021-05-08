<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

	<header class="header">

		<a href="#" class="header__logo">
			<img src="{{ asset('/img/logo.svg') }}" alt="">
		</a>

		<nav class="nav-main">
			<ul>
				<li><a href="#">Take A Quiz</a></li>
				<li><a href="#">Shop Plants</a></li>
				<li>
					<a href="#">Plant Care</a>
					<ul class="nav-main__sublist">
						<li><a href="#">Plant Parenthood</a></li>
						<li><a href="#">A-Z Care Cards</a></li>
					</ul>
				</li>
				<li><a href="#">Books</a></li>
				<li><a href="#">Why Plants</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Wishlist</a></li>
				<li><a href="#">Cart</a></li>
			</ul>
		</nav>
	
		<h1 class="h1">Shop plants</h1>

	</header>

	<section>

		<div></div>

		<div>

			<div>
				<div>
					<img src="{{ asset('/img/catalog/AGLA-PI1.png') }}" alt="">
				</div>
				<div>AGLAONEMA PINK</div>
			
			</div>

			<nav class="nav-pager">
				<ul>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Next</a></li>
					<li><a href="#">»</a></li>
				</ul>
			</nav>

		</div>
	
	</section>


	<section class="choosing">

		<h2 class="h2">Need help choosing your plants?</h2>
		<h3 class="h4">Let us guide you!</h3>

		<div class="text-center">
			<a href="#" class="button-link">
				Start now
			</a>
		</div>

		<div>
			<div>
				<img src="{{ asset('/img/svg-icons/icon-girl.svg') }}" alt="">
				<div>Tell us about yourself and your place</div>
			</div>
			<div>
				<img src="{{ asset('/img/svg-icons/icon-plants.svg') }}" alt="">
				<div>Get your personalized plant collection</div>
			</div>
			<div>
				<img src="{{ asset('/img/svg-icons/icon-paper.svg') }}" alt="">
				<div>Learn simple care rituals for beautiful plants</div>
			</div>
		</div>

	</section>

	<section class="subscribe">

		<h2 class="h3">Be part of our plant-life addicts community</h2>

		<form action="#">
			<input type="text" placeholder="ENTER YOUR EMAIL HERE">
			<button type="submit">ОК</button>
		</form>
	
	</section>

	<footer class="footer">
		
		<div class="footer__menu">

			<a href="#" class="footer__logo">
				<img src="{{ asset('/img/logo-dark.svg') }}" alt="">
			</a>
		
			<div class="footer__links">
				<div>WHY PLANTS</div>
				<nav>
					<ul>
						<li><a href="#">Take A Quiz</a></li>
						<li><a href="#">Shop Plants</a></li>
						<li><a href="#">Why Plants</a></li>
						<li><a href="#">Plant Parenthood</a></li>
					</ul>
				</nav>
			</div>

			<div class="footer__links">
				<div>WHY WILDER</div>
				<nav>
					<ul>
						<li><a href="#">Books</a></li>
						<li><a href="#">About Us</a></li>
					</ul>
				</nav>
			</div>

			<div class="footer__links">
				<div>CONNECT WITH US</div>
				<nav>
					<ul>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Pinterest</a></li>
						<li><a href="#">hello@wilderplants.com</a></li>
						<li><a href="#">Feedback form</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<small>
			2021 @ Wilder. All Rights Reserved
		</small>
	
	</footer>


    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>