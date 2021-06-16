@extends('layouts.plantilla');

@section('contenido')

<main role="main">
    <article>
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url({{asset('assets/img/img-05.jpg')}})">
            <h1
                class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
                About Us
            </h1>
            <p class="animated-element text-white">Duis autem vel eum iriure dolor in hendrerit in</p>

            <!-- white full width arrow object -->
        <img class="arrow-object" src="{{asset('assets/img/arrow-object-white.svg')}}" alt="">
        </header>

        <!-- Section 1 -->
        <section class="section background-white">
            <div class="line text-center">
                <i class="icon-sli-heart text-primary text-size-40"></i>
                <h2 class="text-dark text-size-50 text-m-size-40">Who <b>We Are?</b></h2>
                <hr class="break background-primary break-small break-center margin-bottom-50">
            </div>
            <div class="line">
                <div class="margin2x">
                    <div class="m-12 l-6 margin-m-bottom-30">
                    <img src="{{asset('assets/img/img-01.jpg')}}" alt="">
                    </div>
                    <div class="m-12 l-6">
                        <h3 class="animated-element text-strong text-size-20 text-line-height-1 margin-bottom-20">What
                            We Do for You?</h3>
                        <p class="animated-element slow margin-bottom-30">Hendrerit in vulputate duis autem vel eum
                            iriure dolor in velit esse molestie consequat, illum nulla facilisis.
                            Lorem ipsum dolor sit amet, vix purto suscipiantur conclusionemque eu, purto omittam
                            accusata usu et, latine omittam expetendis no mei. Vim ei nihil exerci populo. Stet perpetua
                            ius et.
                            Vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, illum nulla
                            facilisis.
                        </p>

                        <h3 class="animated-element text-strong text-size-20 text-line-height-1 margin-bottom-20">Latine
                            omittam expetendis no mei</h3>
                        <p class="animated-element slow margin-bottom-30">Hendrerit in vulputate duis autem vel eum
                            iriure dolor in velit esse molestie consequat, illum nulla facilisis.
                            Lorem ipsum dolor sit amet, vix purto suscipiantur conclusionemque eu, purto omittam
                            accusata usu et, latine omittam expetendis no mei. Vim ei nihil exerci populo. Stet perpetua
                            ius et.
                            Vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, illum nulla
                            facilisis.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>
    
@endsection

