<template>
<div v-if="!this.flagError">
    Written by <a class="text-muted font-weight-bold" :href="`/blog/${this.collection.id}`">{{this.blog_data[0].author}}</a><span class="mx-1">|</span><span class="date-format-blog">{{getMonth(this.collection.date)}}
    <!-- --> in </span><a class="font-weight-bold" href="/blog">Blogs</a>
</div>
</template>

<script>
export default {
    props: ['collection'],
    data(){
        return{
            blog_data:[],
            flagError: false,
            }
    },
    mounted(){
        this.getDataBlog();
    },
    methods:{      
        async getDataBlog() {
            try{
            const response = await axios.get(`/getDataBlog?&blog=${this.collection.id}`)  
                this.blog_data = response.data;
                this.flagError = false;
            }
                catch{
                    this.flagError = true;
                }                
        },
        getMonth(a){
            let finalDate = '';
            const date = new Date(a); 
            const month = date.toLocaleString('en', { month: 'long' });
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