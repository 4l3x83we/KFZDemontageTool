{{--
<header class="header-main">
    <div class="top-bar">
        <div class="container">
            <div class="row p-2 d-none d-lg-flex">
                <div class="col-lg-6 d-flex align-items-center justify-content-start me-auto">
                    <div class="top-versand pe-lg-4">
                        <em class="fa-solid fa-truck"></em>
                        <span>Schneller Versand</span>
                    </div>
                    <div class="top-return">
                        <em class="fa-solid fa-thumbs-up"></em>
                        <span>14 Tage Rückgaberecht</span>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-end ms-auto">
                    <div class="top-account navigation-entry entry-account">
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('frontend.account') }}">
                                    <em class="fa-solid fa-user"></em>
                                    <span>Mein Konto</span>
                                </a>
                            @endif
                        @else
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <em class="fa-solid fa-user"></em>
                                        <span>Mein Konto</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Übersicht</a></li>
                                        <li><a class="dropdown-item" href="#">Persönliche Daten</a></li>
                                        <li><a class="dropdown-item" href="#">Adressen</a></li>
                                        <li><a class="dropdown-item" href="#">Zahlungsarten</a></li>
                                        <li><a class="dropdown-item" href="#">Bestellungen</a></li>
                                        <li><a class="dropdown-item" href="#">Sofortdownloads</a></li>
                                        <li><a class="dropdown-item" href="#">Merkzettel</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @endguest
                    </div>
                    <div class="top-bar-login block" id="menubar"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container header-navigation">
        <div class="row">
            <div class="col-lg-3 logo-main" role="banner">
                <div class="logo-shop">
                    <a href="" class="logo-link">
                        <picture>
                            <source media="(min-width: 576px)" srcset="{{ Vite::image('logo.png') }}" type="image/png">
                            <source media="(min-width: 768px)" srcset="{{ Vite::image('logo.png') }}" type="image/png">
                            <source media="(min-width: 992px)" srcset="{{ Vite::image('logo.png') }}" type="image/png">
                            <source media="(min-width: 1200px)" srcset="{{ Vite::image('logo.png') }}" type="image/png">
                            <source media="(min-width: 1400px)" srcset="{{ Vite::image('logo.png') }}" type="image/png">
                            <img alt="" srcset="{{ Vite::image('logo.png') }}">
                        </picture>
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <div>
                    <div class="input-group">
                        <input type="search" name="sSearch" class="form-control" placeholder="Suchbegriff.." aria-label="Search" aria-describedby="Search">
                        <button class="input-group-text" type="button" id="Search"><em class="fa-solid fa-magnifying-glass"></em></button>
                    </div>
                    <a href="#" class="shopping-cart-items" title="Mein Warenkorb">
                        <div>
                            <em class="fa-solid fa-shopping-cart"></em>
                            <div>
                                <span>Zur Kasse</span>
                                <span>0 Warenkorb - 0,00 €</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Navbar Start -->
@include('layouts.partials.frontend.navbar')
<!-- Navbar End -->
--}}

    <!-- Header Start -->
    <header class="header">

        <!-- Top Bar Start -->
        <div class="topBar d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="pe-3">
                                <em class="fa-solid fa-truck"></em>
                                <span>Schneller Versand</span>
                            </div>
                            <div class="pe-3">
                                <em class="fa-solid fa-thumbs-up"></em>
                                <span>14 Tage Rückgaberecht</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-end align-items-center">
                            @guest
                                @if (Route::has('login'))
                                    <a href="{{ route('frontend.account') }}">
                                        <em class="fa-solid fa-user"></em>
                                        <span>Mein Konto</span>
                                    </a>
                                @endif
                            @else
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <em class="fa-solid fa-user"></em>
                                            <span>Mein Konto</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Übersicht</a></li>
                                            <li><a class="dropdown-item" href="#">Persönliche Daten</a></li>
                                            <li><a class="dropdown-item" href="#">Adressen</a></li>
                                            <li><a class="dropdown-item" href="#">Zahlungsarten</a></li>
                                            <li><a class="dropdown-item" href="#">Bestellungen</a></li>
                                            <li><a class="dropdown-item" href="#">Sofortdownloads</a></li>
                                            <li><a class="dropdown-item" href="#">Merkzettel</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Logo, SearchBar, Wishlist and Shopping Cart Start -->
        <div class="searchBar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop-logo">
                            <a href="/">
                                <picture>
                                    <source media="(max-width: 320px)" srcset="{{ Vite::image('logo_6.png') }}" type="image/png">
                                    <source media="(max-width: 576px)" srcset="{{ Vite::image('logo_6.png') }}" type="image/png">
                                    <source media="(max-width: 768px)" srcset="{{ Vite::image('logo_5.png') }}" type="image/png">
                                    <source media="(max-width: 992px)" srcset="{{ Vite::image('logo_5.png') }}" type="image/png">
                                    <source media="(max-width: 1200px)" srcset="{{ Vite::image('logo_5.png') }}" type="image/png">
                                    <source media="(max-width: 1400px)" srcset="{{ Vite::image('logo_5.png') }}" type="image/png">
                                    <img alt="" srcset="{{ Vite::image('logo_5.png') }}">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-navigation">
                            <div class="navigation-entry">
                                <button class="btn btn-outline-dark me-2 d-inline-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                    <em class="fa-solid fa-bars"></em>
                                </button>
                                <button type="button" class="btn btn-outline-dark search-mobil-btn me-2" data-bs-toggle="collapse" data-bs-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
                                    <em class="fa-solid fa-magnifying-glass"></em>
                                </button>
                                <form action="" method="get" class="search-form w-100 me-auto collapse" id="collapseSearch">
                                    <div class="input-group">
                                        <input type="search" class="form-control" name="sSerach" id="search" aria-label="Search" placeholder="Suchbegriff..">
                                        <button type="submit" class="input-group-text"><em class="fa-solid fa-magnifying-glass"></em></button>
                                    </div>
                                </form>
                            </div>
                            <div class="navigation-entry">
                                <a class="cart-entry btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasShoppingCart" aria-controls="offcanvasShoppingCart">
                                    <div class="pe-lg-2">
                                        <em class="fa-solid fa-shopping-cart fa-lg"></em>
                                    </div>
                                    <div class="cart-text">
                                        <div>Mein Warenkorb</div>
                                        <div class="text-orange">0 Warenkorb - <span class="fw-bold">0,00 €</span></div>
                                    </div>
                                </a>
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasShoppingCart" aria-labelledby="offcanvasShoppingCartLabel">
                                    <div class="offcanvas-header text-bg-dark">
                                        <a class="text-light" data-bs-dismiss="offcanvas" aria-label="Close">
                                            <em class="bi bi-chevron-left pe-2"></em>Weiter einkaufen
                                        </a>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div class="alert alert-success d-flex align-items-center" role="alert">
                                            <div class="alert-icon bg-success">
                                                <em class="fa-solid fa-check"></em>
                                            </div>
                                            <div>
                                                Der Artikel wurde erfolgreich in den Warenkorb gelegt
                                            </div>
                                        </div>
                                        <div class="cart-items">
                                            <div class="cart-item empty d-none">
                                                <span class="cart-empty">Ihr Warenkorb ist leer</span>
                                            </div>
                                            <div class="cart-item cart-article">
                                                <div class="img-thumbnail thumbnail">
                                                    <img src="{{ Vite::image('logo_6.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <a href="#" class="cart-article-text">
                                                    <span class="item-quantity">1x</span>
                                                    <span class="item-name">Anlasser - ALFA ROMEO 146 (930) 1.6 i.e. 1113004</span>
                                                    <span class="item-price">30,00 €</span>
                                                </a>
                                                <div class="cart-article-delete">
                                                    <form action="" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-dark"><em class="fa-solid fa-x"></em></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-prices">
                                            <div class="prices-article">
                                                <span class="prices-article-text">Zwischensumme</span>
                                                <span class="prices-article-amount">30,00 €</span>
                                            </div>
                                            <div class="prices-article-tax">
                                                inkl. MwSt. <a href="#" title="Versandkosten">zzgl.Versandkosten</a>
                                            </div>
                                        </div>
                                        <div class="button-items d-grid gap-2">
                                            <a href="#" class="btn btn-orange" title="Zur Kasse">
                                                Zur Kasse
                                            </a>
                                            <a href="#" class="btn btn-outline-orange" title="Warenkorb bearbeiten">
                                                Warenkorb bearbeiten
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logo, SearchBar, Wishlist and Shopping Cart End -->

        <!-- Navbar Start -->
        @include('layouts.partials.frontend.navbar')
        <!-- Navbar End -->

    </header>
    <!-- Header End -->
