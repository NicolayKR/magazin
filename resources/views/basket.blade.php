@extends('layouts.main')

@section('title', 'Корзина')

@section('content')
<main>
    <section class="hero">
        <div class="container">
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center no-border mb-0">
                    <li class="breadcrumb-item"><a class="" href="/">Главная</a></li>
                    <li class="active breadcrumb-item" aria-current="page"><span class="">Корзина</span></li>
                </ol>
            </nav>
            <div class="hero-content pb-5 text-center">
                <h1 class="mb-5">Корзина</h1>
            </div>
        </div>
    </section>
    <div class="container">
        <basket/>      
    </div>
</main>
@endsection