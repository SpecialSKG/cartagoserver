<!-- icon list-->
<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Site Title-->
    <title>Cartago - @yield('titulo')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link href="{{ URL::asset('images/cartago/CARTAGO.png') }}" rel="icon" type="image/x-icon">

    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link href="{{ URL::asset('css/page/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/page/style.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EHHTK2BZ01"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-EHHTK2BZ01');
    </script>
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>

    <!-- Page-->
    <div class="text-center page">
        <!-- Page preloader-->
        <div class="page-loader">
            <div>
                <div class="page-loader-body">
                    <div class="loader">
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="door"></div>
                        <div class="hotel-sign">
                            <span>H</span>
                            <span>O</span>
                            <span>T</span>
                            <span>E</span>
                            <span>L</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Header-->
        <header class="page-header" style="padding-bottom: 24px">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-default-with-top-panel" data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth"
                    data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth"
                    data-lg-device-layout="rd-navbar-fullwidth" data-md-stick-up-offset="90px"
                    data-lg-stick-up-offset="150px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true"
                    data-lg-stick-up="true">
                    <div class="rd-navbar-top-panel rd-navbar-collapse">
                        <div class="rd-navbar-top-panel-inner">
                            <div class="left-side">
                                <div class="contact-info">
                                    <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                                        <div class="unit__left">
                                            <a class="text-middle" >18 Mapas Online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="center-side">
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand fullwidth-brand">
                                    <a class="brand-name" href="index.html">
                                        <img src={{ URL::asset('images/cartago/CARTAGO.png') }} alt=""
                                            width="151" height="22" />
                                    </a>
                                </div>
                            </div>
                            <div class="right-side">
                                <!-- Contact Info-->
                                <div class="contact-info">
                                    <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                                        <div class="unit__left">
                                            <a class="text-middle" >ARK Server</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                <span></span>
                            </button>
                            <!-- RD Navbar collapse toggle-->
                            <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse">
                                <span></span>
                            </button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand mobile-brand">
                                <a class="brand-name" href="index.html">
                                    <img src={{ URL::asset('images/cartago/CARTAGO.png') }} alt=""
                                        width="314" height="48" />
                                </a>
                            </div>
                        </div>
                        <div class="rd-navbar-aside-right">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-nav-scroll-holder">
                                    <ul class="rd-navbar-nav">
                                        <li
                                            class="rd-nav-item {{ Route::currentRouteNamed('Inicio') ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="Inicio">Inicio</a>
                                        </li>
                                        <li
                                            class="rd-nav-item {{ Route::currentRouteNamed('Acerca') ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="Acerca">Nosotros</a>
                                        </li>
                                        <li
                                            class="rd-nav-item {{ Route::currentRouteNamed('Servers') ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="Servers">Servers</a>
                                        </li>
                                        <li
                                            class="rd-nav-item {{ Route::currentRouteNamed('PvpDinosVip') ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="PvpDinosVip">Dinos Vip</a>
                                        </li>
                                        <li
                                            class="rd-nav-item {{ Route::currentRouteNamed('Cajas') ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="Cajas">Box</a>
                                        </li>
                                        <li
                                            class="rd-nav-item {{ Route::currentRouteNamed('Tienda') ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="Tienda">Shop</a>
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


        <!-- Page Footer-->
        <footer class="page-footer text-left text-sm-left">
            <div class="shell-wide">

                <div class="page-footer-minimal">
                    <div class="shell-wide">
                        <div class="range range-50">
                            <div class="cell-sm-6 cell-md-3 cell-lg-4 wow fadeInUp" data-wow-delay=".1s">
                                <div class="page-footer-minimal-inner">
                                    <h4>Horas de Modalidades</h4>
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="group-xs">
                                                <div>
                                                    <dl class="list-desc">
                                                        <dt>PvE Estructuras: </dt>
                                                        <dd class="text-gray-darker"><span>Semana</span></dd>
                                                        <dd class="text-gray-darker"><span>Lunes – Viernes</span></dd>
                                                        <dd class="text-gray-darker"><span>12:00 md</span></dd>
                                                    </dl>
                                                </div>
                                                <div>
                                                    <dl class="list-desc">
                                                        <dt>Full PvP: </dt>
                                                        <dd class="text-gray-darker"><span>Fin de Semana</span></dd>
                                                        <dd class="text-gray-darker"><span>Viernes - Lunes</span></dd>
                                                        <dd class="text-gray-darker"><span>12:00 md</span></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cell-sm-6 cell-md-5 cell-lg-4 wow fadeInUp" data-wow-delay=".2s">
                                <div class="page-footer-minimal-inner">
                                    <h4>Discord</h4>
                                    <ul class="list-unstyled">
                                        <li>
                                            <dl class="list-desc">
                                                <a href="https://bit.ly/CartagoWeb">
                                                    <img src="{{ URL::asset('images/categorias/discord.ico') }}"
                                                        width="60%" alt="" />
                                                </a>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cell-sm-8 cell-md-4 wow fadeInUp" data-wow-delay=".3s">
                                <div class="page-footer-minimal-inner-subscribe">
                                    <h4>Cartago Server</h4>
                                    <!-- RD Mailform-->
                                    <p class="rights">
                                        <span>&copy;&nbsp;</span><span>2022</span><span>&nbsp;</span><span
                                            class="copyright-year"></span>Cartago Server. Reservados todos los
                                        derechos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- PANEL-->
    <!-- END PANEL-->
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__cent"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript-->
    <script src="{{ URL::asset('js/page/core.min.js') }}"></script>
    <script src="{{ URL::asset('js/page/script.js') }}"></script>
    <!--Coded by Drel-->
</body>

</html>
