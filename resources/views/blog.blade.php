@extends('layouts.main')

@section('title', 'Блог')

@section('content')
<main>
    <section class="position-relative py-6 mb-30px">
        <div style="display:block;overflow:hidden;position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;margin:0"><img alt="Fashion, purpose &amp; freedom" src="assets/img/14.jpg" decoding="async" class="bg-image" sizes="100vw" srcset="assets/img/14.jpg, assets/img/14.jpg,assets/img/14.jpg, assets/img/14.jpg, assets/img/14.jpg" style="visibility: inherit; position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bg-white p-5"><strong class="text-uppercase text-muted d-inline-block mb-2 text-sm">Featured</strong>
                        <h2 class="mb-3">Fashion, purpose &amp; freedom</h2>
                        <p class="text-muted">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity</p><a class="btn btn-link text-dark p-0" href="/blog/fashion-purpose-freedom">Continue reading
                            <!-- --> <i class="fa fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
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