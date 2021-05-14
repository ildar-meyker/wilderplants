@extends('layouts.default')

@section('content')
    {{--  header --}}
    <header class="header header--fixed">

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

            </div>
        </div>

        {{--  mobile --}}
        <nav class="nav-side" id="nav-side">
            <ul>
                <li><a href="#">Take A Quiz</a></li>
                <li><a href="#">Shop Plants</a></li>
                <li class="nav-side__item nav-side__item--has-sublist">
                    <a href="#" class="nav-side__arrow">Plant Care</a>
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


    {{--  plant-card --}}
    <section class="plant-card">
        <div class="container">
            <div class="plant-card__row">
                <div class="plant-card__left">
                    <ul class="plant-card__list" id="photos-slider">
                        <li class="plant-card__item" data-thumb="/img/plant-card/3.webp">
                            <img src="/img/plant-card/3.webp" alt="">
                        </li>
                        <li class="plant-card__item" data-thumb="/img/plant-card/4.webp">
                            <img src="/img/plant-card/4.webp" alt="">
                        </li>
                        <li class="plant-card__item" data-thumb="/img/plant-card/5.webp">
                            <img src="/img/plant-card/5.webp" alt="">
                        </li>
                    </ul>
                </div>
            
                <div class="plant-card__right">
                    <h2 class="h2-a plant-card__title-1">Alocasia Polly</h2>
                    
                    <div class="plant-card__desc">
                        <strong>Botanical name:</strong> Alocasia Amazonica <br>
                        <strong>Nickname:</strong> Elephant Ear; hybrid of Alocasia watsoniana Hort. and Alocasia sanderiana Hort.
                    </div>
                    
                    <div class="plant-card__light">
                        <img src="/img/svg-icons/sun.svg" class="plant-card__light__icon">
                        <span class="plant-card__light__desc">Light: Bright Indirect</span>
                        <a href="#" class="plant-card__info js-open-info" data-src="/html/info/light">
                            <i class="icomoon-information-solid"></i>
                        </a>
                    </div>
                    
                    <div class="plant-card__buy">
                        <button type="button" class="button-filled button-filled--size-2 plant-card__buy__button">
                            Buy now
                        </button>
                    </div>
                    
                    <div class="plant-card__save">
                        <div class="plant-card__save__title">Alocasia Polly</div>

                        <button type="button" class="plant-card__save__button">
                            <span>Save to wishlist</span>
                            <i class="icomoon-heart-o"></i>
                        </button>
                    </div>

                    <section id="super-powers">
                        <h3 class="plant-card__title-2">BOTANICAL SUPER POWERS</h3>

                        <div class="plant-card__icons">
                            <div class="plant-card__icons__item active">
                                <div class="plant-card__icons__image">
                                    <img src="/img/svg-icons/air.svg" alt="">
                                </div>
                                <div class="plant-card__icons__name">air-purifying</div>
                            </div>
                            <div class="plant-card__icons__item">
                                <div class="plant-card__icons__image">
                                    <img src="/img/svg-icons/glasses.svg" alt="">
                                </div>
                                <div class="plant-card__icons__name">low light<br> tolerant</div>
                            </div>
                        </div>

                        <div class="plant-card__tabs">
                            <div class="plant-card__tabs__item active">
                                <div class="plant-card__tabs__title">Air-Purifying</div>
                                <div class="plant-card__tabs__desc">
                                    This plant cleans the air from toxins and VOCs like a pro.
                                </div>
                            </div>
                            <div class="plant-card__tabs__item">
                                <div class="plant-card__tabs__title">Low Light Tolerant</div>
                                <div class="plant-card__tabs__desc">
                                    This plant feels good even in dimly lit rooms.
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
    {{--  plant-card --}}

    <div class="amazon">
        <div class="container">
            <img src="/img/amazon/logo.png" alt=""> Buy on Amazon
        </div>
    </div>

    {{--  select-size --}}
    <section class="select-size">
        <div class="container">
            <div class="select-size__body">
                <div class="select-size__desc">
                    <div class="select-size__title">
                        <span>SELECT YOUR SIZE</span>
                        <a href="#" 
                            class="select-size__info js-open-info" 
                            data-src="/html/info/1">
                            <i class="icomoon-information-solid"></i>
                        </a>
                    </div>
                    <a href="#" class="select-size__link">Size guide</a>
                </div>
                <ul class="select-size__values">
                    <li>4"</li>
                </ul>
            </div>
        </div>
    </section>
    {{-- /select-size --}}

    {{--  plant-pots --}}
    <section class="plant-pots">
        <div class="container">
            <h2 class="h2-a plant-pots__title-1">4" Plants & Pots</h2>
            <div class="plant-pots__row">
                <div class="plant-pots__left">

                    <div class="plant-pots__large">
                        <div class="plant-pots__large__image">
                            <img src="/img/plant-pots/5.jpeg" alt="">
                        </div>
                        <div class="plant-pots__large__name">American Plant Exchange Aglaonema Chinese Evergreen Hot Pink Valentine Wishes Live Plant, 4" Pot, Indoor/Outdoor Air Purifier</div>
                        <div class="plant-pots__large__price">$21.99</div>
                        <button type="button" class="button-border button-border--size-2 plant-pots__large__button">
                            Quick view
                        </button>
                        <button type="button" class="button-filled button-filled--size-2 plant-pots__large__button">
                            Add to cart
                        </button>
                    </div>
                
                </div>
                <div class="plant-pots__right">
                    <div class="plant-pots__list">

                        <div class="plant-pots__item">
                            <div class="try-this__image">
                                <img src="/img/plant-pots/1.jpg" alt="">
                            </div>
                            <div class="try-this__desc">
                                <div class="try-this__name">Bloomingville Stoneware Flower Pot with Polka Dots, White Planter, 5"</div>
                                <div class="try-this__price">$18.07</div>
                                <button type="button" class="button-border try-this__button">
                                    Quick view
                                </button>
                                <button type="button" class="button-filled try-this__button">
                                    Add to cart
                                </button>
                            </div>
                        </div>

                        <div class="plant-pots__item">
                            <div class="try-this__image">
                                <img src="/img/plant-pots/2.jpg" alt="">
                            </div>
                            <div class="try-this__desc">
                                <div class="try-this__name">Bloomingville Stoneware Flower Pot with Polka Dots, Grey Planter, 5"</div>
                                <div class="try-this__price">$18.00</div>
                                <button type="button" class="button-border try-this__button">
                                    Quick view
                                </button>
                                <button type="button" class="button-filled try-this__button">
                                    Add to cart
                                </button>
                            </div>
                        </div>

                        <div class="plant-pots__item">
                            <div class="try-this__image">
                                <img src="/img/plant-pots/3.jpg" alt="">
                            </div>
                            <div class="try-this__desc">
                                <div class="try-this__name">Bloomingville Stoneware Flower Pot with Polka Dots, Black Planter, 5"</div>
                                <div class="try-this__price">$18.00</div>
                                <button type="button" class="button-border try-this__button">
                                    Quick view
                                </button>
                                <button type="button" class="button-filled try-this__button">
                                    Add to cart
                                </button>
                            </div>
                        </div>

                        <div class="plant-pots__item">
                            <div class="try-this__image">
                                <img src="/img/plant-pots/4.jpg" alt="">
                            </div>
                            <div class="try-this__desc">
                                <div class="try-this__name">Amazon Brand – Rivet Geometric Ceramic Planter Pot, 4.1"H, Grey</div>
                                <div class="try-this__price">$21.32</div>
                                <button type="button" class="button-border try-this__button">
                                    Quick view
                                </button>
                                <button type="button" class="button-filled try-this__button">
                                    Add to cart
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- /plant-pots --}}

    {{--  amazon-sm --}}
    <section class="amazon-sm">
        <div class="container">
            <div class="amazon-sm__body">
                <div class="amazon-sm__image">
                    <img src="/img/amazon/logo.png" alt="">
                </div>
                <div class="amazon-sm__text">
                    As an Amazon Associate I earn from qualifying purchases.
                </div>
            </div>
        </div>
    </section>
    {{-- /amazon-sm --}}

    {{--  light-sm --}}
    <section class="light-sm">
        <div class="container">
            <div class="light-sm__title-1">Light</div>
            <div class="light-sm__title-2">LOW TO BRIGHT INDIRECT</div>
            <a href="#" class="light-sm__link js-open-info" data-src="/html/info/light">Light Guide</a>
            <img src="/img/svg-icons/light.svg" alt="" class="light-sm__image">
        </div>
    </section>
    {{-- /light-sm --}}

    {{--  powers-sm --}}
    <section class="powers-sm">
        <div class="container">
            <h2 class="powers-sm__title-1">BOTANICAL SUPER POWERS</h2>
            <div class="powers-sm__list">
                <div class="powers-sm__item">
                    <div class="powers-sm__image">
                        <img src="/img/svg-icons/glasses.svg" alt="">
                    </div>
                    <div class="powers-sm__text">
                        <strong>Low light tolerant</strong>
                        <br>This plant feels good even in dimly lit rooms.
                    </div>
                </div>
                <div class="powers-sm__item">
                    <div class="powers-sm__image">
                        <img src="/img/svg-icons/air.svg" alt="">
                    </div>
                    <div class="powers-sm__text">
                        <strong>Air-purifying</strong>
                        <br>This plant cleans the air from toxins and VOCs like a pro.
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- /powers-sm --}}

    {{--  quote --}}
    <section class="quote">
        <div class="container">
            <div class="quote__text">
                Aglaonemas belong to the Araceae, a family of flowering plants. Their flowers grow in clusters called inflorescence. While they rarely flower, you might find the females hiding at the bottom while the males grow higher up in between leaves.
            </div>
        </div>
    </section>
    {{-- /quote --}}

    {{--  plant-story --}}
    <section class="plant-story">
        <div class="container">
            <div class="plant-story__row">
                <div class="plant-story__left">
                    <div class="plant-story__image">
                        <img src="/img/plant-story/1.webp" alt="">
                    </div>
                </div>
                <div class="plant-story__right less-more">
                    <h2 class="h2-a plant-story__title-1">Plant Story</h2>
                    <div class="article less-more__crop plant-story__text">
                        <div class="less-more__ruler">
                            <p>
                                The Aglaonema’s foliage represents nature, purity, and positive energy, and is considered around Asia as the ‘happy plant.’ According to Feng Shui traditions (the Chinese way to bring harmony to your home), this plant brings the healing properties of ‘forest bathing’ into your living space. It is said that its leaves bring good energy, making this lovely plant a source of joy and calm. Commonly known as the Chinese Evergreen, the Aglaonema genus comes in different colours. The Aglaonema Pink has light green and pink leaves.
                            </p>
                        </div>
                    </div>
                    <a href="#" class="button-link button-link--size-2 plant-story__link less-more__button">
                        <span>Read more</span>
                        <span>Read less</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- /plant-story --}}

    {{--  origin-map --}}
    <section class="origin-map">
        <div class="container">
            <h2 class="h2-a origin-map__title-1">Place of origin</h2>
            <h3 class="origin-map__title-2">Tropical and subtropical regions of Asia and New Guinea</h3>
            <div class="origin-map__image">
                <img src="/img/origin-map/1.webp" alt="">
            </div>
        </div>
    </section>
    {{-- /origin-map --}}

    {{--  plant-types --}}
    <section class="plant-types">
        <div class="container">
            <h2 class="h2-a plant-types__title-1">Aglaonema</h2>
            <h3 class="h5 plant-types__title-2">This plant comes in different varieties.</h3>
            <ul class="plant-types__list" id="types-slider">
                <li class="plant-types__item">
                    <a href="#" class="plant-types__image">
                        <img src="/img/plant-types/1.webp" alt="">
                    </a>
                    <a href="#" class="plant-types__name">Red aglaonema</a>
                </li>
                <li class="plant-types__item">
                    <a href="#" class="plant-types__image">
                        <img src="/img/plant-types/2.webp" alt="">
                    </a>
                    <a href="#" class="plant-types__name">Aglaonema Silver Bay</a>
                </li>
            </ul>
        </div>
    </section>
    {{--  plant-types --}}

    {{--  care-card --}}
    <section class="care-card">
        <div class="container">
            <div class="care-card__row">
                <div class="care-card__left">
                    <h2 class="h2-a care-card__title-1">Care for your Aglaonema Pink Like a Pro!</h2>
                    <h3 class="care-card__title-2">
                        Check out it's personal <a href="#" class="button-link care-card__link">CARE CARD</a>
                    </h3>
                </div>
                <div class="care-card__right">
                    <img src="/img/care-card/carecard.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- /care-card --}}

    {{--  try-this --}}
    <section class="try-this">
        <div class="container">
            <h2 class="h2-a try-this__title-1">Accessories</h2>
       
            <h3 class="h5 try-this__title-2">Houseplant starter kit</h3>
       
            <ul class="try-this__list" id="more-slider">

                <li class="try-this__item">
                    <div class="try-this__image">
                        <img src="/img/try-this/1.jpg" alt="">
                    </div>
                    <div class="try-this__desc">
                        <div class="try-this__name">Plant Mister Spray Bottle, FUBARBAR 10oz Best Hair Water Paint Oil Pressure Mist Empty Disinfection Spray Bottle for…</div>
                        <div class="try-this__price">$8.99</div>
                        <button type="button" class="button-border try-this__button">
                            Quick view
                        </button>
                        <button type="button" class="button-filled try-this__button">
                            Add to cart
                        </button>
                    </div>
                </li>

                <li class="try-this__item">
                    <div class="try-this__image">
                        <img src="/img/try-this/2.jpg" alt="">
                    </div>
                    <div class="try-this__desc">
                        <div class="try-this__name">Burpee Natural & Organic GardenCoir, 8 quart, (1 Pack)</div>
                        <div class="try-this__price">$11.99</div>
                        <button type="button" class="button-border try-this__button">
                            Quick view
                        </button>
                        <button type="button" class="button-filled try-this__button">
                            Add to cart
                        </button>
                    </div>
                </li>

                <li class="try-this__item">
                    <div class="try-this__image">
                        <img src="/img/try-this/3.jpg" alt="">
                    </div>
                    <div class="try-this__desc">
                        <div class="try-this__name">Fasmov Stainless Steel Watering Can with Long Spout Modern Style Watering Pot, 53oz/1.5L</div>
                        <div class="try-this__price">$17.99</div>
                        <button type="button" class="button-border try-this__button">
                            Quick view
                        </button>
                        <button type="button" class="button-filled try-this__button">
                            Add to cart
                        </button>
                    </div>
                </li>

                <li class="try-this__item">
                    <div class="try-this__image">
                        <img src="/img/try-this/4.jpg" alt="">
                    </div>
                    <div class="try-this__desc">
                        <div class="try-this__name">IPPINKA Sustee Aquameter, Plaint Moisture Sensor Set of 2 (Green, Medium)</div>
                        <div class="try-this__price">$14.95</div>
                        <button type="button" class="button-border try-this__button">
                            Quick view
                        </button>
                        <button type="button" class="button-filled try-this__button">
                            Add to cart
                        </button>
                    </div>
                </li>

            </ul>
        </div>
    </section>
    {{-- /try-this --}}


	@include('partials.choosing')
    @include('partials.subscribe')
	@include('partials.footer')
    @include('partials.popup')

@endsection