<template>
<div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
    <div class="nav-item"><a class="navbar-icon-link d-lg-none" href="#"></a>
        <div class="d-lg-block">  
            <div class="dropdown" v-if="windowWidth>991"><a href="#" aria-haspopup="true" class="navbar-icon-link" aria-expanded="false" id="basket">
                <i class="fas fa-shopping-cart" id="cart"></i>
                <span class="navbar-icon-link-badge cart-index" id="index-cart">{{this.basket_count}}</span>
                </a>                                                                        
                <div tabindex="-1" role="menu" aria-hidden="true" id="basket-modal" class="p-4 dropdown-menu dropdown-menu-right">
                    <div class="navbar-cart-product-wrapper" v-for="(basket_item, index) in basket_data" :key="index">
                        <div class="navbar-cart-product">
                            <div class="d-flex align-items-center"><a :href="`/card-product/${basket_item.id}`"><img class="img-fluid navbar-cart-product-image" :src="basket_item.img_path" alt="..." /></a>
                                <div class="w-100">
                                    <button type="button" class="close text-sm mr-2" @click="removeItem(basket_item.id,basket_item.pivot.size)" href="#"><i class="fa fa-times"></i></button>
                                    <div class="pl-3"><a class="navbar-cart-product-link" :href="`/card-product/${basket_item.id}`">{{basket_item.name}}</a>
                                    <small class="d-block text-muted">Quantity:
                                            {{basket_item.pivot.count}}
                                        </small>
                                        <small class="d-block text-muted">Size:
                                            {{basket_item.pivot.size}}
                                        </small><strong class="d-block text-sm">$
                                            {{basket_item.price}}
                                        </strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-cart-total"><span class="text-uppercase text-muted">Total</span><strong class="text-uppercase">${{getFullPrice()}}</strong></div>
                    <div class="d-flex justify-content-between height-modal-button">
                        <div class="d-flex">
                            <a class="btn btn-link text-dark mr-3" href="/basket">Cart<i class="fa-arrow-right fa"></i></a>
                        </div>
                        <a v-if="this.buy_flag==true" class="btn btn-outline-dark" href="/basket-place">Checkout</a>
                        <button v-if="this.buy_flag==false" class="btn btn-outline-dark" disabled>Checkout</button>
                    </div>
                </div>
            </div>
            <a v-if="windowWidth<=991" href="/basket" aria-haspopup="true" class="navbar-icon-link" aria-expanded="false" id="basket">
                <i class="fas fa-shopping-cart" id="cart"></i>
            </a>                                                                      
        </div>
    </div>
</div>
</template>
<script>
export default {
    props:['countChange'],
    data(){
        return{
            basket_data:[],
            basket_count: 0,
            buy_flag : false,
            windowWidth: window.innerWidth,
            }
    },
    mounted(){
        this.modalBasket();
        window.onresize = () => {
            this.windowWidth = window.innerWidth;
        }
    },
    watch:{
        countChange(){
            this.modalBasket();
        }
    },
    methods:{    
        async updateCount(){
            try{
                const response = await axios.get('/basket-count')  
                this.basket_count = response.data;
                if(Number(this.basket_count) > 0){
                    this.buy_flag = true;
        
                    }
                else{
                    this.buy_flag = false;
                   
                    }
                }
            catch{
                this.flagError = true;
                }    
            },
        async modalBasket() {
            try{
                const response = await axios.get(`/modalBasket`)  
                this.basket_data = response.data;
                this.updateCount();
                
            }
            catch{
            
            }                
        },
        async removeItem(a,b){
            try{
                const response = await axios.get(`/remove-all-cart?&item=${a}&size=${b}`)  
                this.modalBasket();
            }
            catch{
            }     
        },
        getFullPrice(){
            let sum = 0;
            if(this.basket_data!=0){
                this.basket_data.forEach((element) =>{
                sum = sum+ (Number(element.price)*Number(element.pivot.count));
            });
            return sum;
            }
            else{
                return 0;
            }
        }, 
    }
}
</script>