<template>
    <div class="row" v-if="!flagError">
        <div class="col-6 col-lg-4"  v-for="item_data in paginatedObject" :key="item_data.id">
            <div class="mb-30px"><a href="/blog/pellentesque-habitant-morbi"><img class="img-fluid" :src="item_data.img_path" alt="Pellentesque habitant morbi" /></a>
                <div class="mt-3"><small class="text-uppercase text-muted">{{item_data.topic}}</small>
                    <h5 class="my-2"><a class="text-dark" href="/blog/pellentesque-habitant-morbi">{{item_data.title}}</a></h5>
                    <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>{{getMonth(item_data.date)}}</p>
                    <p class="my-2 text-muted">{{getLittleBitText(item_data.text)}}</p><a class="btn btn-link text-gray-700 pl-0" href="/blog/pellentesque-habitant-morbi">Read more <i class="fa fa-long-arrow-alt-right ml-2"></i></a>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-3" >
                <li class="page-item">
                    <a class="page-link" href="#" @click="pageClickBack">Назад</a>
                </li>
                <li class="page-item" v-for="page in pages" :key="page" :class="{'active':page === pageNumber}">
                    <a class="page-link" href="#" 
                        @click="pageClick(page)"
                        >{{page}}</a>
                </li>     
                <li class="page-item">                             
                    <a class="page-link" href="#" @click="pageClickUp">Вперед</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>

export default {
    data(){
        return{
            blogs_data:[],
            flagError: false,
            pageNumber: 1,
            objectPerPage: 6,
            }
    },
    computed:{
        pages(){
            return Math.ceil(this.blogs_data.length/6);
        },
        paginatedObject(){
            let from = (this.pageNumber -1) * this.objectPerPage;
            let to = from + this.objectPerPage;
            return this.blogs_data.slice(from,to);
        }
    },
    mounted(){
        this.getDataBlogs();
    },
    methods:{      
        pageClick(page){
            this.pageNumber = page;
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
        async getDataBlogs() {
            try{
            const response = await axios.get('/getDataBlogs')  
                this.blogs_data = response.data;
                this.flagError = false;
                }
                catch{
                    this.flagError = true;
                }                
        },
        getMonth(a){
            let finalDate = '';
            const date = new Date(a); 
            const month = date.toLocaleString('ru', { month: 'long' });
            const year = String(date.getFullYear());
            const day = String(date.getDate());
            return month.charAt(0).toUpperCase() + month.slice(1)+" "+day+", "+year;
        },
        getLittleBitText(a){
            if(a.length < 99){
                return a;
            }
            else{
                return a.substr(0, 99)+"...";
            }
        }
    }
}
</script>

