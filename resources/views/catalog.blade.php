@extends('layouts.default')

@section('content')
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
	
		<h1 class="h1 text-center text-white">Shop plants</h1>

	</header>

	<section>

		<div></div>

		<div>

			<div>
				<div>
					{{-- <img src="{{ asset('/img/catalog/AGLA-PI1.png') }}" alt=""> --}}
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


	<section class="about-guide">
        <div class="container">
            <h2 class="h2 about-guide__h1">Need help choosing your plants?</h2>
            <h3 class="h4 about-guide__h2">Let us guide you!</h3>

            <div class="about-guide__link">
                <a href="#" class="button-link">
                    Start now
                </a>
            </div>

            <div class="about-guide__list">
                <div class="about-guide__item">
                    <div class="about-guide__image">
                        <img src="{{ asset('/img/svg-icons/icon-girl.svg') }}" alt="">
                    </div>
                    <div class="about-guide__desc">
                        Tell us about yourself and your place
                    </div>
                </div>
                <div class="about-guide__item">
                    <div class="about-guide__image">
                        <img src="{{ asset('/img/svg-icons/icon-plants.svg') }}" alt="">
                    </div>
                    <div class="about-guide__desc">
                        Get your personalized plant collection
                    </div>
                </div>
                <div class="about-guide__item">
                    <div class="about-guide__image">
                        <img src="{{ asset('/img/svg-icons/icon-paper.svg') }}" alt="">
                    </div>
                    <div class="about-guide__desc">
                        Learn simple care rituals for beautiful plants
                    </div>
                </div>
            </div>
        </div>
	</section>

	<section class="subscribe">
        <div class="container">
            <h2 class="h3 subscribe__h1">Be part of our plant-life addicts community</h2>

            <form action="#" class="subscribe__form">
                <input type="text" placeholder="ENTER YOUR EMAIL HERE" class="subscribe__input">
                <button type="submit" class="subscribe__button">ОК</button>
            </form>
        </div>
	</section>

	<footer class="footer">
		<div class="container">
            <div class="footer__menu">

                <div class="footer__logo">
                    <a href="#">
                        <img src="{{ asset('/img/logo-dark.svg') }}" alt="">
                    </a>
                </div>
            
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

                <div class="footer__links footer__links--social">
                    <div>CONNECT WITH US</div>
                    <nav>
                        <ul>
                            <li><a href="#"><i class="icon icon-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="icon icon-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="icon icon-pinterest-p"></i> Pinterest</a></li>
                            <li><a href="#"><i class="icon icon-envelope-o"></i> hello@wilderplants.com</a></li>
                            <li><a href="#"><i class="icon icon-checkmark"></i> Feedback form</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <small>
                2021 @ Wilder. All Rights Reserved
            </small>
        </div>
	</footer>
@endsection