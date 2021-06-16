@extends('layouts.plantilla')

@section('contenido')


<main role="main">
    <article>
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url({{asset('assets/img/carousel-02.jpg')}})">
            <h1
                class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
                Gallery
            </h1>

            <!-- white full width arrow object -->
        <img class="arrow-object" src="{{asset('assets/img/arrow-object-white.svg')}}" alt="">
        </header>

        <!-- Section 1 -->
        <section class="section background-white">
            <div class="line">
                <div class="margin2x">

                    <div class="s-12 m-6 margin-bottom-30">
                    <img class="full-img" src="{{asset('assets/img/portfolio/portfolio-01.jpg')}}" alt="" />
                    </div>
                    <div class="s-12 m-6 margin-bottom-30">
                    <img class="full-img" src="{{asset('assets/img/portfolio/portfolio-02.jpg')}}" alt="" />
                    </div>
                    <div class="s-12 m-6 margin-bottom-30">
                    <img class="full-img" src="{{asset('assets/img/portfolio/portfolio-03.jpg')}}" alt="" />
                    </div>
                    <div class="s-12 m-6 margin-bottom-30">
                    <img class="full-img" src="{{asset('assets/img/portfolio/portfolio-04.jpg')}}" alt="" />
                    </div>
                    <div class="s-12 m-6 margin-bottom-30">
                    <img class="full-img" src="{{asset('assets/img/portfolio/portfolio-05.jpg')}}" alt="" />
                    </div>
                    <div class="s-12 m-6 margin-bottom-30">
                    <img class="full-img" src="{{asset('assets/img/portfolio/portfolio-06.jpg')}}" alt="" />
                    </div>

                </div>
            </div>
        </section>
    </article>

    <hr class="break">
    <!-- Section 4 -->
    <section class="section-small-padding background-white text-center">
        <div class="line">
            <div class="s-12 m-12 l-9 center margin-bottom-30">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-10">Prompta reform conceptam</h3>
                <p>Deleniti pertinacia eu est, te his soluta quaestio pericula illum facilisis.</p>
            </div>
        </div>
        <div class="line">
            <div class="s-12 m-12 l-3 center">
                <a href="contact.html"
                    class="s-12 button border-radius background-primary text-size-20 text-white">Contact Us</a>
            </div>
        </div>
    </section>
</main>
    
@endsection