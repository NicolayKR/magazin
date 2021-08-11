<template>
<section class="product-details">
    <div class="container-fluid">
        <div class="row">
            <div class="py-3 col-12 order-2 col-lg-6 order-lg-1">
                <!-- <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" v-for="current_slide in this.slider_img" :key="current_slide.id">
                            <div class="detail-full-item bg-cover" :style="`background-image:url(${current_slide})`"></div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div> -->
                <slither-slider :options="{
                    dots: true,
                    controls: false,
                    animationDuration: 1500,
                    animatedDots: true,
                    dotLimit: true,
                    touch: true,
                    numberOfSlides: 1
                    }" >
                    <custom-component v-for="current_slide in this.slider_img" :key="current_slide.id">
                        <div class="detail-full-item bg-cover" :style="`background-image:url(${current_slide})`"></div>
                    </custom-component>
                </slither-slider>
            </div>
            <div v-if="!this.flagError" class="d-flex align-items-center pl-lg-5 mb-5 col-12 order-1 col-lg-6 order-lg-2 col-xl-5">
                <div>
                    <nav class="" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center no-border mb-0">
                            <li class="breadcrumb-item"><a class="" href="/">Главная</a></li>
                            <li class="breadcrumb-item"><a class="" href="/category">Каталог</a></li>
                            <li class="active breadcrumb-item" aria-current="page">{{this.item_data.name}}</li>
                        </ol>
                    </nav>
                    <h1 class="mb-4">{{this.item_data.name}}</h1>
                    <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                        <ul class="list-inline mb-2 mb-sm-0">
                            <li class="list-inline-item h4 font-weight-light mb-0">$
                                {{this.item_data.price}}
                            </li>
                            <li class="list-inline-item text-muted font-weight-light"><del>$
                                {{this.item_data.old_price}}
                            </del></li>
                        </ul>
                        <div class="d-flex align-items-center">
                            <div class="mr-2"><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-primary mr-1"></i><i class="fa fa-star text-gray-300 mr-1"></i></div><span class="text-muted text-uppercase text-sm mt-1">{{this.item_data.reviews}}
                                    просмотров
                            </span>
                        </div>
                    </div>
                    <p class="mb-4 text-muted">{{this.item_data.description}}</p>
                    <div class="row">
                        <div class="detail-option mb-4 col-sm-6 col-lg-12 col-xl-6">
                            <h6 class="detail-option-heading">Размер</h6>
                            <div class="react-select-container css-a-container">
                                <div class="react-select__control css-1o1npcy-control">
                                    <div class="react-select__value-container react-select__value-container--has-value css-1hwfws3">
                                        <div class="react-select__single-value css-1uccc91-singleValue">S</div>
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
                        <div class="detail-option mb-5 col-12 col-lg-6"><label class="detail-option-heading font-weight-bold">Количество</label>
                        <div class="num-block skin-2">
                            <div class="num-in">
                                <span class="minus dis" @click="minusQ()"></span>
                                <input type="text" name="quant" class="in-num detail-quantity cart-index" :value="this.countQ" readonly="">
                                <span class="plus" @click="plusQ()"></span>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    <ul class="list-inline mb-5">
                        <li v-if="this.item_data.status == 4" class="list-inline-item">
                            <button type="button" class="mb-1 btn btn-dark btn-lg cart-add" disabled><i class="fa fa-shopping-cart mr-2"></i>Добавить в покупки</button>
                        </li>
                        <li v-if="this.item_data.status != 4" class="list-inline-item">
                            <button type="button" class="mb-1 btn btn-dark btn-lg cart-add" @click="addItem(item_data.id)"><i class="fa fa-shopping-cart mr-2"></i>Добавить в покупки</button>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li><strong>Категории: </strong><a class="text-muted" href="#">{{this.item_data.category}}</a></li>
                        <li><strong>Теги: </strong><a class="text-muted">{{this.item_data.tags}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
</template>

<script>
import "slither-slider/plugin-dist/slither-slider.css";

export default {
    props: ['current_item'],
    data(){
        return{
            countQ: 1,
            item_data: [],
            flagError: true,
            slider_img: null,
            }
    },
    mounted(){
        this.getItemData();
    },
    methods:{      
        minusQ(){
            if(this.countQ != 1){
                this.countQ--;
            }
        },
        plusQ(){
            this.countQ++;
        },
        async getItemData(){
            try{
                const response = await axios.get(`/getCardData?&item=${this.current_item}`)  
                this.item_data = response.data[0];
                this.slider_img = this.item_data.img_slider[0];
                this.flagError = false;
            }
            catch{
                this.flagError = true;
            }     
        },
        async removeItem(a){
            try{
                const response = await axios.get(`/remove-to-cart?&item=${a}`)  
                this.getBasket();
            }
            catch{
                }     
        },
        async removeAllItem(a){
            try{
                const response = await axios.get(`/remove-all-cart?&item=${a}`)  
                this.getBasket();
            }
            catch{
            }     
        },
        async addItem(a){
            try{
                const response = await axios.get(`/add-to-cart?&item=${a}&quant=${this.countQ}`);
            }
            catch{
               
            }     
        },
    }
}
</script>