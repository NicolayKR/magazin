@extends('layouts.main')

@section('title', 'Корзина')

@section('content')
<main>
    <section class="hero">
        <div class="container">
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center no-border mb-0">
                    <li class="breadcrumb-item"><a class="" href="/">Home</a></li>
                    <li class="active breadcrumb-item" aria-current="page"><span class="">Shopping cart</span></li>
                </ol>
            </nav>
            <div class="hero-content pb-5 text-center">
                <h1 class="mb-5">Shopping cart</h1>
                <div class="row">
                    <div class="mx-auto col-xl-8">Id commodo velit ullamco dolore non eiusmod deserunt.</div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="mb-5 row">
            <div class="col-lg-8">
                <div class="cart">
                    <div class="cart-header text-center">
                        <div class="row">
                            <div class="col-md-5">Item</div>
                            <div class="d-none d-md-block col">
                                <div class="row">
                                    <div class="col-md-3">Price</div>
                                    <div class="col-md-4">Quantity</div>
                                    <div class="col-md-3">Total</div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-body">
                        <div class="cart-item">
                            <div class=" d-flex align-items-center text-left text-md-center row">
                                <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times"> </i></a>
                                    <div class="d-flex align-items-center"><a href="/detail-1"><img class="cart-item-img" src="/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..." /></a>
                                        <div class="cart-title text-left"><a class="text-uppercase text-dark" href="/detail-1"><strong>Skull Tee</strong></a>
                                            <div class="text-muted text-sm">Size
                                                <!-- -->:
                                                <!-- -->Large
                                            </div>
                                            <div class="text-muted text-sm">Colour
                                                <!-- -->:
                                                <!-- -->Green
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mt-md-0 col-12 col-md-7">
                                    <div class="align-items-center row">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="d-md-none text-muted col-6">Price per item</div>
                                                <div class="text-right text-md-center col-6 col-md-12">$
                                                    <!-- -->65.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="align-items-center row">
                                                <div class="d-md-none text-muted col-7 col-sm-9">Quantity</div>
                                                <div class="col-5 col-sm-3 col-md-12">
                                                    <div class="d-flex align-items-center">
                                                        <div class="btn btn-items btn-items-decrease">-</div><input type="text" class="form-control text-center border-0 border-md input-items" value="2" />
                                                        <div class="btn btn-items btn-items-increase">+</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="d-md-none text-muted col-6">Total price</div>
                                                <div class="text-right text-md-center col-6 col-md-12">$
                                                    <!-- -->130.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-none d-md-block text-center col-2"><a class="cart-remove" href="#"><i class="delete fa fa-times"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-5 d-flex justify-content-between flex-column flex-lg-row"><a class="btn btn-link text-muted" href="/category"><i class="fa fa-chevron-left"></i> Continue Shopping</a><a class="btn btn-dark" href="/checkout-1">Proceed to checkout <i class="fa fa-chevron-right"></i></a></div>
            </div>
            <div class="col-lg-4">
                <div class="block mb-5">
                    <div class="block-header">
                        <h6 class="text-uppercase mb-0">Order Summary</h6>
                    </div>
                    <div class="block-body bg-light pt-1">
                        <p class="text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
                        <ul class="order-summary mb-0 list-unstyled">
                            <li class="order-summary-item"><span>Order Subtotal </span><span>$390.00</span></li>
                            <li class="order-summary-item"><span>Shipping and handling</span><span>$10.00</span></li>
                            <li class="order-summary-item"><span>Tax</span><span>$0.00</span></li>
                            <li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total">$400.00</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection