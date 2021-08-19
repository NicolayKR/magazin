@extends('layouts.main')

@section('title', 'Catalog')

@section('content')
<main>
    <section class="hero">
        <div class="container">
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center no-border mb-0">
                    <li class="breadcrumb-item"><a class="" href="/">Home</a></li>
                    <li class="active breadcrumb-item" aria-current="page"><span class="">Catalog</span></li>
                </ol>
            </nav>
            <div class="hero-content pb-5 text-center">
                <h1 class="mb-5">Products</h1>
            </div>
        </div>
    </section>
    <div class="container">
        <catalog-list/> 
    </div>
</main>
@endsection