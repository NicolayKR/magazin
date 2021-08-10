@extends('layouts.main')

@section('title', 'Ошибка')

@section('content')
<main>
    <div class="mh-full-screen d-flex align-items-center dark-overlay pt-header-height">
        <div style="display:block;overflow:hidden;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;margin:0"><img alt="" src="/assets/img/13.jpg" decoding="async" class="bg-image" sizes="100vw" srcset="/assets/img/13.jpg, /assets/img/13.jpg, /assets/img/13.jpg, /assets/img/13.jpg, /assets/img/13.jpg" style="visibility: inherit; position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
        </img></div>
        <div class="text-white text-lg overlay-content py-6 py-lg-0 container">
            <h1 class="display-3 font-weight-bold mb-5">Oops, that page is not here.</h1>
            <p class="font-weight-light mb-5">Elit adipisicing aliquip irure non consequat quis ex fugiat dolor in irure pariatur eu aute. Ea tempor nisi sit in Lorem exercitation mollit ut veniam in do eu excepteur.
                <!-- -->
            </p>
            <p class="mb-6"><a href="/" class="btn btn-outline-light"><i class="fa fa-home mr-2"></i>Start from the Homepage</a></p>
            <p class="h4 text-shadow">Error 404</p>
        </div>
    </div>
</main>
@endsection