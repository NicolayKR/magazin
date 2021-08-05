@extends('layouts.main')

@section('title', 'Карточка товара')

@section('content')
<main>
    <section class="product-details">
        <div class="container-fluid">
            <div class="row">
                <div class="py-3 col-12 order-2 col-lg-6 order-lg-1">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="detail-full-item bg-cover" style="background-image:url({{$product[0]->img_path}})"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="detail-full-item bg-cover" style="background-image:url({{$product[0]->img_path}})"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="detail-full-item bg-cover" style="background-image:url({{$product[0]->img_path}})"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="detail-full-item bg-cover" style="background-image:url({{$product[0]->img_path}})"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="detail-full-item bg-cover" style="background-image:url({{$product[0]->img_path}})"></div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-white"></div>
                    </div>
                </div>
                <div class="d-flex align-items-center pl-lg-5 mb-5 col-12 order-1 col-lg-6 order-lg-2 col-xl-5">
                    <div>
                        <nav class="" aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center no-border mb-0">
                                <li class="breadcrumb-item"><a class="" href="/">Home</a></li>
                                <li class="breadcrumb-item"><a class="" href="/category">Jackets and tops</a></li>
                                <li class="active breadcrumb-item" aria-current="page">{{$product[0]->name}}</span></li>
                            </ol>
                        </nav>
                        <h1 class="mb-4">{{$product[0]->name}}</h1>
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                            <ul class="list-inline mb-2 mb-sm-0">
                                <li class="list-inline-item h4 font-weight-light mb-0">$
                                    {{$product[0]->price}}
                                </li>
                                <li class="list-inline-item text-muted font-weight-light"><del>$
                                    {{$product[0]->old_price}}
                                </del></li>
                            </ul>
                            <div class="d-flex align-items-center">
                                <div class="mr-2"><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-gray-300 mr-1"></i></div><span class="text-muted text-uppercase text-sm mt-1">{{$product[0]->reviews}}
                                     просмотров
                                </span>
                            </div>
                        </div>
                        <p class="mb-4 text-muted">{{$product[0]->description}}</p>
                        <form class="">
                            <div class="row">
                                <div class="detail-option mb-4 col-sm-6 col-lg-12 col-xl-6">
                                    <h6 class="detail-option-heading">Size <span>(required)</span></h6>
                                    <div class="react-select-container css-2b097c-container">
                                        <div class="react-select__control css-1o1npcy-control">
                                            <div class="react-select__value-container react-select__value-container--has-value css-1hwfws3">
                                                <div class="react-select__single-value css-1uccc91-singleValue">Small</div>
                                                <input id="react-select-2-input" readonly="" tabindex="0" value="" aria-autocomplete="list" class="css-62g3xt-dummyInput" />
                                            </div>
                                            <div class="react-select__indicators css-1wy0on6">
                                                <span class="react-select__indicator-separator css-1hyfx7x"></span>
                                                <div aria-hidden="true" class="react-select__indicator react-select__dropdown-indicator css-leftpi-indicatorContainer">
                                                    <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                        <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-option mb-4 col-sm-6 col-lg-12 col-xl-6">
                                    <h6 class="detail-option-heading">Type <span>(required)</span></h6><label for="material_0" class="btn btn-sm btn-outline-secondary detail-option-btn-label mr-2">
                                        <!-- -->Hoodie<input type="radio" name="material" value="value_0" id="material_0" required="" class="input-invisible form-check-input" />
                                    </label><label for="material_1" class="btn btn-sm btn-outline-secondary detail-option-btn-label mr-2">
                                        <!-- -->College<input type="radio" name="material" value="value_1" id="material_1" required="" class="input-invisible form-check-input" />
                                    </label>
                                </div>
                                <div class="detail-option mb-5 col-12 col-lg-6"><label class="detail-option-heading font-weight-bold">Items <span>(required)</span></label><input type="number" class="form-control detail-quantity" name="items" value="1" /></div>
                            </div>
                            <ul class="list-inline mb-5">
                                <li class="list-inline-item"><button type="submit" class="mb-1 btn btn-dark btn-lg"><i class="fa fa-shopping-cart mr-2"></i>Add to Cart</button></li>
                                <li class="list-inline-item"><a href="#" class="mb-1 btn btn-outline-secondary"><i class="far fa-heart mr-2"></i>Add to wishlist</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><strong>Категории: </strong><a class="text-muted" href="#">{{$product[0]->category}}</a></li>
                                <li><strong>Теги: </strong><a class="text-muted">{{$product[0]->tags}}</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <ul class="flex-column flex-sm-row nav nav-tabs">
                <li class="nav-item"><a class="detail-nav-link active nav-link">Description</a></li>
                <li class="nav-item"><a class="detail-nav-link nav-link">Additional Information</a></li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane px-3 active">
                    <div class="row">
                        <div class="col-md-7 col-xl-8">
                            <h5>About</h5>
                            <p class='text-muted'>Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                            <p class='text-muted'>He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.</p>
                            <h5>You will love</h5>
                            <ul class='text-muted'>
                                <li>He must have tried it a hundred times</li>
                                <li>shut his eyes so that he wouldn't have to look</li>
                                <li>at the floundering legs, and only stopped</li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-xl-4"><img class="img-fluid" src="{{$product[0]->img_path}}" alt="Modern Jacket" /></div>
                    </div>
                </div>
                <div class="tab-pane">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table text-sm">
                                <tbody>
                                    <tr>
                                        <th class="text-uppercase font-weight-normal border-0">Product #</th>
                                        <td class="text-muted border-0">Lorem ipsum dolor sit amet</td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase font-weight-normal ">Available packaging</th>
                                        <td class="text-muted ">LOLDuis aute irure dolor in reprehenderit</td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase font-weight-normal ">Weight</th>
                                        <td class="text-muted ">dolor sit amet</td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase font-weight-normal ">Sunt in culpa qui</th>
                                        <td class="text-muted ">Lorem ipsum dolor sit amet</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table text-sm">
                                <tbody>
                                    <tr>
                                        <th class="text-uppercase font-weight-normal border-0">Weight</th>
                                        <td class="text-muted border-0">dolor sit amet</td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase font-weight-normal ">Sunt in culpa qui</th>
                                        <td class="text-muted ">Lorem ipsum dolor sit amet</td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase font-weight-normal ">Product #</th>
                                        <td class="text-muted ">Lorem ipsum dolor sit amet</td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase font-weight-normal ">Available packaging</th>
                                        <td class="text-muted ">LOLDuis aute irure dolor in reprehenderit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <header class="text-center">
                <h6 class="text-uppercase mb-5">You might also like</h6>
            </header>
            <new-items/>
        </div>
    </section>
</main>
@endsection