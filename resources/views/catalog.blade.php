@extends('layouts.main')

@section('title', 'Каталог')

@section('content')
<main>
    <section class="hero">
        <div class="container">
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center no-border mb-0">
                    <li class="breadcrumb-item"><a class="" href="/">Home</a></li>
                    <li class="active breadcrumb-item" aria-current="page"><span class="">Jackets and tops</span></li>
                </ol>
            </nav>
            <div class="hero-content pb-5 text-center">
                <h1 class="mb-5">Jackets and tops</h1>
                <div class="row">
                    <div class="mx-auto col-xl-8">Id commodo velit ullamco dolore non eiusmod deserunt.</div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <catalog-list/> 
    </div>
</main>
@endsection