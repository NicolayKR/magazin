<template>
    <div v-if="flagError" class="wrapper">
        <div class="slider_wrapper">
            <slither-slider ref="slider" :options="{
                    dots: true,
                    controls: false,
                    numberOfSlides: [
                        { number: 1, min: 0 },
                        { number: 2, min: 778 },
                        { number: 3, min: 1100 },
                    ]}">
                <custom-component v-for="item_data in slider_data" :key="item_data.id">
                    <sliderItem :item_data="item_data"></sliderItem>
                </custom-component>
            </slither-slider>
        </div>
    </div>
    <div v-else>
        <b-alert show variant="danger" class=error__block>Соединение с бд не установлено!</b-alert>   
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
            flagError: true,
            }
    },
    mounted(){
        this.update();
    },
    methods:{      
        async update() {
            try{
            const response = await axios.get('/getNews')  
                this.slider_data = response.data;
                this.flagError = true;
                }
                catch{
                    this.flagError = false;
                }                
        },
    }
}
</script>

<style lang="scss" scoped>
.wrapper{
    position: relative;
}
.slider_wrapper{
    padding: 62px 14px 105px 14px;
}
.slider-slide {
  margin: 0 200px;
}
.slider-slides {
  padding-bottom: 100px;
}
.slither-slider-dot {
  width: 20px;
  height: 20px;
}
.redCube{
    display: block;
    height: 243px;
    width: 349px;
    background-color: #D51522;
    position: absolute;
    top: 48px;
    z-index: -2;
}
.fioCube{
    display: block;
    height: 243px;
    width: 349px;
    background-color: #6F61A0;;
    position: absolute;
    top: 76px;
    right: -3px;
    z-index: -2;
}
.error__block{
    margin-top: 100px;
    text-align: center;
    font-weight: 600;
}
@media ( max-width: 1199px ){
    .fioCube{
        display: none;
    }
    .redCube{
        display: none;
    }
}
@media ( max-width: 767px ){
    .slider_wrapper{
        margin: 0 auto;
        max-width: 377px;
    }
}
</style>