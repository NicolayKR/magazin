<template>
<div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
    <div class="nav-item"><a class="navbar-icon-link d-lg-none" href="/cart"></a>
        <div class="d-lg-block">  
            <div class="dropdown"><a href="#" aria-haspopup="true" class="navbar-icon-link" aria-expanded="false" id="basket">
                <i class="fas fa-shopping-cart" id="cart"></i>
                <span class="navbar-icon-link-badge cart-index" id="index-cart">{{this.basket_count}}</span>
                </a>                                                                        
                <div tabindex="-1" role="menu" aria-hidden="true" id="basket-modal" class="p-4 dropdown-menu dropdown-menu-right">
                    <div class="navbar-cart-product-wrapper" v-for="basket_item in basket_data" :key="basket_item.id">
                        <div class="navbar-cart-product">
                            <div class="d-flex align-items-center"><a :href="`/card-product/${basket_item.id}`"><img class="img-fluid navbar-cart-product-image" :src="basket_item.img_path" alt="..." /></a>
                                <div class="w-100">
                                    <button type="button" class="close text-sm mr-2" @click="removeItem(basket_item.id)" href="#"><i class="fa fa-times"></i></button>
                                    <div class="pl-3"><a class="navbar-cart-product-link" :href="`/card-product/${basket_item.id}`">{{basket_item.name}}</a><small class="d-block text-muted">Количество:
                                            {{basket_item.pivot.count}}
                                        </small><strong class="d-block text-sm">$
                                            {{basket_item.price}}
                                        </strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-cart-total"><span class="text-uppercase text-muted">Цена</span><strong class="text-uppercase">${{getFullPrice()}}</strong></div>
                    <div class="d-flex justify-content-between height-modal-button"><a class="btn btn-link text-dark mr-3" href="/basket">В корзину<i class="fa-arrow-right fa"></i></a>
                        <a href="/basket-place"><button v-if="this.buy_flag==true" class="btn btn-outline-dark" >Купить</button></a>
                        <button v-if="this.buy_flag==false" class="btn btn-outline-dark" disabled>Купить</button>
                    </div>
                </div>
            </div>
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
            }
    },
    mounted(){
        this.modalBasket();
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
        async removeItem(a){
            try{
                const response = await axios.get(`/remove-all-cart?&item=${a}`)  
                this.modalBasket();
            }
            catch{
            }     
        },
        getFullPrice(){
            let sum = 0;
            this.basket_data.forEach((element) =>{
                sum = sum+ (Number(element.price)*Number(element.pivot.count));
            });
            return sum;
        }, 
        async goRoute(a){
            const response = await axios.get(a);
        }
    }
}
</script>