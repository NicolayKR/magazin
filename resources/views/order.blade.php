@extends('layouts.main')

@section('title', 'Ordering')

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
        <div class="row">
            <div class="col-lg-8">
                <ul class="custom-nav mb-5 nav nav-pills">
                    <li class="w-25 nav-item"><a href="/basket-place" class="text-sm  nav-link active">ADDRESS</a></li>
                    <li class="w-25 nav-item"><a href="/basket-confirm" class="text-sm disabled  nav-link">PAYMENT METHOD</a></li>
                    <li class="w-25 nav-item"><a href="/preview" class="text-sm disabled  nav-link">ORDER REVIEW</a></li>
                </ul>
                <form class="" action="/basket-confirm" method="POST">
                    <div class="collapse show">
                        <h3 class="mb-4">Invoice address</h3>
                        <div class="row">
                            <div class="col-md-6 form-group"><label for="fullname_invoice" class="form-label">FULL_NAME</label><input type="text" name="fullname_invoice" placeholder="Joe Green" id="fullname_invoice" value="" class="form-control" required/></div>
                            <div class="col-md-6 form-group"><label for="emailaddress_invoice" class="form-label">Email</label><input type="text" name="emailaddress_invoice" placeholder="email@gmail.com" id="emailaddress_invoice" value="" class="form-control" required/></div>
                            <div class="col-md-6 form-group"><label for="street_invoice" class="form-label">Street</label><input type="text" name="street_invoice" placeholder="123 Main St." id="street_invoice" value="" class="form-control" required/></div>
                            <div class="col-md-6 form-group"><label for="city_invoice" class="form-label">City</label><input type="text" name="city_invoice" placeholder="Boston" id="city_invoice" value="" class="form-control"required/></div>
                            <div class="col-md-6 form-group"><label for="zip_invoice" class="form-label">ZIP</label><input type="text" name="zip_invoice" placeholder="Postal code" id="zip_invoice" value="" class="form-control" required/></div>
                            <div class="col-md-6 form-group"><label for="phonenumber_invoice" class="form-label">Phone</label><input type="text" name="phonenumber_invoice" placeholder="Phone number" id="phonenumber_invoice" value="" class="form-control" required/></div>
                        </div>
                    </div>
                    <div class="collapse">
                        <h3 class="my-4">Invoice address</h3>
                        <div class="row">
                            <div class="col-md-6 form-group"><label for="shipping_fullname_invoice" class="form-label">FULL_NAME</label><input type="text" name="shipping_fullname_invoice" placeholder="Full name" id="shipping_fullname_invoice" value="" class="form-control" /></div>
                            <div class="col-md-6 form-group"><label for="shipping_emailaddress_invoice" class="form-label">Email</label><input type="text" name="shipping_emailaddress_invoice" placeholder="Email@gmail.com" id="shipping_emailaddress_invoice" value="" class="form-control" /></div>
                            <div class="col-md-6 form-group"><label for="shipping_street_invoice" class="form-label">Street</label><input type="text" name="shipping_street_invoice" placeholder="123 Main St." id="shipping_street_invoice" value="" class="form-control" /></div>
                            <div class="col-md-6 form-group"><label for="shipping_city_invoice" class="form-label">City</label><input type="text" name="shipping_city_invoice" placeholder="Boston" id="shipping_city_invoice" value="" class="form-control" /></div>
                            <div class="col-md-6 form-group"><label for="shipping_zip_invoice" class="form-label">ZIP</label><input type="text" name="shipping_zip_invoice" placeholder="Postal code" id="shipping_zip_invoice" value="" class="form-control" /></div>
                            <div class="col-md-6 form-group"><label for="shipping_phonenumber_invoice" class="form-label">Phone</label><input type="text" name="shipping_phonenumber_invoice" placeholder="Phone number" id="shipping_phonenumber_invoice" value="" class="form-control" /></div>
                        </div>
                    </div>
                    <div class="my-5 d-flex justify-content-between flex-column flex-lg-row"><a href="/basket" class="text-muted btn btn-link"><i class="fa fa-angle-left mr-2"></i>Back</a>
                    @csrf
                    <button type="submit" class="btn btn-dark">Choose delivery method<i class="fa fa-angle-right ml-2"></i></button></div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="block mb-5">
                    <div class="block-header">
                        <h6 class="text-uppercase mb-0">Order Summary</h6>
                    </div>
                    <div class="block-body bg-light pt-1">
                        <p class="text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
                        <ul class="order-summary mb-0 list-unstyled">
                            <li class="order-summary-item"><span>Order Subtotal </span><span>${{$order->getFullPrice()}}</span></li>
                            <li class="order-summary-item"><span>Shipping and handling</span><span>$0.00</span></li>
                            <li class="order-summary-item"><span>Tax</span><span>$0.00</span></li>
                            <li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total">${{$order->getFullPrice()}}</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection