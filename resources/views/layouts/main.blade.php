<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('assets/js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app">
        <body>
        <!-- {!! (Route::is('index') or Route::is('about') ? 'class="header-absolute"' : 'class=""') !!} -->
        <!-- <p>{!! (Route::currentRouteName()) !!}</p> -->
        <div style="padding-top:0">
            @if(Route::is('index') or Route::is('about') or Route::is('404'))
            <header class="header header-absolute">
            @else
            <header class="header ">
            @endif
                <div>
                    @if(Route::is('index') or Route::is('about') or Route::is('404'))
                    <nav class="bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light navbar navbar-expand-lg navbar-dark bg-transparent">
                    @else
                    <nav class="navbar-sticky bg-fixed-white  navbar navbar-expand-lg navbar-light bg-white">
                    @endif
                        <div class="container-fluid"><a class="py-1 navbar-brand" href="/"><svg class="navbar-brand-svg" viewBox="0 0 65 16" width="85" height="20" fill="none">
                                    <path class="navbar-brand-svg-text" d="M5.72266 18.1562C4.88281 18.1562 4.08529 18.0033 3.33008 17.6973C2.58138 17.3913 1.94661 16.9355 1.42578 16.3301C0.911458 15.7181 0.582682 14.9759 0.439453 14.1035L2.90039 13.4785C2.98503 14.2988 3.28776 14.9173 3.80859 15.334C4.33594 15.7507 4.98698 15.959 5.76172 15.959C6.23698 15.959 6.64714 15.8841 6.99219 15.7344C7.33724 15.5781 7.59766 15.3665 7.77344 15.0996C7.94922 14.8327 8.03711 14.5332 8.03711 14.2012C8.03711 13.804 7.91341 13.4655 7.66602 13.1855C7.42513 12.9056 7.1224 12.6745 6.75781 12.4922C6.39323 12.3099 5.89193 12.0918 5.25391 11.8379C4.42057 11.5059 3.74674 11.1999 3.23242 10.9199C2.7181 10.6335 2.27539 10.2363 1.9043 9.72852C1.53971 9.2207 1.35742 8.57943 1.35742 7.80469C1.35742 7.01693 1.54948 6.33659 1.93359 5.76367C2.32422 5.18424 2.84505 4.74479 3.49609 4.44531C4.15365 4.14583 4.8763 3.99609 5.66406 3.99609C6.54948 3.99609 7.35677 4.19792 8.08594 4.60156C8.8151 4.9987 9.40755 5.60417 9.86328 6.41797L7.80273 7.67773C7.56185 7.20898 7.24609 6.84766 6.85547 6.59375C6.46484 6.33333 6.03841 6.20312 5.57617 6.20312C5.25065 6.20312 4.95443 6.26497 4.6875 6.38867C4.42708 6.51237 4.21875 6.68815 4.0625 6.91602C3.91276 7.13737 3.83789 7.39128 3.83789 7.67773C3.83789 8.0293 3.95182 8.32878 4.17969 8.57617C4.40755 8.82357 4.69401 9.0319 5.03906 9.20117C5.39062 9.37044 5.86914 9.57227 6.47461 9.80664C7.33398 10.1387 8.0306 10.4512 8.56445 10.7441C9.09831 11.0371 9.55729 11.4473 9.94141 11.9746C10.3255 12.502 10.5176 13.1693 10.5176 13.9766C10.5176 14.8229 10.3027 15.5618 9.87305 16.1934C9.44987 16.8249 8.8737 17.3099 8.14453 17.6484C7.41536 17.987 6.60807 18.1562 5.72266 18.1562ZM16.8906 4.20117H26.0703V6.47656H19.3711V9.96289H25.6113V12.2383H19.3711V15.6562H26.0703V18H16.8906V4.20117ZM33.0586 4.20117H35.5391V15.6562H41.4375V18H33.0586V4.20117ZM47.4492 4.20117H49.9297V15.6562H55.8281V18H47.4492V4.20117Z" transform="translate(0 -3)" fill="#212529"></path>
                                    <path class="text-primary" d="M62.0254 15.4219H64.418V18H62.0254V15.4219Z" transform="translate(0 -3)" fill="#9A6EE2"></path>
                                </svg></a><button aria-label="Toggle navigation" type="button" class="navbar-toggler-right navbar-toggler"><i class="fa fa-bars"></i></button>
                            <div class="collapse navbar-collapse">
                                <ul class="mx-auto navbar-nav">
                                    <li class="dropdown nav-item"><a aria-haspopup="true" href="/" class="dropdown-toggle nav-link" aria-expanded="false">Главная</a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="  dropdown-menu"><a href="/" tabindex="0" role="menuitem" class="dropdown-item">Fullscreen home + Lookbook</a><a href="/index-2" tabindex="0" role="menuitem" class="active dropdown-item">Split-screen home</a><a href="/index-3" tabindex="0" role="menuitem" class="dropdown-item">Classic home</a><a href="/index-4" tabindex="0" role="menuitem" class="dropdown-item">Parallax sections<span class="ml-1 mt-n1 badge badge-warning">New</span></a><a href="/index-5" tabindex="0" role="menuitem" class="dropdown-item">Slider + broken grid<span class="ml-1 mt-n1 badge badge-warning">New</span></a></div>
                                    </li>
                                    <li class="nav-item"><a href="/about" class="nav-link">О нас</a></li>
                                    <li class="position-static nav-item"><a aria-haspopup="true" href="/blog" class=" nav-link" aria-expanded="false">Блог</a></li>
                                    <li class="nav-item"><a href="/contact" class="nav-link">Контакты</a></li>
                                    <li class="nav-item"><a aria-haspopup="true" href="/404" class="nav-link" aria-expanded="false">404</a>
                                    </li>
                                    <li class="nav-item"><a aria-haspopup="true" href="/catalog" class="nav-link" aria-expanded="false">Каталог</a>
                                    </li>
                                </ul>
                                <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
                                    <div class="nav-item navbar-icon-link" data-toggle="search"><svg class="svg-icon">
                                            <use xlink:href="/icons/orion-svg-sprite.svg#search-1"></use>
                                        </svg></div>
                                    <div class="nav-item"><a class="navbar-icon-link" href="/customer-login"><svg class="svg-icon">
                                                <use xlink:href="/icons/orion-svg-sprite.svg#male-user-1"></use>
                                            </svg><span class="text-sm ml-2 ml-lg-0 text-uppercase text-sm font-weight-bold d-none d-sm-inline d-lg-none">Log in</span></a></div>
                                    <div class="nav-item"><a class="navbar-icon-link d-lg-none" href="/cart"><svg class="svg-icon">
                                                <use xlink:href="/icons/orion-svg-sprite.svg#cart-1"> </use>
                                            </svg><span class="text-sm ml-2 ml-lg-0 text-uppercase text-sm font-weight-bold d-none d-sm-inline d-lg-none">View cart</span></a>
                                        <div class="d-none d-lg-block">
                                            <div class="dropdown"><a href="#" aria-haspopup="true" class="navbar-icon-link" aria-expanded="false">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <div class="navbar-icon-link-badge">3 </div>
                                                </a>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="p-4 dropdown-menu dropdown-menu-right">
                                                    <div class="navbar-cart-product-wrapper">
                                                        <div class="navbar-cart-product">
                                                            <div class="d-flex align-items-center"><a href="/detail-1"><img class="img-fluid navbar-cart-product-image" src="/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..." /></a>
                                                                <div class="w-100"><a class="close text-sm mr-2" href="#"><i class="fa fa-times"> </i></a>
                                                                    <div class="pl-3"><a class="navbar-cart-product-link" href="/detail-1">Skull Tee</a><small class="d-block text-muted">Quantity:
                                                                            <!-- -->2
                                                                        </small><strong class="d-block text-sm">$
                                                                            <!-- -->130.00
                                                                        </strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="navbar-cart-product">
                                                            <div class="d-flex align-items-center"><a href="/detail-1"><img class="img-fluid navbar-cart-product-image" src="/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..." /></a>
                                                                <div class="w-100"><a class="close text-sm mr-2" href="#"><i class="fa fa-times"> </i></a>
                                                                    <div class="pl-3"><a class="navbar-cart-product-link" href="/detail-1">Transparent Blouse</a><small class="d-block text-muted">Quantity:
                                                                            <!-- -->1
                                                                        </small><strong class="d-block text-sm">$
                                                                            <!-- -->55.00
                                                                        </strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="navbar-cart-product">
                                                            <div class="d-flex align-items-center"><a href="/detail-1"><img class="img-fluid navbar-cart-product-image" src="/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..." /></a>
                                                                <div class="w-100"><a class="close text-sm mr-2" href="#"><i class="fa fa-times"> </i></a>
                                                                    <div class="pl-3"><a class="navbar-cart-product-link" href="/detail-1">White Tee</a><small class="d-block text-muted">Quantity:
                                                                            <!-- -->1
                                                                        </small><strong class="d-block text-sm">$
                                                                            <!-- -->55.00
                                                                        </strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="navbar-cart-total"><span class="text-uppercase text-muted">Total</span><strong class="text-uppercase">$240.00</strong></div>
                                                    <div class="d-flex justify-content-between"><a class="btn btn-link text-dark mr-3" href="/cart">View Cart <i class="fa-arrow-right fa"></i></a><a class="btn btn-outline-dark" href="/checkout-1">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            @yield('content')
            <footer class="main-footer">
                <div class="bg-gray-100 text-dark-700 py-6">
                    <div class="container">
                        <div class="row">
                            <div class="service-column col-lg-4">
                                <img class="svg-icon service-icon" src="/assets/img/car.png"></img>
                                <div class="service-text">
                                    <h6 class="text-uppercase">Free shipping &amp; return</h6>
                                    <p class="text-muted font-weight-light text-sm mb-0">Free Shipping over $300</p>
                                </div>
                            </div>
                            <div class="service-column col-lg-4">
                                <img class="svg-icon service-icon" src="/assets/img/money.png"></img>
                                <div class="service-text">
                                    <h6 class="text-uppercase">Money back guarantee</h6>
                                    <p class="text-muted font-weight-light text-sm mb-0">30 Days Money Back Guarantee</p>
                                </div>
                            </div>
                            <div class="service-column col-lg-4">
                                <img class="svg-icon service-icon" src="/assets/img/support.png"></img>
                                <div class="service-text">
                                    <h6 class="text-uppercase">020-800-456-747</h6>
                                    <p class="text-muted font-weight-light text-sm mb-0">24/7 Available Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 bg-gray-300 text-muted">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="font-weight-bold text-uppercase text-lg text-dark mb-3">Sell<span class="text-primary">.</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="pinterest"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a class="text-muted text-hover-primary" href="#" target="_blank" title="vimeo"><i class="fab fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                                <h6 class="text-uppercase text-dark mb-3">Shop</h6>
                                <ul class="list-unstyled">
                                    <li><a class="text-muted" href="#">For Women</a></li>
                                    <li><a class="text-muted" href="#">For Men</a></li>
                                    <li><a class="text-muted" href="#">Stores</a></li>
                                    <li><a class="text-muted" href="#">Our Blog</a></li>
                                    <li><a class="text-muted" href="#">Shop</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                                <h6 class="text-uppercase text-dark mb-3">Company</h6>
                                <ul class="list-unstyled">
                                    <li><a class="text-muted" href="#">Login</a></li>
                                    <li><a class="text-muted" href="#">Register</a></li>
                                    <li><a class="text-muted" href="#">Wishlist</a></li>
                                    <li><a class="text-muted" href="#">Our Products</a></li>
                                    <li><a class="text-muted" href="#">Checkouts</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h6 class="text-uppercase text-dark mb-3">Daily Offers &amp; Discounts</h6>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
                                <form action="#" id="newsletter-form">
                                    <div class="input-group mb-3"><input type="email" class="form-control bg-transparent border-secondary border-right-0" placeholder="Your Email Address" aria-label="Your Email Address" />
                                        <div class="input-group-append"><button class="btn btn-outline-secondary border-left-0" type="submit"><i class="fa fa-paper-plane text-lg text-dark"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center text-md-left">
                                <p class="mb-md-0">© 2021 Your company. All rights reserved.</p>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                                    <li class="list-inline-item pe-1 ps-1 bg-white"><img class="w-2rem " src="/assets/img/visa.png" alt="Visa" /></li>
                                    <li class="list-inline-item pe-1 ps-1 bg-white"><img class="w-2rem " src="/assets/img/master-card.png" alt="Master-card" /></li>
                                    <li class="list-inline-item pe-1 ps-1 bg-white"><img class="w-2rem " src="/assets/img/paypal.png" alt="PayPal" /></li>
                                    <li class="list-inline-item pe-1 ps-1 bg-white"><img class="w-2rem " src="/assets/img/western-union.png" alt="western-union" /></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>      
       
    </body>
</html>