@extends('layouts.main')

@section('title', 'Контакты')

@section('content')
<main>
    <section class="hero">
        <div class="container">
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center no-border mb-0">
                    <li class="breadcrumb-item"><a class="" href="/">Home</a></li>
                    <li class="active breadcrumb-item" aria-current="page"><span class="">Contact</span></li>
                </ol>
            </nav>
            <div class="hero-content pb-5 text-center">
                <h1 class="mb-5">Contact</h1>
                <div class="row">
                    <div class="mx-auto col-xl-8">Are you curious about something? As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6" style="background:#fafafa">
        <div class="container">
            <div class="row">
                <div class="text-center text-md-left col-md-4"><svg class="svg-icon svg-icon-light text-primary w-3rem h-3rem mb-3">
                        <use xlink:href="/icons/orion-svg-sprite.svg#navigation-map-1"></use>
                    </svg>
                    <h4>Address</h4>
                    <p class="text-muted">13/25 New Avenue<br />New Heaven, 45Y 73J<br />England, <strong>Great Britain</strong></p>
                </div>
                <div class="text-center text-md-left col-md-4"><svg class="svg-icon svg-icon-light text-primary w-3rem h-3rem mb-3">
                        <use xlink:href="/icons/orion-svg-sprite.svg#audio-call-1"></use>
                    </svg>
                    <h4>Call center</h4>
                    <p class="text-muted">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p class="text-muted"><strong>+33 555 444 333</strong></p>
                </div>
                <div class="text-center text-md-left col-md-4"><svg class="svg-icon svg-icon-light text-primary w-3rem h-3rem mb-3">
                        <use xlink:href="/icons/orion-svg-sprite.svg#mail-1"></use>
                    </svg>
                    <h4>Electronic support</h4>
                    <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                    <ul class="list-unstyled text-muted">
                        <li>info@sell.com</li>
                        <li>support@sell.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6">
        <div class="container">
            <header class="mb-5">
                <h2 class="text-uppercase h5">Contact form</h2>
            </header>
            <div class="row">
                <div class="mb-5 mb-md-0 col-md-7">
                    <form class="">
                        <div class="controls">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group"><label for="name" class="form-label">Your firstname *</label><input type="text" name="name" id="name" placeholder="Enter your firstname" required="" class="form-control" /></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><label for="surname" class="form-label">Your firstname *</label><input type="text" name="surname" id="surname" placeholder="Enter your lasttname" required="" class="form-control" /></div>
                                </div>
                            </div>
                            <div class="form-group"><label for="email" class="form-label">Your email *</label><input type="email" name="email" id="email" placeholder="Enter your email" required="" class="form-control" /></div>
                            <div class="form-group"><label for="message" class="form-label">Your message for us *</label><textarea rows="4" name="message" id="message" placeholder="Enter your message" required="" class="form-control"></textarea></div><button type="submit" class="btn btn-outline-dark">Send message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <p class="text-muted">Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed.
                        <!-- -->
                    </p>
                    <p class="text-muted">Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                        <!-- -->
                    </p>
                    <div class="social">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d391.25582873313556!2d39.70239142097512!3d47.23282486878234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3b900f919839d%3A0x30b1ba0a13569afa!2z0JHRg9C00ZHQvdC90L7QstGB0LrQuNC5INC_0YDQvtGB0L8uLCA4MCwg0KDQvtGB0YLQvtCyLdC90LAt0JTQvtC90YMsINCg0L7RgdGC0L7QstGB0LrQsNGPINC-0LHQuy4sIDM0NDAxOA!5e0!3m2!1sru!2sru!4v1628077909930!5m2!1sru!2sru" width="100%" height="450" style="border:0; " allowfullscreen="" loading="lazy"></iframe>
    
</main>
@endsection
