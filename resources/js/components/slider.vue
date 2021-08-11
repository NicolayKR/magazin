<template>
    <div v-if="!flagError" class="slider-wrapper">
        <div class="slider_wrapper">
            <slither-slider ref="slider" :options="{
                    dots: true,
                    controls: false,
                    animationDuration: 1500,
                    animatedDots: true,
                    dotLimit: true,
                    touch: true,
                    numberOfSlides: [
                        { number: 1, min: 0 },
                        { number: 3, min: 778 },
                        { number: 5, min: 1100 },
                    ]}">
               
                    <sliderItem v-for="item_data in slider_data" :key="item_data.id" class="slider-component" :item_data="item_data"></sliderItem>
        
            </slither-slider>
        </div>
    </div>
</template>
                            
                                
                       
<script>
import "slither-slider/plugin-dist/slither-slider.css";
import sliderItem from './slider-item'
export default {
    components: {sliderItem},
    data(){
        return{
            slider_data:[],
            flagError: false,
            }
    },
    mounted(){
        this.getDataSlider();
    },
    methods:{      
        async getDataSlider() {
            try{
            const response = await axios.get('/getDataSlider')  
                this.slider_data = response.data;
                this.flagError = false;
                }
                catch{
                    this.flagError = true;
                }                
        },
    }
}
</script>

<style lang="scss" scoped>
.slider-wrapper{
    margin-left: auto;
    margin-right: auto;
    position: relative;
    overflow: hidden;
    list-style: none;
    padding: 0;
    z-index: 1;
}
.slider_wrapper{
    padding: 62px 14px 105px 14px;
}
@media ( max-width: 767px ){
    .slider_wrapper{
        margin: 0 auto;
        max-width: 377px;
    }
}
</style>