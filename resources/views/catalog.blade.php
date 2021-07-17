@extends('layouts.default')

@section('content')
    {{--  header --}}
    <header class="header">

        <div class="container container--wide">
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

                <h1 class="h1 header__title-1">Shop plants</h1>
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

	{{--  products --}}
    <section class="products">
        <div class="container container--wide">

            <div class="products__filter">
                <button type="button" class="button-link button-link--type-2 js-filter-open">
                    FILTERS & SEARCH
                </button>
            </div>

            <div class="nav-pager__count">Showing 1 - 24 of 90 Plants</div>

            <div class="products__inner">
                <div class="products__col-side">
                
                    {{--  filter --}}
                    <aside class="filter" id="filter">
                        <div class="filter__overlay"></div>
                        
                        <form action="#" class="filter__window">

                            <button type="button" class="filter__close">
                                <i class="icomoon-close"></i>
                            </button>

                            <div class="filter__label">
                                <div class="filter__label__title">FILTERS & SEARCH</div>
                                <button type="button" class="filter__label__reset">Reset all</button>
                            </div>

                            <div class="filter__search">
                                <input type="text" class="filter__search__input" placeholder="Search">
                                <button type="button" class="filter__search__button">
                                    <i class="icomoon-search"></i>
                                </button>
                            </div>

                            <div class="filter__group">
                                <div class="filter__header">
                                    <div class="filter__title">
                                        WINDOW DIRECTION
                                    </div>
                                    <a href="#" class="filter__info filter__info--for-header js-open-info" data-src="/html/info/1">
                                        <i class="icomoon-information-solid"></i>
                                    </a>
                                </div>
                                <div class="filter__crop">
                                    <div class="filter__list">
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>North</span>
                                            </label>
                                        </div>
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>East</span>
                                            </label>
                                        </div>
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>South</span>
                                            </label>
                                        </div>
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>West</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter__group">
                                <div class="filter__header">
                                    <div class="filter__title">
                                        DISTANCE FROM THE WINDOW
                                    </div>
                                </div>
                                <div class="filter__crop">
                                    <div class="filter__list">
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>0-1 feet into the room</span>
                                            </label>
                                        </div>
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>0-1 feet into the room</span>
                                            </label>
                                        </div>
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>2-5 feet into the room</span>
                                            </label>
                                        </div>
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>5-10 feet into the room</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter__group">
                                <div class="filter__header">
                                    <div class="filter__title">
                                        STYLE
                                    </div>
                                </div>
                                <div class="filter__crop">
                                    <div class="filter__list">
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>Desert</span>
                                            </label>
                                        </div>
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>Tropics</span>
                                            </label>
                                        </div>
                                        <div class="form__check">
                                            <label>
                                                <input type="checkbox">
                                                <span>Forest</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter__group">
                                <div class="filter__header">
                                    <div class="filter__title">
                                        SUPER POWERS
                                    </div>
                                </div>
                                <div class="filter__crop">
                                    <div class="filter__list">
                                        <div class="form__check form__check--has-info">
                                            <label>
                                                <input type="checkbox">
                                                <span>Air-Purifying</span>
                                            </label>
                                            <a href="#" class="filter__info js-open-info" data-src="/html/info/2">
                                                <i class="icomoon-information-solid"></i>
                                            </a>
                                        </div>
                                        <div class="form__check form__check--has-info">
                                            <label>
                                                <input type="checkbox">
                                                <span>Traveller-Friendly</span>
                                            </label>
                                            <a href="#" class="filter__info js-open-info" data-src="/html/info/1">
                                                <i class="icomoon-information-solid"></i>
                                            </a>
                                        </div>
                                        <div class="form__check form__check--has-info">
                                            <label>
                                                <input type="checkbox">
                                                <span>Pet-Friendly</span>
                                            </label>
                                            <a href="#" class="filter__info js-open-info" data-src="/html/info/1">
                                                <i class="icomoon-information-solid"></i>
                                            </a>
                                        </div>
                                        <div class="form__check form__check--has-info">
                                            <label>
                                                <input type="checkbox">
                                                <span>Easy Care</span>
                                            </label>
                                            <a href="#" class="filter__info js-open-info" data-src="/html/info/2">
                                                <i class="icomoon-information-solid"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="filter__control">
                            <button type="button" class="filter__reset">Reset</button>
                            <button type="button" class="filter__apply">Apply</button>
                        </div>
                    </aside>
                    {{-- /filter --}}
                
                </div>
                <div class="products__col-main">

                    {{--  list --}}
                    <div class="products__list">

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/AGLA-PI1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AGLAONEMA PINK</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-glasses"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like active">
                                    <i class="icomoon-heart-o"></i>
                                    <i class="icomoon-heart"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/AGLA-SB1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AGLAONEMA SILVER BAY</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-glasses"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ALOC-AM1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AIR PLANT</div>
                                    <div class="products__icons">
                                        <i class="products__icon-moon"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ALOC-OD1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALBERTA SPRUCE</div>
                                    <div class="products__icons">
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ALOE-HU1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOCASIA CALIDORA</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ALOE-VE1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOCASIA POLLY</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ANTH-AN1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOE HEDGEHOG</div>
                                    <div class="products__icons">
                                        <i class="products__icon-plane"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ASPA-SE1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOE VERA</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-plain"></i>
                                        <i class="products__icon-nasa"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ASPL-NI1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ANTHURIUM</div>
                                    <div class="products__icons">
                                        <i class="products__icon-bacteria"></i>
                                        <i class="products__icon-footprint"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/AGLA-PI1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AGLAONEMA PINK</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-glasses"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/AGLA-SB1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AGLAONEMA SILVER BAY</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-glasses"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ALOC-AM1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">AIR PLANT</div>
                                    <div class="products__icons">
                                        <i class="products__icon-moon"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ALOC-OD1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALBERTA SPRUCE</div>
                                    <div class="products__icons">
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ALOE-HU1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOCASIA CALIDORA</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ALOE-VE1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOCASIA POLLY</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ANTH-AN1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOE HEDGEHOG</div>
                                    <div class="products__icons">
                                        <i class="products__icon-plane"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ASPA-SE1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ALOE VERA</div>
                                    <div class="products__icons">
                                        <i class="products__icon-air"></i>
                                        <i class="products__icon-plain"></i>
                                        <i class="products__icon-nasa"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
                                <button type="button" class="products__like">
                                    <i class="icomoon-heart-o"></i>
                                </button>
                            </div>
                        </div>

                        <div class="products__col">
                            <div class="products__item">
                                <div class="products__image">
                                    <img src="{{ asset('/img/temp/products/ASPL-NI1.png') }}" alt="">
                                </div>
                                <div class="products__footer">
                                    <div class="products__name">ANTHURIUM</div>
                                    <div class="products__icons">
                                        <i class="products__icon-bacteria"></i>
                                        <i class="products__icon-footprint"></i>
                                    </div>
                                </div>
                                <a href="/product" class="products__link"></a>
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

	@include('partials.choosing')
    @include('partials.subscribe')
	@include('partials.footer')
    @include('partials.popup')
    
@endsection