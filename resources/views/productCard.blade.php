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
                                <div class="detail-full-item bg-cover" style="background-image:url(/img/photo/kyle-loftus-596319-detail-1.jpg)"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="detail-full-item bg-cover" style="background-image:url(/img/photo/kyle-loftus-596319-detail-2.jpg)"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="detail-full-item bg-cover" style="background-image:url(/img/photo/kyle-loftus-596319-detail-3.jpg)"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="detail-full-item bg-cover" style="background-image:url(/img/photo/kyle-loftus-594535-unsplash-detail-3.jpg)"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="detail-full-item bg-cover" style="background-image:url(/img/photo/kyle-loftus-594535-unsplash-detail-4.jpg)"></div>
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
                                <li class="active breadcrumb-item" aria-current="page"><span class="">Modern Jacket</span></li>
                            </ol>
                        </nav>
                        <h1 class="mb-4">Modern Jacket</h1>
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                            <ul class="list-inline mb-2 mb-sm-0">
                                <li class="list-inline-item h4 font-weight-light mb-0">$
                                    <!-- -->65.00
                                </li>
                                <li class="list-inline-item text-muted font-weight-light"><del>$
                                        <!-- -->90.00
                                    </del></li>
                            </ul>
                            <div class="d-flex align-items-center">
                                <div class="mr-2"><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-gray-300 mr-1"></i></div><span class="text-muted text-uppercase text-sm mt-1">25
                                    <!-- --> reviews
                                </span>
                            </div>
                        </div>
                        <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
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
                                <li><strong>Category: </strong><a class="text-muted" href="#">Jackets and tops</a></li>
                                <li><strong>Tags: </strong><a class="text-muted" href="/detail-1#">Leisure</a>, <a class="text-muted" href="/detail-1#">Elegant</a></li>
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
                <li class="nav-item"><a class="detail-nav-link nav-link">Reviews</a></li>
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
                        <div class="col-md-5 col-xl-4"><img class="img-fluid" src="/img/product/kyle-loftus-596319-unsplash-cropped.jpg" alt="Modern Jacket" /></div>
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
                <div class="tab-pane">
                    <div class="mb-5 row">
                        <div class="col-lg-10 col-xl-9">
                            <div class="review media">
                                <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="/img/person-1.jpg" alt="Han Solo" /><span class="text-uppercase text-muted">Dec 2018</span></div>
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Han Solo</h5>
                                    <div class="mb-2">
                                        <div><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i></div>
                                    </div>
                                    <p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</p>
                                </div>
                            </div>
                            <div class="review media">
                                <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="/img/person-2.jpg" alt="Luke Skywalker" /><span class="text-uppercase text-muted">Dec 2018</span></div>
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Luke Skywalker</h5>
                                    <div class="mb-2">
                                        <div><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-gray-200 fa-xs"></i></div>
                                    </div>
                                    <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &amp;quot;What&#x27;s happened to me?&amp;quot; he thought. It wasn&#x27;t a dream.</p>
                                </div>
                            </div>
                            <div class="review media">
                                <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="/img/person-3.jpg" alt="Princess Leia" /><span class="text-uppercase text-muted">Dec 2018</span></div>
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Princess Leia</h5>
                                    <div class="mb-2">
                                        <div><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-gray-200 fa-xs"></i><i class="fa fa-star text-gray-200 fa-xs"></i></div>
                                    </div>
                                    <p class="text-muted">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.</p>
                                </div>
                            </div>
                            <div class="review media">
                                <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="/img/person-4.jpg" alt="Jabba Hut" /><span class="text-uppercase text-muted">Dec 2018</span></div>
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Jabba Hut</h5>
                                    <div class="mb-2">
                                        <div><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i><i class="fa fa-star text-warning fa-xs"></i></div>
                                    </div>
                                    <p class="text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                </div>
                            </div>
                            <div class="py-5 px-3">
                                <h4 class="mb-4">Leave a review</h4>
                                <form class="mb-4 form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for="name" class="form-label">Your name *</label><input type="text" name="name" id="name" placeholder="Enter your name" required="" class="form-control" /></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for="rating" class="form-label">Your name *</label><select name="rating" id="rating" class="custom-select focus-shadow-0">
                                                    <option value="5">★★★★★ (5/5)</option>
                                                    <option value="4">★★★★☆ (4/5)</option>
                                                    <option value="3">★★★☆☆ (3/5)</option>
                                                    <option value="2">★★☆☆☆ (2/5)</option>
                                                    <option value="1">★☆☆☆☆ (1/5)</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label for="email" class="form-label">Your name *</label><input type="email" name="email" id="email" placeholder="Enter your  email" required="" class="form-control" /></div>
                                    <div class="form-group"><label for="review" class="form-label">Review text *</label><textarea rows="4" name="review" id="review" placeholder="Enter your review" required="" class="form-control"></textarea></div><button type="submit" class="btn btn-outline-dark">Post review</button>
                                </form>
                                <p class="text-muted text-sm"><span class="badge badge-info">Note</span> This form shows usage of the classic Bootstrap form controls, not their underlined variants. You can choose whichever variant you want.</p>
                            </div>
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
            <div class="row">
                <div class="col-6 col-md-4 col-lg-2 col-xl-2">
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
                <div class="col-6 col-md-4 col-lg-2 col-xl-2">
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
                <div class="col-6 col-md-4 col-lg-2 col-xl-2">
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
                <div class="col-6 col-md-4 col-lg-2 col-xl-2">
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
                <div class="col-6 col-md-4 col-lg-2 col-xl-2">
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
                <div class="col-6 col-md-4 col-lg-2 col-xl-2">
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
        </div>
    </section>
</main>
<card-product/>
@endsection