<template>
<div class="mb-5 row">
            <div class="col-lg-8">
                <div class="cart">
                    <div class="cart-header text-center">
                        <div class="row">
                            <div class="col-md-5">Вещь</div>
                            <div class="d-none d-md-block col">
                                <div class="row">
                                    <div class="col-md-3">Цена</div>
                                    <div class="col-md-4">Количество</div>
                                    <div class="col-md-3">Итого</div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        <div v-if="basket!=null && !flagError">
            <div v-for="basket_item in this.basket" :key="basket_item.id" class="cart-body">
                <div class="cart-item">
                    <div class=" d-flex align-items-center text-left text-md-center row">
                        <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times"> </i></a>
                            <div class="d-flex align-items-center"><a :href="`/card-product/${basket_item.id}`"><img class="cart-item-img" :src="basket_item.img_path" alt="..." /></a>
                                <div class="cart-title text-left"><a class="text-uppercase text-dark" :href="`/card-product/${basket_item.id}`"><strong>{{basket_item.name}}</strong></a>
                                    <div class="text-muted text-sm">Размер
                                        <!-- -->:
                                        <!-- -->L
                                    </div>
                                    <div class="text-muted text-sm">Цвет
                                        <!-- -->:
                                        <!-- -->Зеленый
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mt-md-0 col-12 col-md-7">
                            <div class="align-items-center row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="d-md-none text-muted col-6">Цена за штуку</div>
                                        <div class="text-right text-md-center col-6 col-md-12">$
                                            {{basket_item.price}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="align-items-center row">
                                        <div class="d-md-none text-muted col-7 col-sm-9">Количество</div>
                                        <div class="col-5 col-sm-3 col-md-12">
                                            <div class="d-flex align-items-center">
                                                <button class="btn btn-items btn-items-decrease" @click="removeItem(basket_item.id)">-</button>
                                                <input type="text" class="form-control text-center border-0 border-md input-items" :value="basket_item.pivot.count" readonly/>
                                                <form action="/add-to-cart/{{$product->id}}" method="POST">
                                                    <button type="submit" class="btn btn-items btn-items-increase">+</button>
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="d-md-none text-muted col-6">Итого</div>
                                        <div class="text-right text-md-center col-6 col-md-12">$
                                            {{getFullPriceItem(basket_item)}}
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none d-md-block text-center col-2">
                                    <button class="cart-remove" type="button" @click="removeAllItem(a)"><i class="delete fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="basket==null" class="alert alert-primary" role="alert">
                Ваша корзина пуста!
            </div>
        </div>
        <div class="my-5 d-flex justify-content-between flex-column flex-lg-row"><a class="btn btn-link text-muted" href="/catalog"><i class="fa fa-chevron-left"></i> Продолжить покупки</a><a class="btn btn-dark" href="/basket-place">Перейти к оформлению заказа<i class="fa fa-chevron-right"></i></a></div>
        </div> 
        <div v-if="basket!=null" class="col-lg-4">
            <div class="block mb-5">
                <div class="block-header">
                    <h6 class="text-uppercase mb-0">Общая стоимость</h6>
                </div>
                <div class="block-body bg-light pt-1">
                    <p class="text-sm">Стоимость доставки и дополнительные расходы рассчитываются на основе введенных вами значений.</p>
                    <ul class="order-summary mb-0 list-unstyled">
                        <li class="order-summary-item"><span>Сумма заказа</span><span>{{getFullPrice()}}</span></li>
                        <li class="order-summary-item"><span>Доставка</span><span>$0.00</span></li>
                        <li class="order-summary-item"><span>Налог</span><span>$0.00</span></li>
                        <li class="order-summary-item border-0"><span>Итого</span><strong class="order-summary-total">{{getFullPrice()}}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
        @endif
    </div>
</template>

<script>
export default {
    props: ['basket'],
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
                const response = await axios.get(`/basket`)  
                    this.basket_data = response.data;
                    this.flagError = false;
                }
                catch{
                    this.flagError = true;
                }                
        },
        getFullPriceItem(a){
            return Number(a.price)*Number(a.pivot.count);
        },
        getFullPrice(){
            let sum = 0;
            this.basket_data.forEach((element) =>{
                sum = sum+ (Number(element.price)*Number(element.pivot.count));
            });
            return sum;
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
                const response = await axios.get(`/add-to-cart?&item=${a}`)  
                this.getBasket();
            }
            catch{
            }     
        },
    }
}
</script>