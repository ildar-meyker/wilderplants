@extends('layouts.default')

@section('content')
    {{--  header --}}
    <header class="header">

        <div class="container">
            <div class="header__inner">
                
                {{--  topbar --}}
                <nav class="header__topbar" id="topbar">
                    <div class="header__topbar__left">
                        
                        <button class="hamburger hamburger--squeeze header__burger" type="button" id="burger">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button> 

                        <ul class="nav-main nav-main--left">
                            <li><a href="#">Take A Quiz</a></li>
                            <li><a href="#">Shop Plants</a></li>
                            <li>
                                <a href="#">Plant Care</a>
                                <div class="nav-main__sublist">
                                    <ul>
                                        <li><a href="#">Plant Parenthood</a></li>
                                        <li><a href="#">A-Z Care Cards</a></li>
                                    </ul>
                                </div>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="header__topbar__center">
                        <a href="#">
                            <img src="{{ asset('/img/logo.svg') }}" alt="" class="header__logo">
                        </a>
                    </div>
                    <div class="header__topbar__right">
                        <ul class="nav-main nav-main--right">
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Why Plants</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                        <ul class="nav-main nav-main--icons">
                            <li>
                                <a href="#">
                                    <i class="icomoon-heart"></i>
                                </a>
                            </li>
                            <li class="nav-main__cart">
                                <a href="#">
                                    <i class="icomoon-shopping-bag"></i>
                                    <span class="nav-main__cart__count">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                {{-- /topbar --}}

                <h1 class="h1 header__h1">Shop plants</h1>
            </div>
        </div>

        {{--  mobile --}}
        <nav class="nav-mobile" id="nav-mobile">
            <ul>
                <li><a href="#">Take A Quiz</a></li>
                <li><a href="#">Shop Plants</a></li>
                <li>
                    <a href="#" class="nav-mobile__arrow">Plant Care</a>
                    <ul>
                        <li><a href="#">Plant Parenthood</a></li>
                        <li><a href="#">A-Z Care Cards</a></li>
                    </ul>
                </li>
                <li><a href="#">Books</a></li>
                <li><a href="#">Why Plants</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Wishlist</a></li>
            </ul>
        </nav>
        {{-- /mobile --}}

	</header>
    {{-- /header --}}

	{{--  products --}}
    <section class="products">
        <div class="container">

            <div class="products__filter">
                <button type="button" class="button-link button-link--type-2">
                    Filters & search
                </button>
            </div>

            <div class="nav-pager__count">Showing 1 - 24 of 90 Plants</div>

            <div class="products__inner">
                <div class="products__col-side"></div>
                <div class="products__col-main">

                    {{--  list --}}
                    <div class="products__list">

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/AGLA-PI1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AGLAONEMA PINK</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-glasses"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like is-active">
                                    <i class="icomoon-heart-o"></i>
                                    <i class="icomoon-heart"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/AGLA-SB1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AGLAONEMA SILVER BAY</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-glasses"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ALOC-AM1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AIR PLANT</div>
                                    <div class="products__icons">
                                        <i class="products__icon-moon"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ALOC-OD1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALBERTA SPRUCE</div>
                                    <div class="products__icons">
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ALOE-HU1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOCASIA CALIDORA</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ALOE-VE1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOCASIA POLLY</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ANTH-AN1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOE HEDGEHOG</div>
                                    <div class="products__icons">
                                        <i class="products__icon-plane"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ASPA-SE1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOE VERA</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-plain"></i>
                                        <i class="products__icon-nasa"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ASPL-NI1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ANTHURIUM</div>
                                    <div class="products__icons">
                                        <i class="products__icon-bacteria"></i>
                                        <i class="products__icon-footprint"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/AGLA-PI1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AGLAONEMA PINK</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-glasses"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/AGLA-SB1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AGLAONEMA SILVER BAY</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-glasses"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ALOC-AM1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AIR PLANT</div>
                                    <div class="products__icons">
                                        <i class="products__icon-moon"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ALOC-OD1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALBERTA SPRUCE</div>
                                    <div class="products__icons">
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ALOE-HU1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOCASIA CALIDORA</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ALOE-VE1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOCASIA POLLY</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ANTH-AN1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOE HEDGEHOG</div>
                                    <div class="products__icons">
                                        <i class="products__icon-plane"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ASPA-SE1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOE VERA</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-plain"></i>
                                        <i class="products__icon-nasa"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/catalog/ASPL-NI1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ANTHURIUM</div>
                                    <div class="products__icons">
                                        <i class="products__icon-bacteria"></i>
                                        <i class="products__icon-footprint"></i>
                                    </div>
                                </div>
                                <a href="#" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    {{-- /list --}}

                    {{--  pager --}}
                    <nav class="nav-pager">
                        <ul>
                            <li class="is-active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </nav>
                    {{-- /pager --}}

                </div>
            </div>
        </div>
	</section>
    {{-- /products --}}


	{{--  choosing --}}
    <section class="choosing">
        <div class="container">
            <h2 class="h2 choosing__h1">Need help choosing your plants?</h2>
            <h3 class="h4 choosing__h2">Let us guide you!</h3>

            <div class="choosing__link">
                <a href="#" class="button-link">
                    Start now
                </a>
            </div>

            <div class="choosing__list">
                <div class="choosing__item">
                    <div class="choosing__image">
                        <img src="{{ asset('/img/svg-icons/icon-girl.svg') }}" alt="">
                    </div>
                    <div class="choosing__desc">
                        Tell us about yourself and your place
                    </div>
                </div>
                <div class="choosing__item">
                    <div class="choosing__image">
                        <img src="{{ asset('/img/svg-icons/icon-plants.svg') }}" alt="">
                    </div>
                    <div class="choosing__desc">
                        Get your personalized plant collection
                    </div>
                </div>
                <div class="choosing__item">
                    <div class="choosing__image">
                        <img src="{{ asset('/img/svg-icons/icon-paper.svg') }}" alt="">
                    </div>
                    <div class="choosing__desc">
                        Learn simple care rituals for beautiful plants
                    </div>
                </div>
            </div>
        </div>
	</section>
    {{-- /choosing --}}

	{{--  subscribe --}}
    <section class="subscribe">
        <div class="container">
            <h2 class="h3 subscribe__h1">Be part of our plant-life addicts community</h2>

            <form action="#" class="subscribe__form">
                <input type="text" placeholder="ENTER YOUR EMAIL HERE" class="subscribe__input">
                <button type="submit" class="subscribe__button">ОК</button>
            </form>
        </div>
	</section>
    {{-- /subscribe --}}

	{{--  footer --}}
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
                            <li><a href="#"><i class="icomoon-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="icomoon-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="icomoon-pinterest-p"></i> Pinterest</a></li>
                            <li><a href="#"><i class="icomoon-envelope-o"></i> hello@wilderplants.com</a></li>
                            <li><a href="#"><i class="icomoon-checkmark"></i> Feedback form</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <small>
                2021 @ Wilder. All Rights Reserved
            </small>
        </div>
	</footer>
    {{-- /footer --}}
@endsection