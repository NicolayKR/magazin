@extends('layouts.main')

@section('title', 'Запись блога')

@section('content')
<main>
    <section class="hero">
        <div class="container">
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center no-border mb-0">
                    <li class="breadcrumb-item"><a class="" href="/">Главная</a></li>
                    <li class="breadcrumb-item"><a class="" href="/blog">Блог</a></li>
                    <li class="active breadcrumb-item" aria-current="page"><span class="">{{$collection[0]->topic}}</span></li>
                </ol>
            </nav>
            <div class="hero-content pb-5 text-center">
                <h1 class="mb-5">{{$collection[0]->title}}</h1>
                <div class="row">
                    <div class="mx-auto col-lg-10 col-xl-8">
                        <div class="py-3 mb-5 text-muted text-center font-weight-light d-flex align-items-center justify-content-center"><a class="mr-2" href="/blog/[slug]#">
                                <div style="box-sizing:border-box;display:block;max-width:100%">
                                    <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="{{$collection[0]->img_path}}">
                                </div>
                            </a>
                            <blog-card :collection="{{$collection[0]}}"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-auto col-xl-10">
                        <div style="display:block;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                            <div style="display:block;box-sizing:border-box;padding-top:66.7%"><img alt="" src="{{$collection[0]->img_path}}" decoding="async" class="img-fluid mb-5" style="visibility: inherit; position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" sizes="100vw" srcset="{{$collection[0]->img_path}}, {{$collection[0]->img_path}},{{$collection[0]->img_path}}, {{$collection[0]->img_path}}"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-auto col-lg-10 col-xl-8">
                        <p class="lead mb-5 text-left">As am hastily invited <strong>settled at limited</strong> civilly fortune me. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-10 col-xl-8">
                    <div class="text-content text-lg">
                        <div>
                            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href='#'>Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
                            <figure class='figure mb-3'><img src='{{$collection[0]->img_path}}' alt='Example blog post alt.' class='figure-img img-fluid w-100' />
                                <figcaption class='figure-caption text-sm text-muted'>Photo by Jack Tran, New York</figcaption>
                            </figure>
                            <h2>Header Level 2</h2>
                            <ol>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                <li>Aliquam tincidunt mauris eu risus.</li>
                            </ol>
                            <blockquote class='blockquote blockquote-primary'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</blockquote>
                            <h3>Header Level 3</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                <li>Aliquam tincidunt mauris eu risus.</li>
                            </ul>
                            <p><img src='{{$collection[0]->img_path}}' alt='Example blog post alt' class='img-fluid' /></p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. </p>
                            <p>Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection