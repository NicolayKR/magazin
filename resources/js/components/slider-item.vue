<template>
    <div class="item_wrapp">
        <div class="swiper-slide">
            <div class="product-slider-item">
                <div class="product">
                    <div class="product-image">
                        <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                            <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" :src="item_data.img_path" sizes="(max-width: 576px) 100vw, 530px" :srcSet="`${item_data.img_path} , ${item_data.img_path}, ${item_data.img_path}`" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                        </div>
                        <div class="product-hover-overlay"><a class="product-hover-overlay-link" :href="`/card-product/${item_data.id}`"></a>
                            <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" :href="`/card-product/${item_data.id}`"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                        </div>
                    </div>
                    <div class="py-2">
                        <p class="text-muted text-sm mb-1">{{item_data.category}}</p>
                        <h3 class="h6 text-uppercase mb-1"><a class="text-dark" :href="`/card-product/${item_data.id}`">{{item_data.name}}</a></h3><span class="text-muted">$
                            {{item_data.price}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    props:{
        item_data:{
            default:()=>{}
        }
    },
    methods:{
        // getDate(a){
        //     const dateFormat = require('dateformat');
        //     const res = dateFormat(new Date(a), "dd.mm.yy")
        //     return res;
        // }
    }
}
</script>

<style lang="scss" scoped>

.item{
    &_wrapp{
        max-width: 100%;
        max-height: 100%;
        box-sizing: border-box;
        z-index: 1;
        &:nth-child(1){
            margin-left: 0px;
            }
    }

}
// @media ( max-width: 990px ){
//     .item_wrapp{
//         max-width: 316px;
//         margin: 0 auto;
        
//     }
// }
// @media ( max-width: 375px ){
//     .item_wrapp{
//         max-width: 300px;
//         margin: 0 auto;
//     }
// }
</style>