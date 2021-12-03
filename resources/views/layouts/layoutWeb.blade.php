<!--Variety music-->
<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
    <title>Cartago - @yield('titulo')</title>
    <meta name=" format-detection" content="telephone=no">
<meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<link href="{{ URL::asset('images/cartago/CARTAGO.png') }}" rel="icon" type="image/x-icon">
<!-- Stylesheets-->
<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700,900"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.4.95/css/materialdesignicons.min.css">


<link href="{{ URL::asset('css/web/bootstrap.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/web/fonts.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/web/style.css') }}" rel="stylesheet" id="main-styles-link">
<script src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>
</head>

<body>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
        </div>
    </div>
    <div class="page">
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap rd-navbar-absolute">
                <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px" data-xxl-stick-up-offset="20px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                    <span></span>
                                </button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a class="brand" href="index.html">
                                        <img src="{{ URL::asset('images/cartago/CARTAGO.png') }}" alt="" width="151"
                                            height="22" />
                                    </a>
                                </div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <!-- RD Navbar Nav-->
                                    {{--  --}}
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item {{ Route::currentRouteNamed('Inicio') ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="Inicio">Inicio</a>
                                        </li>
                                        <li class="rd-nav-item {{ Route::currentRouteNamed('Acerca') ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="Acerca">Nosotros</a>
                                        </li>
                                        <li class="rd-nav-item {{ Route::currentRouteNamed('Tienda') ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="Tienda">Tienda</a>
                                        </li>
                                        <li class="rd-nav-item dropdown">
                                            <a class="rd-nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Servers
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: #fff !important; background-color: #202020 !important;">
                                                <a class="dropdown-item {{ Route::currentRouteNamed('Servers') ? 'active' : '' }}" href="Servers" style="color: #fff !important;">Servers</a>
                                                <a class="dropdown-item {{ Route::currentRouteNamed('Donaciones') ? 'active' : '' }}" href="Donaciones" style="color: #fff !important;">Donaciones</a>
                                                <a class="dropdown-item {{ Route::currentRouteNamed('Cajas') ? 'active' : '' }}" href="Cajas" style="color: #fff !important;">Cajas</a>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        @yield('bodyWeb')

        <footer class="section footer-2">
            <div class="container">
                <div class="row row-40">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h5 class="text-white title">Cartago Server</h5>
                        <a class="footer-logo">
                            <img src="{{ URL::asset('images/cartago/CARTAGO.png') }}" alt="" width="40%" />
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h5 class="text-white title">Contacto</h5>
                        <ul class="contact-box">
                            <!-- <li>
                                <div class="unit unit-horizontal unit-spacing-xxs">
                                    <div class="unit-left">
                                        <span class="icon mdi mdi-map-marker accent-icon"></span>
                                    </div>
                                    <div class="unit-body">
                                        <a href="#">2130 Fulton Street, <br class="veil reveal-lg-inline">San Diego, CA 94117-1080 USA</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xxs">
                                    <div class="unit-left">
                                        <span class="icon mdi mdi-phone accent-icon"></span>
                                    </div>
                                    <div class="unit-body">
                                        <ul class="list-phones">
                                            <li><a href="tel:#">1-800-1234-567</a></li>
                                            <li><a href="tel:#">1-800-1234-567</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xxs">
                                    <div class="unit-left">
                                        <span class="icon mdi mdi-email-outline accent-icon"></span>
                                    </div>
                                    <div class="unit-body"><a href="mailto:#">info@demolink.org</a></div>
                                </div>
                            </li>-->
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xxs">
                                    <div class="unit-left">
                                        <!-- <span class="icon mdi mdi-discord accent-icon"></span> -->
                                        <!-- <h5 class="text-white">Discord</h5> -->
                                    </div>
                                    <div class="unit-body">
                                        <a href="https://bit.ly/CartagoWeb">
                                            <img src="{{ URL::asset('images/categorias/discord.ico') }}" width="80%"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- <div class="group-md group-middle social-items">
                            <a class="icon icon-md novi-icon mdi mdi-facebook" href="#"></a>
                            <a class="icon icon-md novi-icon mdi mdi-twitter" href="#"></a>
                            <a class="icon icon-md novi-icon mdi mdi-instagram" href="#"></a>
                            <a class="icon icon-md novi-icon mdi mdi-facebook-messenger" href="#"></a>
                            <a class="icon icon-md novi-icon mdi mdi-linkedin" href="#"></a>
                            <a class="icon icon-md novi-icon mdi mdi-snapchat" href="#"></a>
                        </div> -->
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h5 class="title">Galeria</h5>
                        <ul class="instafeed instagram-gallery" data-lightgallery="group">
                            <li>
                                <a class="instagram-item" data-lightgallery="item"
                                    href="{{ URL::asset('images/categorias/ark_gallery1.jpg') }}">
                                    <img src="{{ URL::asset('images/categorias/ark_gallery1.jpg') }}" alt=""
                                        width="72" height="72" />
                                </a>
                            </li>
                            <li>
                                <a class="instagram-item" data-lightgallery="item"
                                    href="{{ URL::asset('images/categorias/ark_gallery2.jpg') }}">
                                    <img src="{{ URL::asset('images/categorias/ark_gallery2.jpg') }}" alt=""
                                        width="72" height="72" />
                                </a>
                            </li>
                            <li>
                                <a class="instagram-item" data-lightgallery="item"
                                    href="{{ URL::asset('images/categorias/ark_gallery1.jpg') }}">
                                    <img src="{{ URL::asset('images/categorias/ark_gallery1.jpg') }}" alt=""
                                        width="72" height="72" />
                                </a>
                            </li>
                            <li>
                                <a class="instagram-item" data-lightgallery="item"
                                    href="{{ URL::asset('images/categorias/ark_gallery2.jpg') }}">
                                    <img src="{{ URL::asset('images/categorias/ark_gallery2.jpg') }}" alt=""
                                        width="72" height="72" />
                                </a>
                            </li>
                            <li>
                                <a class="instagram-item" data-lightgallery="item"
                                    href="{{ URL::asset('images/categorias/ark_gallery1.jpg') }}">
                                    <img src="{{ URL::asset('images/categorias/ark_gallery1.jpg') }}" alt=""
                                        width="72" height="72" />
                                </a>
                            </li>
                            <li>
                                <a class="instagram-item" data-lightgallery="item"
                                    href="{{ URL::asset('images/categorias/ark_gallery2.jpg') }}">
                                    <img src="{{ URL::asset('images/categorias/ark_gallery2.jpg') }}" alt=""
                                        width="72" height="72" />
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- RD Mailform-->
                    <!-- <div class="col-md-6 col-lg-3">
                        <h5 class="text-white title">Newsletter</h5>
                        <p>Keep up with our always upcoming news and updates. Enter your e-mail and subscribe to our newsletter.</p>
                        <form class="rd-form form-sm rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="form-wrap">
                                <input class="form-input" id="newsletter-email" type="email" name="email" data-constraints="@Email @Required">
                                <label class="form-label" for="newsletter-email">Enter your e-mail</label>
                            </div>
                            <button class="button button-primary" type="submit">Subscribe</button>
                        </form>
                    </div> -->
                </div>
                <!-- Rights-->
                <p class="rights">
                    <span>&copy;&nbsp;</span>
                    <span class="copyright-year"></span>
                    <span>Cartago</span>. Reservados todos los derechos.
                    <!-- Design by
                    <a href="https://www.templatemonster.com">TemplateMonster</a> -->
                </p>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->

    <script src="{{ URL::asset('js/web/core.min.js') }}"></script>
    <script src="{{ URL::asset('js/web/script.js') }}"></script>



</body>

</html>
