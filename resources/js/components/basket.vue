<template>
<div class="mb-5 row">
    <div class="col-lg-8">
        <div class="cart">
            <div class="cart-header text-center">
                <div class="row">
                    <div class="col-md-5">ITEM</div>
                    <div class="d-none d-md-block col">
                        <div class="row">
                            <div class="col-md-3">PRICE</div>
                            <div class="col-md-4">QUANTITY</div>
                            <div class="col-md-3">TOTAL</div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="this.basket_data.length!=0">
                <div v-for="basket_item in basket_data" :key="basket_item.id" class="cart-body">
                    <div class="cart-item">
                        <div class=" d-flex align-items-center text-left text-md-center row">
                            <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times"> </i></a>
                                <div class="d-flex align-items-center"><a :href="`/card-product/${basket_item.id}`"><img class="cart-item-img" :src="basket_item.img_path" alt="..." /></a>
                                    <div class="cart-title text-left"><a class="text-uppercase text-dark" :href="`/card-product/${basket_item.id}`"><strong>{{basket_item.name}}</strong></a>
                                        <div class="text-muted text-sm">Size
                                            <!-- -->:
                                            <!-- -->{{basket_item.pivot.size}}
                                        </div>
                                        <div class="text-muted text-sm">Color
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
                                                {{basket_item.price}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="align-items-center row">
                                            <div class="d-md-none text-muted col-7 col-sm-9">Quantity</div>
                                            <div class="col-5 col-sm-3 col-md-12">
                                                <div class="d-flex align-items-center">
                                                    <button class="btn btn-items btn-items-decrease" @click="removeItem(basket_item.id, basket_item.pivot.size)">-</button>
                                                    <input type="text" class="form-control text-center border-0 border-md input-items" :value="basket_item.pivot.count" readonly/>
                                                    <button type="button" class="btn btn-items btn-items-increase" @click="addItem(basket_item.id,basket_item.pivot.size)">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="d-md-none text-muted col-6">Total</div>
                                            <div class="text-right text-md-center col-6 col-md-12">$
                                                {{getFullPriceItem(basket_item)}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block text-center col-2">
                                        <button class="cart-remove" type="button" @click="removeAllItem(basket_item.id,basket_item.pivot.size)"><i class="delete fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="this.basket_data.length == 0" class="alert alert-primary" role="alert">
                Your cart is empty!
            </div>
        </div>
        <div class="my-5 d-flex justify-content-between flex-column flex-lg-row">
            <a class="btn btn-link text-muted" href="/catalog"><i class="fa fa-chevron-left"></i> Continue Shopping</a>
            <a v-if="basket_data.length !=0" class="btn btn-dark" href="/basket-place">Proceed to checkout<i class="fa fa-chevron-right ms-1"></i></a>
            <button v-if="basket_data.length ==0" class="btn btn-dark" disabled>Proceed to checkout<i class="fa fa-chevron-right ms-1"></i></button>
        </div>
    </div>
    <div v-if="this.basket_data.length != 0" class="col-lg-4">
        <div class="block mb-5">
            <div class="block-header">
                <h6 class="text-uppercase mb-0">Order Summary</h6>
            </div>
            <div class="block-body bg-light pt-1">
                <p class="text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
                <ul class="order-summary mb-0 list-unstyled">
                    <li class="order-summary-item"><span>Order Subtotal</span><span>${{getFullPrice()}}</span></li>
                    <li class="order-summary-item"><span>Shipping and handling</span><span>$0.00</span></li>
                    <li class="order-summary-item"><span>Tax</span><span>$0.00</span></li>
                    <li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total">${{getFullPrice()}}</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            basket_data:[],
            flagError: true,
            }
    },
    mounted(){
        this.getBasket();
    },
    methods:{      
        async getBasket() {
            try{
                const response = await axios.get('/basketData')  
                    this.basket_data = response.data;
                    console.log(response);
                    this.flagError = false;
                }
                catch{
                    this.flagError = true;
                    console.log("error /basket");
                }                
        },
        getFullPriceItem(a){
            return Number(a.price)*Number(a.pivot.count);
        },
        getFullPrice(){
            let sum = 0;
            if(this.basket_data!=null){
                this.basket_data.forEach((element) =>{
                    sum = sum+ (Number(element.price)*Number(element.pivot.count));
                });
            }
            return sum;
        },
        async removeItem(a,b){
            try{
                const response = await axios.get(`/remove-to-cart?&item=${a}&size=${b}`);
                this.getBasket();
            }
            catch{
                }     
        },
        async removeAllItem(a,b){
            try{
                const response = await axios.get(`/remove-all-cart?&item=${a}&size=${b}`);  
                this.getBasket();
            }
            catch{
            }     
        },
        async addItem(a,b){
            try{
                const response = await axios.get(`/add-to-cart?&item=${a}&quant=1&size=${b}`)  
                this.getBasket();
            }
            catch{
            }     
        },
    }
}
</script>