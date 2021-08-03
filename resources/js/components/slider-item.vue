<template>
    <div class="item_wrapp">
        <div class="item_date">{{getDate(item_data.date_news)}}</div>
        <div class="item_title">{{item_data.description_news}}</div>
        <button class="item_button"><a>Подробнее</a></button>
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
        getDate(a){
            const dateFormat = require('dateformat');
            const res = dateFormat(new Date(a), "dd.mm.yy")
            return res;
        }
    }
}
</script>

<style lang="scss" scoped>
.item{
    &_wrapp{
        max-width: 349px;
        min-height: 243px;
        border: 1px solid #D8D8D8;
        box-sizing: border-box;
        background-color: white;
        margin-left: 32px;
        z-index: 1;
        &:nth-child(1){
            margin-left: 0px;
            }
    }
    &_date{
        font-weight: 400;
        font-size: 14px;
        line-height: 16px;
        color: #636363;
        margin-top: 34px;
        margin-left: 27px;
    }
    &_title{
        font-weight: 900;
        font-size: 18px;
        line-height: 24px;
        color: #2B2B2B;
        margin-top: 11px;
        margin-left: 27px;
    }
    &_button{
        background-color: white;
        border: 1px solid #D51522;
        box-sizing: border-box;
        filter: drop-shadow(0px 2px 8px rgba(65, 65, 65, 0.25));
        margin-top: 75px;
        margin-left: 27px;
        height: 44px;
        width: 156px;
        a{
            color: #D51522;
            font-size: 14px;
            line-height: 16px;
            font-weight: 500;
            &:hover{
                color:red;
                }
            }
        }
    }
@media ( max-width: 990px ){
    .item_wrapp{
        max-width: 316px;
        margin: 0 auto;
        
    }
}
@media ( max-width: 375px ){
    .item_wrapp{
        max-width: 300px;
        margin: 0 auto;
    }
}
</style>