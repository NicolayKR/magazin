<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Карточка товара</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('assets/js/app.js') }}" defer></script>
        <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
        />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    </head>
    <body>
        <div id="app">
            <card-product :index_data="{{json_encode($product[0])}}"/>
        </div>      
    </body>
</html>