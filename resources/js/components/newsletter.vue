<template>
    <div class="input-group mb-3">
        <input type="email" class="form-control bg-transparent border-secondary border-right-0" placeholder="Your Email Address" aria-label="Your Email Address" v-model="mail"/>
        <div class="input-group-append">
            <button class="btn btn-outline-secondary border-left-0" type="button" @click="getMail()"><i class="fa fa-paper-plane text-lg text-dark"></i></button>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            mail: '',    
        }
    },
    methods:{      
        async getMail(){
            try{
                const response = await axios.get(`/getMail?&mail=${this.mail}`);
                if(response.data == 1){
                    this.mail = 'Successfully!';
                }
            }
            catch{
                
            }     
        },
    }
}
</script>