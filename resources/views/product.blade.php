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
                <div class="plant-card__col-images">
                    <ul class="plant-card__slides" id="photos-slider">
                        <li class="plant-card__slides__item" data-thumb="/img/plant-card/3.webp">
                            <img src="/img/plant-card/3.webp" alt="">
                        </li>
                        <li class="plant-card__slides__item" data-thumb="/img/plant-card/4.webp">
                            <img src="/img/plant-card/4.webp" alt="">
                        </li>
                        <li class="plant-card__slides__item" data-thumb="/img/plant-card/5.webp">
                            <img src="/img/plant-card/5.webp" alt="">
                        </li>
                    </ul>

                    <div class="plant-card__about-pics">
                        The picture above  is an expamle. Each plant is different, the actual plant you get depens on an Amazon.com seller.
                    </div>

                    <div class="plant-card__like">
                        <button type="button" class="plant-card__like__button">
                            <span>Save to wishlist</span>
                            <i class="icomoon-heart-o"></i>
                        </button>
                    </div>
                </div>
            
                <div class="plant-card__col-desc">
                    
                    <h1 class="plant-card__title">
                        <span>Aglaonema Marie Plant</span>
                        <button type="button" class="plant-card__title__like">
                            <i class="icomoon-heart-o"></i>
                        </button>
                    </h1>              

                    <div class="plant-card__desc">Monstera Deliciosa, Swiss Cheese Plant, Swiss Cheese Plant, Swiss Cheese Plant</div>

                    <div class="plant-card__amazon">
                        <div class="plant-card__amazon__icon">
                            <img src="/img/plant-card/amazon.svg" alt="Amazon">
                        </div>
                        <div class="plant-card__amazon__text">
                            You will be redirected to Amazon.com to complete your checkout
                        </div>
                    </div>

                    <div class="checkout" id="checkout">
                        <Checkout :default-size="4"></Checkout>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{--  plant-card --}}

    {{--  light-sm --}}
    <section class="light-sm">
        <div class="container">
            <div class="light-sm__center">
                <div class="light-sm__title-1">Light</div>
                <div class="light-sm__title-2">LOW TO BRIGHT INDIRECT</div>
                <a href="#" class="light-sm__link js-open-info" data-src="/html/info/light">Light Guide</a>
                <img src="/img/svg-icons/light.svg" alt="" class="light-sm__image">
            </div>
        </div>
    </section>
    {{-- /light-sm --}}

    {{--  powers --}}
    <section class="powers" id="super-powers">
        <div class="container">
            <h2 class="powers__h1">Botanical super powers</h2>
            <div class="powers__icons">
                <div class="powers__icons__item">
                    <div class="powers__icons__image">
                        <img src="/img/powers/nasa.svg" alt="">
                    </div>
                    <div class="powers__icons__desc">
                        <div class="powers__icons__title">Clean air study</div>
                        <div class="powers__icons__text">NASA tested this plant in a Clean Air study in an attempt to research ways to clean the air in space stations in 1989.</div>
                    </div>
                </div>
                <div class="powers__icons__item">
                    <div class="powers__icons__image">
                        <img src="/img/powers/footprint.svg" alt="">
                    </div>
                    <div class="powers__icons__desc">
                        <div class="powers__icons__title">Pet-friendly</div>
                        <div class="powers__icons__text">Pet-friendly plants are non-toxic, so even if your pets and kids tend to nibble on the decor, they'll be safe.</div>
                    </div>
                </div>
                <div class="powers__icons__item">
                    <div class="powers__icons__image">
                        <img src="/img/powers/moon.svg" alt="">
                    </div>
                    <div class="powers__icons__desc">
                        <div class="powers__icons__title">O2 release at night</div>
                        <div class="powers__icons__text">Unlike most plants, this one releases oxygen at night. Why not put a few of these in the bedroom?</div>
                    </div>
                </div>
            </div>
            <div class="powers__tabs">
                <div class="powers__tabs__item active">
                    <div class="powers__tabs__title">CLEAN AIR STUDY</div>
                    <div class="powers__tabs__text">NASA tested this plant in a Clean Air study in an attempt to research ways to clean the air in space stations in 1989.</div>
                </div>
                <div class="powers__tabs__item">
                    <div class="powers__tabs__title">Pet-friendly</div>
                    <div class="powers__tabs__text">Pet-friendly plants are non-toxic, so even if your pets and kids tend to nibble on the decor, they'll be safe.</div>
                </div>
                <div class="powers__tabs__item">
                    <div class="powers__tabs__title">O2 release at night</div>
                    <div class="powers__tabs__text">Unlike most plants, this one releases oxygen at night. Why not put a few of these in the bedroom?</div>
                </div>
            </div>
        </div>
    </section>
    {{-- /powers --}}

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
                    <h2 class="h2 plant-story__title-1">Plant Story</h2>
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
            <h2 class="h2 h2--light text-center">Place of origin</h2>
            <h3 class="origin-map__title-2">Tropical and subtropical regions of Asia and New Guinea</h3>
            <div class="origin-map__image">
                <img src="/img/origin-map/1.webp" alt="">
            </div>
        </div>
    </section>
    {{-- /origin-map --}}

    {{--  plant-types --}}
    <section class="plant-types"  id="plant-types">
        <div class="container">
            <h2 class="h2 h2--light text-center">Monstera family</h2>
            <h3 class="h5 plant-types__title-2">This plant comes in different varieties.</h3>
            <div class="plant-types__desc">
                Note: the variegated ones (with light green or white foliage) need more light than their dark-leaf siblings.
            </div>
            <div class="plant-types__gallery">
                <div class="plant-types__list">
                    <div class="plant-types__col">
                        <a href='#' class="plant-types__item">
                            <span class="plant-types__image" style="background-image: url('/img/plant-types/1/mons_600x 1.jpg');"></span>
                            <span class="plant-types__name">Variety A</span>
                        </a>
                    </div>
                    <div class="plant-types__col">
                        <a href='#' class="plant-types__item">
                            <span class="plant-types__image" style="background-image: url('/img/plant-types/1/Monstera-Variegated 1.jpg');"></span>
                            <span class="plant-types__name">Variety B</span>
                        </a>
                    </div>
                    <div class="plant-types__col">
                        <a href='#' class="plant-types__item">
                            <span class="plant-types__image" style="background-image: url('/img/plant-types/1/ps18007_hanging_swis 1.jpg');"></span>
                            <span class="plant-types__name">Variety C</span>
                        </a>
                    </div>
                    <div class="plant-types__col">
                        <a href='#' class="plant-types__item">
                            <span class="plant-types__image" style="background-image: url('/img/plant-types/1/Monstera-Variegated 1.jpg');"></span>
                            <span class="plant-types__name">Variety B</span>
                        </a>
                    </div>
                </div>
                <a href="#" class="plant-types__prev"></a>
                <a href="#" class="plant-types__next"></a>
            </div>
        </div>
    </section>
    {{--  plant-types --}}

    {{--  care-card --}}
    <section class="care-card">
        <div class="container">
            <div class="care-card__row">
                <div class="care-card__left">
                    <h2 class="h2 h2--light care-card__title-1">Care for your Aglaonema Pink Like a Pro!</h2>
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

	@include('partials.choosing')
    @include('partials.subscribe')
	@include('partials.footer')
    @include('partials.popup')

@endsection