@extends('layouts.main')

@section('title', 'Ordering')

@section('content')
<main>
    <section class="hero">
        <div class="container">
            <div class="hero-content pb-5 text-center">
                <h1 class="mb-5"></h1>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <ul class="custom-nav mb-5 nav nav-pills">
                <li class="w-25 nav-item"><a href="/basket-place" class="text-sm  nav-link ">ADDRESS</a></li>
                    <li class="w-25 nav-item"><a href="/basket-confirm" class="text-sm nav-link active">PAYMENT METHOD</a></li>
                    <li class="w-25 nav-item"><a href="/preview" class="text-sm disabled  nav-link">ORDER PREVIEW</a></li>
                </ul>
                <form class="">
                    <div class="collapse show">
                        <div class="mb-5">
                            <div class="block mb-3">
                                <div class="block-header"><a href="#" class="accordion-link font-weight-bold " aria-expanded="true">Option one</a></div>
                                <div class="collapse show">
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-md-6 form-group"><label for="card-name" class="form-label">Name on Card</label><input type="text" name="card-name" placeholder="Name on card" value="" class="form-control" /></div>
                                            <div class="col-md-6 form-group"><label for="card-number" class="form-label">Card Number</label><input type="text" name="card-number" placeholder="Card number" value="" class="form-control" /></div>
                                            <div class="col-md-4 form-group"><label for="expiry-date" class="form-label">Expiry Date</label><input type="text" name="expiry-date" placeholder="MM/YY" value="" class="form-control" /></div>
                                            <div class="col-md-4 form-group"><label for="cvv" class="form-label">CVC/CVV</label><input type="text" name="cvv" placeholder="123" value="" class="form-control" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block mb-3">
                                <div class="block-header"><a href="#" class="accordion-link font-weight-bold collapsed">Paypal</a></div>
                                <div class="collapse">
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="custom-radio custom-control"><input type="radio" id="payment-method-1" name="payment" class="custom-control-input" /><label class="custom-control-label" for="payment-method-1"><span class="d-block h6 mt-1 mb-3">Pay with PayPal</span><span class="text-muted text-sm">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</span></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block mb-3">
                                <div class="block-header"><a href="#" class="accordion-link font-weight-bold collapsed">Pay on delivery</a></div>
                                <div class="collapse">
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="custom-radio custom-control"><input type="radio" id="payment-method-2" name="payment" class="custom-control-input" /><label class="custom-control-label" for="payment-method-2"><span class="d-block h6 mt-1 mb-3">Pay on delivery</span><span class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &amp;quot;What&#x27;s happened to me?&amp;quot; he thought. It wasn&#x27;t a dream.</span></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-5 d-flex justify-content-between flex-column flex-lg-row"><a href="{{route('BasketPlace')}}" class="text-muted btn btn-link"><i class="fa fa-angle-left mr-2"></i>BACK</a><a href="/preview" class="btn btn-dark">Continue to order review<i class="fa fa-angle-right ml-2"></i></a></div>
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