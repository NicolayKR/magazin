<template>
    <div class="row" v-if="!flagError">    
        <div class="col-6 col-md-4 col-lg-3 col-xl-3" v-for="item_data in new_data" :key="item_data.id">
            <div class="product">
                <div class="product-image">
                    <!-- <div class="ribbon ribbon-primary">Sale</div> -->
                    <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                        <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="product" :src="item_data.img_path" sizes="(max-width: 576px) 100vw, 530px" :srcSet="`${item_data.img_path} , ${item_data.img_path}, ${item_data.img_path}`" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                    </div>
                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" :href="`/card-product/${item_data.id}`"></a>
                        <div class="product-hover-overlay-buttons d-flex"> 
                            <a class="btn btn-outline-dark btn-product-left cart-add" :href="`/card-product/${item_data.id}`"><i class="fa fa-shopping-cart"></i></a> 
                            <a class="btn btn-dark btn-buy" :href="`/card-product/${item_data.id}`"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a>
                        </div>
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
</template>
<script>

export default {
    data(){
        return{
            new_data:[],
            flagError: true,
            }
    },
    mounted(){
        this.getDataNew();
    },
    watch:{
        flagError(){
            if(this.flagError == false){
                this.itsOkey();
            }
        }
    },
    methods:{      
        async getDataNew() {
            try{
                const response = await axios.get('/getDataNew')  
                this.new_data = response.data;
                this.flagError = false;
                }
                catch{
                    this.flagError = true;
                }                
        },
        // submit : function(){
        //     this.$refs.form.submit();
        //     },  
        itsOkey() {
            this.$emit('okey', {okey: this.flagError});
        }  
    }
}
</script>