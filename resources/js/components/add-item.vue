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
                    <div v-for="current_slide in this.slider_img" :key="current_slide.id" class="detail-full-item bg-cover" :style="`background-image:url(${current_slide})`"></div>
                </slither-slider>
            </div>
            <div v-if="!this.flagError" class="d-flex align-items-center pl-lg-5 mb-5 col-12 order-1 col-lg-6 order-lg-2 col-xl-5">
                <div>
                    <nav class="" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center no-border mb-0">
                            <li class="breadcrumb-item"><a class="" href="/">Home</a></li>
                            <li class="breadcrumb-item"><a class="" href="/catalog">Catalog</a></li>
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
                                    REVIEWS
                            </span>
                        </div>
                    </div>
                    <p class="mb-4 text-muted">{{this.item_data.description}}</p>
                    <div class="row">
                        <div class="detail-option mb-4 col-sm-6 col-lg-12 col-xl-6">
                            <h6 class="detail-option-heading">Size</h6>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">S</option>
                                <option value="2">L</option>
                                <option value="3">M</option>
                            </select>
                        </div>
                        <div class="detail-option mb-5 col-12"><label class="detail-option-heading font-weight-bold">ITEMS</label>
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
                            <button type="button" class="mb-1 btn btn-dark btn-lg cart-add" disabled><i class="fa fa-shopping-cart mr-2"></i>Add to Cart</button>
                        </li>
                        <li v-if="this.item_data.status != 4" class="list-inline-item">
                            <button type="button" class="mb-1 btn btn-dark btn-lg cart-add" @click="addItem(item_data.id)"><i class="fa fa-shopping-cart mr-2"></i>Add to Cart</button>
                        </li>
                    </ul>
                    <ul class="list-unstyled">
                        <li><strong>Category: </strong><a class="text-muted" href="#">{{this.item_data.category}}</a></li>
                        <li><strong>Tags: </strong><a class="text-muted">{{this.item_data.tags}}</a></li>
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
            flagCount: 0,
            }
    },
    mounted(){
        this.getItemData();
    },
    watch:{
        flagCount(){
            this.BasketChange();
        }
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
        async addItem(a){
            try{
                const response = await axios.get(`/add-to-cart?&item=${a}&quant=${this.countQ}`);
               // console.log(this.countQ);
                this.flagCount++;
            }
            catch{
               
            }     
        },
        BasketChange() {
            this.$emit('BasketChange', {flagCount: this.flagCount});
        }  
    }
}
</script>