<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Virtua - New Amazing HTML5 Template</title>
<link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/responsee.css')}}">
<link rel="stylesheet" href="{{asset('assets/owl-carousel/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/owl-carousel/owl.theme.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">
    <!-- CUSTOM STYLE -->
<link rel="stylesheet" href="{{asset('assets/css/template-style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext"
        rel="stylesheet">
<script type="text/javascript" src="{{asset('assets/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
</head>


<body class="size-1280">

    <!-- PREMIUM FEATURES BUTTON -->
    <a target="_blank" class="hide-s" href="../template/virtua-premium-responsive-business-template/"
style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="{{asset('assets/img/premium-features.png')}}" alt=""></a>

    <!-- HEADER -->
    <header role="banner" class="position-absolute">
        <!-- Top Navigation -->
        <nav class="background-transparent background-primary-dott full-width sticky">
            <div class="top-nav">
                <!-- mobile version logo -->
                <div class="logo hide-l hide-xl hide-xxl">
                    <a href="index.html" class="logo">
                        <!-- Logo White Version -->
                    <img class="logo-white" src="{{asset('assets/img/logo.svg')}}" alt="">
                        <!-- Logo Dark Version -->
                    <img class="logo-dark" src="{{asset('assets/img/logo-dark.svg')}}" alt="">
                    </a>
                </div>
                <p class="nav-text"></p>

                <!-- left menu items -->
                <div class="top-nav left-menu">
                    <ul class="right top-ul chevron">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('servicio')}}">Our Services</a></li>
                    </ul>
                </div>

                <!-- logo -->
                <ul class="logo-menu">
                    <a href="index.html" class="logo">
                        <!-- Logo White Version -->
                    <img class="logo-white" src="{{asset('assets/img/logo.svg')}}" alt="">
                        <!-- Logo Dark Version -->
                    <img class="logo-dark" src="{{asset('assets/img/logo-dark.svg')}}" alt="">
                    </a>
                </ul>

                <!-- right menu items -->
                <div class="top-nav right-menu">
                    <ul class="top-ul chevron">
                        <li>
                            <a>Products</a>
                            <ul>
                                <li><a>Product 1</a></li>
                                <li><a>Product 2</a></li>
                            </ul>
                        </li>
                    <li><a href="{{route('galeria')}}">Gallery</a></li>
                    <li><a href="{{route('contacto')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

     {{-- EMPIEZA EL COTENIDO --}}

     @yield('contenido')

     {{-- TERMINAR EL CONTENIDO --}}


    <!-- FOOTER -->
    <footer>
        <!-- Social -->
        <div class="background-primary padding text-center">
            <a href="/"><i class="icon-facebook_circle text-size-25 text-dark"></i></a>
            <a href="/"><i class="icon-twitter_circle text-size-25 text-dark"></i></a>
            <a href="/"><i class="icon-google_plus_circle text-size-25 text-dark"></i></a>
            <a href="/"><i class="icon-instagram_circle text-size-25 text-dark"></i></a>
            <a href="/"><i class="icon-linked_in_circle text-size-25 text-dark"></i></a>
        </div>
        <!-- Main Footer -->
        <section class="section background-dark">
            <div class="line">
                <div class="margin2x">
                    <div class="s-12 m-6 l-3 xl-5">
                        <h4 class="text-white text-strong">Our Mission</h4>
                        <p>
                            <b class="text-size-20">Veri fastidii consectetuer</b> ius in, eum alii dicunt omnium eu.
                            Wisi nostrud equidem ut usu. <b class="text-size-20">Deleniti pertinacia eu est</b>, te his
                            soluta quaestio pericula.
                        </p>
                    </div>
                    <div class="s-12 m-6 l-3 xl-2">
                        <h4 class="text-white text-strong margin-m-top-30">Useful Links</h4>
                        <a class="text-primary-hover" href="page.html">FAQ</a><br>
                        <a class="text-primary-hover" href="contact.html">Contact Us</a><br>
                        <a class="text-primary-hover" href="blog.html">Blog</a>
                    </div>
                    <div class="s-12 m-6 l-3 xl-2">
                        <h4 class="text-white text-strong margin-m-top-30">Term of Use</h4>
                        <a class="text-primary-hover" href="page.html">Terms and Conditions</a><br>
                        <a class="text-primary-hover" href="page.html">Refund Policy</a><br>
                        <a class="text-primary-hover" href="page.html">Disclaimer</a>
                    </div>
                    <div class="s-12 m-6 l-3 xl-3">
                        <h4 class="text-white text-strong margin-m-top-30">Contact Us</h4>
                        <p><i class="icon-sli-screen-smartphone text-primary"></i> 0800 4521 800 50</p>
                        <a class="text-primary-hover" href="mailto:contact@sampledomain.com"><i
                                class="icon-sli-mouse text-primary"></i> contact@sampledomain.com</a><br>
                        <a class="text-primary-hover" href="mailto:office@sampledomain.com"><i
                                class="icon-sli-mouse text-primary"></i> office@sampledomain.com</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="background-dark">
            <div class="line">
                <hr class="break margin-top-bottom-0" style="border-color: #777;">
            </div>
        </div>
        <!-- Bottom Footer -->
        <section class="padding-2x background-dark full-width">
            <div class="line">
                <div class="s-12 l-6">
                    <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
                    <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your
                        website.</p>
                </div>
                <div class="s-12 l-6">
                    <a class="right text-size-12 text-primary-hover" href="http://www.myresponsee.com"
                        title="Responsee - lightweight responsive framework">Design and coding<br> by Responsee Team</a>
                </div>
            </div>
        </section>
    </footer>
    <!--  FIN DEL FOOTER -->
    
<script type="text/javascript" src="{{asset('assets/js/responsee.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/template-scripts.js')}}"></script>
</body>

</html>