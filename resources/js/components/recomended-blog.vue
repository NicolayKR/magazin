<template>
   <div v-if="this.flagReady" class="bg-white p-5"><strong class="text-uppercase text-muted d-inline-block mb-2 text-sm">FEATURED</strong>
        <h2 class="mb-3">{{this.blog_data[0].title}}</h2>
        <p class="text-muted">{{getLittleBitText(this.blog_data[0].text)}}</p><a class="btn btn-link text-dark p-0" :href="`/blog/${this.blog_data[0].id}`">Continue reading
            <!-- --> <i class="fa fa-long-arrow-alt-right"></i>
        </a>
    </div>
</template>
<script>
export default {
    data(){
        return{
            blog_data:[],
            flagReady: false,
        }
    },
    mounted(){
        this.getDataBlog();
        
    },
    methods:{      
        async getDataBlog() {
            try{
            const response = await axios.get(`/getDataBlog?&blog=${null}`) 
                this.blog_data = response.data;
                this.flagReady = true;
                }
                catch{
                    this.flagReady = false;
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
            if(a.length < 230){
                return a;
            }
            else{
                return a.substr(0, 230)+"...";
            }
        }
    }
}
</script>