@extends('layouts.main')

@section('title', 'Блог')

@section('content')
<main>
    <section class="position-relative py-6 mb-30px">
        <div style="display:block;overflow:hidden;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;margin:0"><img alt="Fashion, purpose &amp; freedom" src="assets/img/14.jpg" decoding="async" class="bg-image" sizes="100vw" srcset="assets/img/14.jpg, assets/img/14.jpg,assets/img/14.jpg, assets/img/14.jpg, assets/img/14.jpg" style="visibility: inherit; position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <recomended-blog/>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <blog-list/>
        </div>
    </section>
</main>
@endsection