@extends('layouts.main')

@section('title', 'Главная страница')

@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div style="background-image:url(assets/img/2.jpg);background-color:#d2cecb" class="dark-overlay split-screen-column align-items-center align-items-lg-end col-lg-6">
                <div class="overlay-content py-6 mt-6 px-lg-5 mt-lg-0 mb-lg-5">
                    <h1 class="display-3 mb-4 text-white font-weight-bold split-screen-heading letter-spacing-1">Мужчинам</h1>
                    <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><a class="btn btn-light mx-1 mb-1" href="/catalog">Посмотреть коллекцию</a><a class="btn btn-outline-light mx-1 mb-1" href="/category">Просмотр</a></p>
                </div>
            </div>
    
            <div style="background-image:url(/assets/img/3.jpg);background-color:#e5b6b4" class="split-screen-column align-items-center align-items-lg-end col-lg-6">
                <div class="py-6 px-lg-5 mb-lg-5">
                    <h1 class="display-3 mb-4 text-white font-weight-bold split-screen-heading letter-spacing-1">Женщинам</h1>
                    <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><a class="btn btn-light mx-1 mb-1" href="/catalog">Посмотреть коллекцию</a><a class="btn btn-outline-light mx-1 mb-1" href="/category-full">Просмотр</a></p>
                </div>
            </div>
        </div>
    </div>
    @if(isset($status))
        <script type="text/javascript">
            alert("{{$status}}");
        </script>
    @endif
    <section class="pt-6 pb-5">
        <div class="container">
            <div class="row">
                <div class="mx-auto text-center mb-5 col-xl-8">
                    <h2 class="text-uppercase">Новинки</h2>
                    <p class="lead text-muted">Новая летняя коллекция обрадует каждого!</p>
                </div>
            </div>
            <new-items/>
        </div>
    </section>
    <section class="py-6 bg-gray-100">
        <div class="container">
            <div class="row">
                <div class="mx-auto text-center mb-5 col-xl-8">
                    <h2>Летняя коллекция 2021</h2>
                    <p class="lead text-muted">Выбери одежду подходящую именно тебе. Также у нас огромный выбор аксессуаров.</p>
                </div>
            </div>
            <div class="row">
                <div class="d-flex align-items-md-stretch mb-30px mb-md-0 col-md-6">
                    <div class="d-flex align-items-center text-white dark-overlay w-100 text-center py-6 py-md-0" style="background:center center url(/assets/img/man.jpg) no-repeat;background-size:cover"><a class="tile-link" href="/catalog"></a>
                        <div class="card-img-overlay w-100 overlay-content">
                            <h2 class="display-3 font-weight-bold text-uppercase mb-0">Мужчинам</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0 text-white text-center mb-30px dark-overlay">
                        <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                            <div style="box-sizing:border-box;display:block;max-width:100%"><img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="/assets/img/woman.jpg" /></div><img alt="Ladies" src="/assets/img/woman.jpg" decoding="async" class="card-img" style="visibility:hidden;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                        </div><a class="tile-link" href="/catalog"></a>
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="text-center w-100 overlay-content">
                                <h2 class="display-4 font-weight-bold text-uppercase text-center mb-0">Женщинам</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 text-white text-center  dark-overlay">
                        <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                            <div style="box-sizing:border-box;display:block;max-width:100%"><img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="/assets/img/accses.jpg" /></div><img alt="Accessories" src="/assets/img/accses.jpg"  decoding="async" class="card-img" style="visibility:hidden;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%" />
                        </div><a class="tile-link" href="/catalog"></a>
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="text-center w-100 overlay-content">
                                <h2 class="display-4 font-weight-bold text-uppercase text-center mb-0">Аксессуары</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-6 pb-5">
        <div class="container">
            <div class="row">
                <div class="mx-auto text-center mb-5 col-xl-8">
                    <h2 class="text-uppercase">Популярное</h2>
                    <p class="lead text-muted">Самые популярные вещи в этом месяце.</p>
                </div>
                <slider-component/>
            </div>
        </div>
    </section>
</main>
@endsection