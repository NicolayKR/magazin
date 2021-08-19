<template>
    <div class="row" v-if="!flagError">
        <div class="products-grid sidebar-none col-12">
            <header class="product-grid-header">
                <div class="mr-3 mb-3">Showing <strong>{{count_shows_start}}-{{count_shows}}</strong> of <strong>{{catalog_data.length}}</strong> products</div>
                <div class="mr-3 mb-3"><span class="mr-2">Show</span>
                    <a class="product-grid-header-show active" @click="getAllItems(false)" href="#">16</a>
                    <a class="product-grid-header-show" @click="getAllItems(true)" href="#">All</a>
                </div>
            </header>
            <div class="row" v-if="flagAll == false">
                <div class="col-sm-6 col-lg-4 col-xl-3" v-for="item_data in paginatedObject" :key="item_data.id">
                    <div class="product">
                        <div class="product-image">
                            <div v-if="item_data.status!=1" class ="ribbon" v-bind:class="{ribbonInfo: item_data.status == 3, ribbonPrimary: item_data.status == 2, ribbonDanger: item_data.status == 4}">
                                {{getStatus(item_data.status)}}
                            </div>
                            <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="White Tee" :src="item_data.img_path" sizes="(max-width: 576px) 100vw, 530px" :srcSet="`${item_data.img_path} , ${item_data.img_path}, ${item_data.img_path}`" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                            </div>
                            <div class="product-hover-overlay"><a class="product-hover-overlay-link" :href="`/card-product/${item_data.id}`"></a>
                                <div class="product-hover-overlay-buttons d-flex">
                                    <form class="" :action="`/card-product/${item_data.id}`" method="get">
                                        <button type="submit" class="btn btn-outline-dark btn-product-left cart-add"><i class="fa fa-shopping-cart"></i></button>
                                        <input type="hidden" name="_token" :value="csrf">
                                    </form>
                                        <a class="btn btn-dark btn-buy" :href="`/card-product/${item_data.id}`"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <p class="text-muted text-sm mb-1">{{item_data.category}}</p>
                            <h3 class="h6 text-uppercase mb-1"><a class="text-dark" :href="`/card-product/${item_data.id}`">{{item_data.name}}</a></h3>
                            <span class="text-muted">
                                ${{item_data.price}}
                            </span>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-3" >
                        <li class="page-item">
                            <a class="page-link" href="#" @click="pageClickBack">PREV</a>
                        </li>
                        <li class="page-item" v-for="page in pages" :key="page" :class="{'active':page === pageNumber}">
                            <a class="page-link" href="#" 
                                @click="pageClick(page)"
                                >{{page}}</a>
                        </li>     
                        <li class="page-item">                             
                            <a class="page-link" href="#" @click="pageClickUp">NEXT</a>
                        </li>
                    </ul>
                </nav>     
            </div>
            <div class="row" v-if="flagAll == true">
                <div class="col-sm-6 col-lg-4 col-xl-3" v-for="item_data in catalog_data" :key="item_data.id">
                    <div class="product">
                        <div class="product-image">
                            <div v-if="item_data.status!=1" class ="ribbon" v-bind:class="{ribbonInfo: item_data.status == 3, ribbonPrimary: item_data.status == 2, ribbonDanger: item_data.status == 4}">
                                {{getStatus(item_data.status)}}
                            </div>
                            <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                <div style="display:block;box-sizing:border-box;padding-top:150%"></div><img alt="White Tee" :src="item_data.img_path" sizes="(max-width: 576px) 100vw, 530px" :srcSet="`${item_data.img_path} , ${item_data.img_path}, ${item_data.img_path}`" decoding="async" class="img-fluid" style="visibility:inherit;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                            </div>
                            <div class="product-hover-overlay"><a class="product-hover-overlay-link" :href="`/card-product/${item_data.id}`"></a>
                                <div class="product-hover-overlay-buttons"><a class="btn btn-outline-dark btn-product-left" href="#"><i class="fa fa-shopping-cart"></i></a><a class="btn btn-dark btn-buy" :href="`/card-product/${item_data.id}`"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">View</span></a></div>
                            </div>
                        </div>
                        <div class="py-2">
                            <p class="text-muted text-sm mb-1">{{item_data.category}}</p>
                            <h3 class="h6 text-uppercase mb-1"><a class="text-dark" :href="`/card-product/${item_data.id}`">{{item_data.name}}</a></h3>
                            <span class="text-muted">
                                ${{item_data.price}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data(){
        return{
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            catalog_data: [],
            flagError: false,
            pageNumber: 1,
            objectPerPage: 16,
            count_shows: 16,
            count_shows_start: 1,
            current_lenth: 0,
            flagAll: false,
            }
    },
    computed:{
        pages(){
            return Math.ceil(this.catalog_data.length/16);
        },
        paginatedObject(){
            let from = (this.pageNumber -1) * this.objectPerPage;
            let to = from + this.objectPerPage;
            return this.catalog_data.slice(from,to);
        }
    },
    mounted(){
        this.getDataCatalog();
    },
    watch:{
        pageNumber(){
            this.current_lenth = this.paginatedObject.length;
            this.countItemShows();
        },
    },
    methods:{  
        submit : function(){
            this.$refs.form.submit();
            },    
        pageClick(page){
            this.pageNumber = page;
            this.countItemShows();
        },
        pageClickBack(){
            if(this.pageNumber == 1){
                this.pageNumber = this.pages;
                
            }
            else{
                this.pageNumber--;
                
            }
        },
        pageClickUp(){
            if(this.pageNumber == this.pages){
                this.pageNumber = 1;
                
            }
            else{
                this.pageNumber++;
                
            }
        },
        countItemShows(){
            this.count_shows = 16;
            if(this.count_shows > this.current_lenth){
                let res = this.count_shows - this.current_lenth;
                this.count_shows_start = this.count_shows*this.pageNumber - 15;
                this.count_shows = this.count_shows*this.pageNumber - res;
            }else{
                this.count_shows = this.count_shows*this.pageNumber;
                this.count_shows_start = this.count_shows - 15;
            }
        },
        async getDataCatalog() {
            try{
            const response = await axios.get('/getDataCatalog')  
                this.catalog_data = response.data;
                this.flagError = false;
                }
                catch{
                    this.flagError = true;
                }                
        },
        getStatus(a){
            switch (a) {
                case 2:
                    return "SALE" 
                case 3:
                    return "FRASH"
                case 4:
                    return "SOLD"
                }
        },
        getAllItems(a){
            this.flagAll = a;
        }
    }
}
</script>