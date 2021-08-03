<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Воруем Шаблон</title>
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('assets/js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app">
        <body>
    <div id="__next">
        <div style="padding-top:0">
            <header class="header  header-absolute">
                <div>
                    <nav class=" bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light  navbar navbar-expand-lg navbar-dark bg-transparent">
                        <div class="container-fluid"><a class="py-1 navbar-brand" href="/"><svg class="navbar-brand-svg" viewBox="0 0 65 16" width="85" height="20" fill="none">
                                    <path class="navbar-brand-svg-text" d="M5.72266 18.1562C4.88281 18.1562 4.08529 18.0033 3.33008 17.6973C2.58138 17.3913 1.94661 16.9355 1.42578 16.3301C0.911458 15.7181 0.582682 14.9759 0.439453 14.1035L2.90039 13.4785C2.98503 14.2988 3.28776 14.9173 3.80859 15.334C4.33594 15.7507 4.98698 15.959 5.76172 15.959C6.23698 15.959 6.64714 15.8841 6.99219 15.7344C7.33724 15.5781 7.59766 15.3665 7.77344 15.0996C7.94922 14.8327 8.03711 14.5332 8.03711 14.2012C8.03711 13.804 7.91341 13.4655 7.66602 13.1855C7.42513 12.9056 7.1224 12.6745 6.75781 12.4922C6.39323 12.3099 5.89193 12.0918 5.25391 11.8379C4.42057 11.5059 3.74674 11.1999 3.23242 10.9199C2.7181 10.6335 2.27539 10.2363 1.9043 9.72852C1.53971 9.2207 1.35742 8.57943 1.35742 7.80469C1.35742 7.01693 1.54948 6.33659 1.93359 5.76367C2.32422 5.18424 2.84505 4.74479 3.49609 4.44531C4.15365 4.14583 4.8763 3.99609 5.66406 3.99609C6.54948 3.99609 7.35677 4.19792 8.08594 4.60156C8.8151 4.9987 9.40755 5.60417 9.86328 6.41797L7.80273 7.67773C7.56185 7.20898 7.24609 6.84766 6.85547 6.59375C6.46484 6.33333 6.03841 6.20312 5.57617 6.20312C5.25065 6.20312 4.95443 6.26497 4.6875 6.38867C4.42708 6.51237 4.21875 6.68815 4.0625 6.91602C3.91276 7.13737 3.83789 7.39128 3.83789 7.67773C3.83789 8.0293 3.95182 8.32878 4.17969 8.57617C4.40755 8.82357 4.69401 9.0319 5.03906 9.20117C5.39062 9.37044 5.86914 9.57227 6.47461 9.80664C7.33398 10.1387 8.0306 10.4512 8.56445 10.7441C9.09831 11.0371 9.55729 11.4473 9.94141 11.9746C10.3255 12.502 10.5176 13.1693 10.5176 13.9766C10.5176 14.8229 10.3027 15.5618 9.87305 16.1934C9.44987 16.8249 8.8737 17.3099 8.14453 17.6484C7.41536 17.987 6.60807 18.1562 5.72266 18.1562ZM16.8906 4.20117H26.0703V6.47656H19.3711V9.96289H25.6113V12.2383H19.3711V15.6562H26.0703V18H16.8906V4.20117ZM33.0586 4.20117H35.5391V15.6562H41.4375V18H33.0586V4.20117ZM47.4492 4.20117H49.9297V15.6562H55.8281V18H47.4492V4.20117Z" transform="translate(0 -3)" fill="#212529"></path>
                                    <path class="text-primary" d="M62.0254 15.4219H64.418V18H62.0254V15.4219Z" transform="translate(0 -3)" fill="#9A6EE2"></path>
                                </svg></a><button aria-label="Toggle navigation" type="button" class="navbar-toggler-right navbar-toggler"><i class="fa fa-bars"></i></button>
                            <div class="collapse navbar-collapse">
                                <ul class="mx-auto navbar-nav">
                                    <li class="dropdown nav-item"><a aria-haspopup="true" href="#" class="dropdown-toggle nav-link" aria-expanded="false">Home</a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="  dropdown-menu"><a href="/" tabindex="0" role="menuitem" class="dropdown-item">Fullscreen home + Lookbook</a><a href="/index-2" tabindex="0" role="menuitem" class="active dropdown-item">Split-screen home</a><a href="/index-3" tabindex="0" role="menuitem" class="dropdown-item">Classic home</a><a href="/index-4" tabindex="0" role="menuitem" class="dropdown-item">Parallax sections<span class="ml-1 mt-n1 badge badge-warning">New</span></a><a href="/index-5" tabindex="0" role="menuitem" class="dropdown-item">Slider + broken grid<span class="ml-1 mt-n1 badge badge-warning">New</span></a></div>
                                    </li>
                                    <li class="nav-item"><a href="/category" class="nav-link">Shop</a></li>
                                    <li class="position-static dropdown nav-item"><a aria-haspopup="true" href="#" class="dropdown-toggle nav-link" aria-expanded="false">Template</a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class=" megamenu py-lg-0 dropdown-menu">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="p-3 pr-lg-0 pl-lg-5 pt-lg-5 row">
                                                        <div class="col-lg-3">
                                                            <h6 class="text-uppercase">Homepage</h6>
                                                            <ul class="megamenu-list list-unstyled">
                                                                <li class="megamenu-list-item"><a href="/" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Fullscreen home + Lookbook</a></li>
                                                                <li class="megamenu-list-item"><a href="/index-2" tabindex="0" role="menuitem" class="megamenu-list-link active dropdown-item">Split-screen home</a></li>
                                                                <li class="megamenu-list-item"><a href="/index-3" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Classic home</a></li>
                                                                <li class="megamenu-list-item"><a href="/index-4" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Parallax sections<span class="ml-1 mt-n1 badge badge-warning">New</span></a></li>
                                                                <li class="megamenu-list-item"><a href="/index-5" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Slider + Broken grid<span class="ml-1 mt-n1 badge badge-warning">New</span></a></li>
                                                            </ul>
                                                            <h6 class="text-uppercase">Shop</h6>
                                                            <ul class="megamenu-list list-unstyled">
                                                                <li class="megamenu-list-item"><a href="/category" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Category - left sidebar</a></li>
                                                                <li class="megamenu-list-item"><a href="/category-right" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Category - right sidebar</a></li>
                                                                <li class="megamenu-list-item"><a href="/category-no-sidebar" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Category - no sidebar</a></li>
                                                                <li class="megamenu-list-item"><a href="/category-full" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Category - full width</a></li>
                                                                <li class="megamenu-list-item"><a href="/category-masonry" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Category - masonry items</a></li>
                                                                <li class="megamenu-list-item"><a href="/category-banner" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Category - w/ banner</a></li>
                                                                <li class="megamenu-list-item"><a href="/detail-1" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Product detail</a></li>
                                                                <li class="megamenu-list-item"><a href="/detail-2" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Product detail - v.2</a></li>
                                                                <li class="megamenu-list-item"><a href="/detail-3" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Product detail - v.3</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <h6 class="text-uppercase">Order process</h6>
                                                            <ul class="megamenu-list list-unstyled">
                                                                <li class="megamenu-list-item"><a href="/cart" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Shopping cart</a></li>
                                                                <li class="megamenu-list-item"><a href="/checkout-1" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Checkout (5 steps)</a></li>
                                                            </ul>
                                                            <h6 class="text-uppercase">Blog</h6>
                                                            <ul class="megamenu-list list-unstyled">
                                                                <li class="megamenu-list-item"><a href="/blog" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Blog</a></li>
                                                                <li class="megamenu-list-item"><a href="/blog/best-books-about-fashion" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Post</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <h6 class="text-uppercase">Pages</h6>
                                                            <ul class="megamenu-list list-unstyled">
                                                                <li class="megamenu-list-item"><a href="/about" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">About us<span class="ml-1 mt-n1 badge badge-warning">New</span></a></li>
                                                                <li class="megamenu-list-item"><a href="/about-2" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">About us v.2<span class="ml-1 mt-n1 badge badge-warning">New</span></a></li>
                                                                <li class="megamenu-list-item"><a href="/contact" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Contact</a></li>
                                                                <li class="megamenu-list-item"><a href="/contact-2" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Contact v.2 </a></li>
                                                                <li class="megamenu-list-item"><a href="/text" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Text page</a></li>
                                                                <li class="megamenu-list-item"><a href="/faq" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">F.A.Q.s</a></li>
                                                                <li class="megamenu-list-item"><a href="/coming-soon" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Coming soon</a></li>
                                                                <li class="megamenu-list-item"><a href="/404" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">404 page<span class="ml-1 mt-n1 badge badge-warning">New</span></a></li>
                                                            </ul>
                                                            <h6 class="text-uppercase">Customer</h6>
                                                            <ul class="megamenu-list list-unstyled">
                                                                <li class="megamenu-list-item"><a href="/customer-login" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Login/sign up</a></li>
                                                                <li class="megamenu-list-item"><a href="/customer-orders" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Orders</a></li>
                                                                <li class="megamenu-list-item"><a href="/customer-order" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Order detail</a></li>
                                                                <li class="megamenu-list-item"><a href="/customer-addresses" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Addresses</a></li>
                                                                <li class="megamenu-list-item"><a href="/customer-account" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Profile</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <h6 class="text-uppercase">Documentation</h6>
                                                            <ul class="megamenu-list list-unstyled">
                                                                <li class="megamenu-list-item"><a href="/docs/introduction" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Introduction</a></li>
                                                                <li class="megamenu-list-item"><a href="/docs/directory-structure" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Directory structure</a></li>
                                                                <li class="megamenu-list-item"><a href="/docs/next" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Next.js</a></li>
                                                                <li class="megamenu-list-item"><a href="/docs/customizing-css" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Customizing CSS</a></li>
                                                                <li class="megamenu-list-item"><a href="/docs/credits" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Credits</a></li>
                                                                <li class="megamenu-list-item"><a href="/docs/changelog" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Changelog</a></li>
                                                            </ul>
                                                            <h6 class="text-uppercase">Components</h6>
                                                            <ul class="megamenu-list list-unstyled">
                                                                <li class="megamenu-list-item"><a href="/docs/components-bootstrap" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Bootstrap</a></li>
                                                                <li class="megamenu-list-item"><a href="/docs/components-theme" tabindex="0" role="menuitem" class="megamenu-list-link dropdown-item">Theme</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="megamenu-services d-none d-lg-flex pl-lg-5 row">
                                                        <div class="d-flex col-lg-6 col-xl-3">
                                                            <div class="megamenu-services-item"><svg class="svg-icon megamenu-services-icon">
                                                                    <use xlink:href="/icons/orion-svg-sprite.svg#delivery-time-1"></use>
                                                                </svg>
                                                                <div>
                                                                    <h6 class="text-uppercase">Free shipping &amp; return</h6>
                                                                    <p class="mb-0 text-muted text-sm">Free Shipping over $300</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex col-lg-6 col-xl-3">
                                                            <div class="megamenu-services-item"><svg class="svg-icon megamenu-services-icon">
                                                                    <use xlink:href="/icons/orion-svg-sprite.svg#money-1"></use>
                                                                </svg>
                                                                <div>
                                                                    <h6 class="text-uppercase">Money back guarantee</h6>
                                                                    <p class="mb-0 text-muted text-sm">30 Days Money Back</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex col-lg-6 col-xl-3">
                                                            <div class="megamenu-services-item"><svg class="svg-icon megamenu-services-icon">
                                                                    <use xlink:href="/icons/orion-svg-sprite.svg#customer-support-1"></use>
                                                                </svg>
                                                                <div>
                                                                    <h6 class="text-uppercase">020-800-456-747</h6>
                                                                    <p class="mb-0 text-muted text-sm">24/7 Available Support</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex col-lg-6 col-xl-3">
                                                            <div class="megamenu-services-item"><svg class="svg-icon megamenu-services-icon">
                                                                    <use xlink:href="/icons/orion-svg-sprite.svg#secure-payment-1"></use>
                                                                </svg>
                                                                <div>
                                                                    <h6 class="text-uppercase">Secure Payment</h6>
                                                                    <p class="mb-0 text-muted text-sm">Secure Payment</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-none d-lg-block col-lg-3"><img src="/img/megamenu.jpg" alt="" class="bg-image" /></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                                    <li class="dropdown nav-item"><a aria-haspopup="true" href="#" class="dropdown-toggle nav-link" aria-expanded="false">Docs</a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="  dropdown-menu">
                                            <h6 class="dropdown-header font-weight-normal">Documentation</h6><a href="/docs/introduction" tabindex="0" role="menuitem" class="dropdown-item">Introduction</a><a href="/docs/directory-structure" tabindex="0" role="menuitem" class="dropdown-item">Directory structure</a><a href="/docs/next" tabindex="0" role="menuitem" class="dropdown-item">Next.js</a><a href="/docs/customizing-css" tabindex="0" role="menuitem" class="dropdown-item">Customizing CSS</a><a href="/docs/credits" tabindex="0" role="menuitem" class="dropdown-item">Credits</a><a href="/docs/changelog" tabindex="0" role="menuitem" class="dropdown-item">Changelog</a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <h6 class="dropdown-header font-weight-normal">Components</h6><a href="/docs/components-bootstrap" tabindex="0" role="menuitem" class="dropdown-item">Bootstrap</a><a href="/docs/components-theme" tabindex="0" role="menuitem" class="dropdown-item">Theme</a>
                                        </div>
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
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div style="background-image:url(assets/img/2.jpg);background-color:#d2cecb" class="dark-overlay split-screen-column align-items-center align-items-lg-end col-lg-6">
                            <div class="overlay-content py-6 mt-6 px-lg-5 mt-lg-0 mb-lg-5">
                                <h1 class="display-3 mb-4 text-white font-weight-bold split-screen-heading letter-spacing-1">Gentlemen</h1>
                                <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p><a class="btn btn-light mx-1 mb-1" href="/category">View collection</a><a class="btn btn-outline-light mx-1 mb-1" href="/category">See more</a></p>
                            </div>
                        </div>
                        <div style="background-image:url(assets/img/3.jpg);background-color:#e5b6b4" class="split-screen-column align-items-center align-items-lg-end col-lg-6">
                            <div class="py-6 px-lg-5 mb-lg-5">
                                <h1 class="display-3 mb-4 text-white font-weight-bold split-screen-heading letter-spacing-1">Ladies</h1>
                                <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p><a class="btn btn-light mx-1 mb-1" href="/category-full">View collection</a><a class="btn btn-outline-light mx-1 mb-1" href="/category-full">See more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="pt-6 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto text-center mb-5 col-xl-8">
                                <h2 class="text-uppercase">Latest arrivals</h2>
                                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-3">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="ribbon ribbon-info">Fresh</div>
                                        <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                            <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="White Tee" src="assets/img/1.png" sizes="(max-width: 576px) 100vw, 530px" srcSet="assets/img/1.png" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                        </div>
                                        <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                            <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        <p class="text-muted text-sm mb-1">Tops &amp; blouses</p>
                                        <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">White Tee</a></h3><span class="text-muted">$
                                            <!-- -->32.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-3">
                                <div class="product">
                                    <div class="product-image">
                                        <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                            <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="assets/img/4.jpg" sizes="(max-width: 576px) 100vw, 530px" srcSet="assets/img/4.jpg" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                        </div>
                                        <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                            <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        <p class="text-muted text-sm mb-1">Tops &amp; blouses</p>
                                        <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Black blouse</a></h3><span class="text-muted">$
                                            <!-- -->40.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-3">
                                <div class="product">
                                    <div class="product-image">
                                        <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                            <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                        </div>
                                        <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                            <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        <p class="text-muted text-sm mb-1">Tops &amp; blouses</p>
                                        <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Short top</a></h3><span class="text-muted">$
                                            <!-- -->89.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-3">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="ribbon ribbon-primary">Sale</div>
                                        <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                            <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                        </div>
                                        <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                            <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a><a class="btn btn-outline-dark btn-product-right"><i class="fa fa-expand-arrows-alt"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        <p class="text-muted text-sm mb-1">Jackets</p>
                                        <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">College jacket</a></h3><span class="text-muted">$
                                            <!-- -->68.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-6 bg-gray-100">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto text-center mb-5 col-xl-8">
                                <h2>Spring 2020 Collection</h2>
                                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-md-stretch mb-30px mb-md-0 col-md-6">
                                <div class="d-flex align-items-center text-white dark-overlay w-100 text-center py-6 py-md-0" style="background:center center url(assets/img/man.jpg) no-repeat;background-size:cover"><a class="tile-link" href="/category"></a>
                                    <div class="card-img-overlay w-100 overlay-content">
                                        <h2 class="display-2 font-weight-bold text-uppercase mb-0">Men</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-0 text-white text-center mb-30px dark-overlay">
                                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                        <div style="box-sizing:border-box;display:block;max-width:100%"><img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="assets/img/woman.jpg" /></div><img alt="Ladies" src="assets/img/woman.jpg" decoding="async" class="card-img" style="visibility:hidden;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                    </div><a class="tile-link" href="/category"></a>
                                    <div class="card-img-overlay d-flex align-items-center">
                                        <div class="text-center w-100 overlay-content">
                                            <h2 class="display-4 font-weight-bold text-uppercase text-center mb-0">Ladies</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 text-white text-center  dark-overlay">
                                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                        <div style="box-sizing:border-box;display:block;max-width:100%"><img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="assets/img/accses.jpg" /></div><img alt="Accessories" src="assets/img/accses.jpg"  decoding="async" class="card-img" style="visibility:hidden;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                    </div><a class="tile-link" href="/category"></a>
                                    <div class="card-img-overlay d-flex align-items-center">
                                        <div class="text-center w-100 overlay-content">
                                            <h2 class="display-4 font-weight-bold text-uppercase text-center mb-0">Accessories</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pt-6 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto text-center mb-5 col-xl-8">
                                <h2 class="text-uppercase">Your favourites</h2>
                                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="ribbon ribbon-info">Fresh</div>
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="White Tee" src="/_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494312-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494312-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494312-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494312-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494312-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494312-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494312-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494312-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494312-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Tops &amp; blouses</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">White Tee</a></h3><span class="text-muted">$
                                                        <!-- -->32.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-590881-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-590881-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-590881-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-590881-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-590881-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-590881-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-590881-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-590881-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-590881-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Tops &amp; blouses</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Black blouse</a></h3><span class="text-muted">$
                                                        <!-- -->40.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Faverie-woodard-319832-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Tops &amp; blouses</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Short top</a></h3><span class="text-muted">$
                                                        <!-- -->89.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="ribbon ribbon-primary">Sale</div>
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Jackets</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">College jacket</a></h3><span class="text-muted">$
                                                        <!-- -->68.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fethan-haddox-484912-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fethan-haddox-484912-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fethan-haddox-484912-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fethan-haddox-484912-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fethan-haddox-484912-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fethan-haddox-484912-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fethan-haddox-484912-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fethan-haddox-484912-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fethan-haddox-484912-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Jeans</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Carrot-fit jeans</a></h3><span class="text-muted">$
                                                        <!-- -->25.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494231-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494231-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494231-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494231-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494231-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494231-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494231-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494231-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494231-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Shirts</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Striped T-Shirt</a></h3><span class="text-muted">$
                                                        <!-- -->33.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="ribbon ribbon-primary">Sale</div>
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-596319-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Jackets</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">College jacket</a></h3><span class="text-muted">$
                                                        <!-- -->68.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="ribbon ribbon-danger">Sold out</div>
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494279-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494279-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494279-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494279-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494279-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494279-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494279-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494279-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fserrah-galos-494279-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Sweaters</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Ethnic Sweater</a></h3><span class="text-muted">$
                                                        <!-- -->19.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fdmitriy-ilkevich-437760-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fdmitriy-ilkevich-437760-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fdmitriy-ilkevich-437760-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fdmitriy-ilkevich-437760-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fdmitriy-ilkevich-437760-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fdmitriy-ilkevich-437760-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fdmitriy-ilkevich-437760-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fdmitriy-ilkevich-437760-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fdmitriy-ilkevich-437760-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Tops &amp; blouses</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Beige</a></h3><span class="text-muted">$
                                                        <!-- -->69.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fian-dooley-347968-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fian-dooley-347968-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fian-dooley-347968-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fian-dooley-347968-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fian-dooley-347968-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fian-dooley-347968-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fian-dooley-347968-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fian-dooley-347968-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fian-dooley-347968-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Tops &amp; blouses</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Skull Tee</a></h3><span class="text-muted">$
                                                        <!-- -->33.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Falex-holyoake-571682-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Falex-holyoake-571682-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Falex-holyoake-571682-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Falex-holyoake-571682-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Falex-holyoake-571682-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Falex-holyoake-571682-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Falex-holyoake-571682-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Falex-holyoake-571682-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Falex-holyoake-571682-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Jackets</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Trucker jacket</a></h3><span class="text-muted">$
                                                        <!-- -->25.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fao-456813-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fao-456813-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fao-456813-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fao-456813-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fao-456813-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fao-456813-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fao-456813-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fao-456813-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fao-456813-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Tops &amp; blouses</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Blouse</a></h3><span class="text-muted">$
                                                        <!-- -->60.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider-item">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" src="/_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-592041-unsplash.jpg&amp;w=3840&amp;q=75" sizes="(max-width: 576px) 100vw, 530px" srcSet="/_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-592041-unsplash.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-592041-unsplash.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-592041-unsplash.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-592041-unsplash.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-592041-unsplash.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-592041-unsplash.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-592041-unsplash.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fimg%2Fproduct%2Fkyle-loftus-592041-unsplash.jpg&amp;w=3840&amp;q=75 3840w" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                                                    </div>
                                                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="/detail-1"></a>
                                                        <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="/detail-1"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="py-2">
                                                    <p class="text-muted text-sm mb-1">Shirts</p>
                                                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="/detail-1">Shirt</a></h3><span class="text-muted">$
                                                        <!-- -->39.00
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-black"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="main-footer">
                <div class="bg-gray-100 text-dark-700 py-6">
                    <div class="container">
                        <div class="row">
                            <div class="service-column col-lg-4">
                                <img class="svg-icon service-icon" src="assets/img/car.png"></img>
                                <div class="service-text">
                                    <h6 class="text-uppercase">Free shipping &amp; return</h6>
                                    <p class="text-muted font-weight-light text-sm mb-0">Free Shipping over $300</p>
                                </div>
                            </div>
                            <div class="service-column col-lg-4">
                                <img class="svg-icon service-icon" src="assets/img/money.png"></img>
                                <div class="service-text">
                                    <h6 class="text-uppercase">Money back guarantee</h6>
                                    <p class="text-muted font-weight-light text-sm mb-0">30 Days Money Back Guarantee</p>
                                </div>
                            </div>
                            <div class="service-column col-lg-4">
                                <img class="svg-icon service-icon" src="assets/img/support.png"></img>
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
                                    <li class="list-inline-item"><img class="w-2rem" src="/svg/visa.svg" alt="..." /></li>
                                    <li class="list-inline-item"><img class="w-2rem" src="/svg/mastercard.svg" alt="..." /></li>
                                    <li class="list-inline-item"><img class="w-2rem" src="/svg/paypal.svg" alt="..." /></li>
                                    <li class="list-inline-item"><img class="w-2rem" src="/svg/western-union.svg" alt="..." /></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>      
        </div>
    </body>
</html>