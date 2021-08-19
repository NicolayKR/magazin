<template>
<div style="padding-top:0">
    <header class="header">
        <div>
            <nav id="main-header" class="navbar-sticky bg-fixed-white  navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid"><a class="py-1 navbar-brand" href="/"><svg class="navbar-brand-svg" viewBox="0 0 65 16" width="85" height="20" fill="none">
                            <path class="navbar-brand-svg-text" d="M5.72266 18.1562C4.88281 18.1562 4.08529 18.0033 3.33008 17.6973C2.58138 17.3913 1.94661 16.9355 1.42578 16.3301C0.911458 15.7181 0.582682 14.9759 0.439453 14.1035L2.90039 13.4785C2.98503 14.2988 3.28776 14.9173 3.80859 15.334C4.33594 15.7507 4.98698 15.959 5.76172 15.959C6.23698 15.959 6.64714 15.8841 6.99219 15.7344C7.33724 15.5781 7.59766 15.3665 7.77344 15.0996C7.94922 14.8327 8.03711 14.5332 8.03711 14.2012C8.03711 13.804 7.91341 13.4655 7.66602 13.1855C7.42513 12.9056 7.1224 12.6745 6.75781 12.4922C6.39323 12.3099 5.89193 12.0918 5.25391 11.8379C4.42057 11.5059 3.74674 11.1999 3.23242 10.9199C2.7181 10.6335 2.27539 10.2363 1.9043 9.72852C1.53971 9.2207 1.35742 8.57943 1.35742 7.80469C1.35742 7.01693 1.54948 6.33659 1.93359 5.76367C2.32422 5.18424 2.84505 4.74479 3.49609 4.44531C4.15365 4.14583 4.8763 3.99609 5.66406 3.99609C6.54948 3.99609 7.35677 4.19792 8.08594 4.60156C8.8151 4.9987 9.40755 5.60417 9.86328 6.41797L7.80273 7.67773C7.56185 7.20898 7.24609 6.84766 6.85547 6.59375C6.46484 6.33333 6.03841 6.20312 5.57617 6.20312C5.25065 6.20312 4.95443 6.26497 4.6875 6.38867C4.42708 6.51237 4.21875 6.68815 4.0625 6.91602C3.91276 7.13737 3.83789 7.39128 3.83789 7.67773C3.83789 8.0293 3.95182 8.32878 4.17969 8.57617C4.40755 8.82357 4.69401 9.0319 5.03906 9.20117C5.39062 9.37044 5.86914 9.57227 6.47461 9.80664C7.33398 10.1387 8.0306 10.4512 8.56445 10.7441C9.09831 11.0371 9.55729 11.4473 9.94141 11.9746C10.3255 12.502 10.5176 13.1693 10.5176 13.9766C10.5176 14.8229 10.3027 15.5618 9.87305 16.1934C9.44987 16.8249 8.8737 17.3099 8.14453 17.6484C7.41536 17.987 6.60807 18.1562 5.72266 18.1562ZM16.8906 4.20117H26.0703V6.47656H19.3711V9.96289H25.6113V12.2383H19.3711V15.6562H26.0703V18H16.8906V4.20117ZM33.0586 4.20117H35.5391V15.6562H41.4375V18H33.0586V4.20117ZM47.4492 4.20117H49.9297V15.6562H55.8281V18H47.4492V4.20117Z" transform="translate(0 -3)" fill="#212529"></path>
                            <path class="text-primary" d="M62.0254 15.4219H64.418V18H62.0254V15.4219Z" transform="translate(0 -3)" fill="#9A6EE2"></path>
                        </svg></a><button aria-label="Toggle navigation" type="button" class="navbar-toggler-right navbar-toggler"><i class="fa fa-bars"></i></button>
                    <div class="collapse navbar-collapse">
                        <ul class="mx-auto navbar-nav">
                            <li class="nav-item"><a aria-haspopup="true" href="/" class="nav-link" aria-expanded="false">Home</a></li>
                            <li class="nav-item"><a aria-haspopup="true" href="/catalog" class="nav-link" aria-expanded="false">Catalog</a></li>
                            <li class="position-static nav-item"><a aria-haspopup="true" href="/blog" class=" nav-link" aria-expanded="false">Blog</a></li>
                            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                        </ul>
                        <!--  -->
                        <basketModal :countChange="this.flagCount"/>   
                        <!--  -->
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section class="product-details">
            <!-- <div class="container-fluid">
                <div class="row"> -->
                    <!-- <div class="py-3 col-12 order-2 col-lg-6 order-lg-1">
                        <div class="swiper-container mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="detail-full-item bg-cover" style="background-image:url({{$product[0]['img_path']}})"></div>
                                </div>
                                @foreach ($product[0]['img_slider'] as $current_img)
                                    @foreach ($current_img as $item)
                                    <div class="swiper-slide">
                                        <div class="detail-full-item bg-cover" style="background-image:url({{$item}})"></div>
                                    </div> 
                                    @endforeach 
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div> -->
<!--  -->
            <additem :current_item="index_data.id" @BasketChange='BasketChange'/> 
<!--  -->
                <!-- </div>
            </div> -->
        </section>
        <section class="mt-5">
            <div class="container">
                <ul class="flex-column flex-sm-row nav nav-tabs">
                    <li class="nav-item"><a class="detail-nav-link active nav-link">DESCRIPTION</a></li>
                    <li class="nav-item"><a class="detail-nav-link nav-link">ADDITIONAL INFORMATION</a></li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane px-3 active">
                        <div class="row">
                            <div class="col-md-7 col-xl-8">
                                <h5>Информация</h5>
                                <p class='text-muted'>Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                <p class='text-muted'>He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.</p>
                                <h5>You will love</h5>
                                <ul class='text-muted'>
                                    <li>He must have tried it a hundred times</li>
                                    <li>shut his eyes so that he wouldn't have to look</li>
                                    <li>at the floundering legs, and only stopped</li>
                                </ul>
                            </div>
                            <div class="col-md-5 col-xl-4"><img class="img-fluid" :src="index_data.img_path"  alt="Modern Jacket" /></div>
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
                <newitems @okey='itsNewItems'/>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="bg-gray-100 text-dark-700 py-6">
            <div class="container">
                <div class="row">
                    <div class="service-column col-lg-4">
                        <img class="svg-icon service-icon" src="/assets/img/car.png">
                        <div class="service-text">
                            <h6 class="text-uppercase">FREE SHIPPING & RETURN</h6>
                            <p class="text-muted font-weight-light text-sm mb-0">Free Shipping over $300</p>
                        </div>
                    </div>
                    <div class="service-column col-lg-4">
                        <img class="svg-icon service-icon" src="/assets/img/money.png">
                        <div class="service-text">
                            <h6 class="text-uppercase">MONEY BACK GUARANTEE</h6>
                            <p class="text-muted font-weight-light text-sm mb-0">30 Days Money Back Guarantee</p>
                        </div>
                    </div>
                    <div class="service-column col-lg-4">
                        <img class="svg-icon service-icon" src="/assets/img/support.png">
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
                        <h6 class="text-uppercase text-dark mb-3">SHOP</h6>
                        <ul class="list-unstyled">
                            <li><a class="text-muted" href="/">Home</a></li>
                            <li><a class="text-muted" href="/catalog">Catalog</a></li>
                            <li><a class="text-muted" href="/blog">Blog</a></li>
                            <li><a class="text-muted" href="/about">About us</a></li>
                            <li><a class="text-muted" href="/contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h6 class="text-uppercase text-dark mb-3">DAILY OFFERS & DISCOUNTS</h6>
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
</template>

<script>
import newitems from './newItems';
import additem from './add-item';
import basketModal from './basket-modal';

export default {
    props: ['index_data'],

    components: {newitems, additem, basketModal},

    data(){
        return{
            item_data: [],
            statusNewItem: true,
            flagCount: null,
            }
    },
    mounted(){
        //this.getItemData();
    },
    methods:{      
        itsNewItems(data){
            this.statusNewItem = data.okey;
        },
        BasketChange(data){
            this.flagCount = data.flagCount;
        }
    }
}
</script>