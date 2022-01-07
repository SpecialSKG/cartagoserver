@extends('layouts.layoutWeb')
@section('titulo', 'Servers')
@section('bodyWeb')

    <!-- Breadcrumbs -->
    <section class="section section-bredcrumbs" style="background: url(images/cartago/w_3.png) no-repeat center / cover">
        <div class="container context-dark breadcrumb-wrapper text-left">
            <h1>Servers</h1>
            <ul class="breadcrumbs-custom">
                <li><a href="/Inicio">Inicio</a></li>
                <li class="active">Servers</li>
            </ul>
        </div>
    </section>

    <!-- Nombre-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-6 col-xl-6">
                    <h2>Nombre de Servidor:</h2>
                    <!-- Quote Default-->
                    <blockquote class="quote quote-default">
                        <div class="quote-icon mdi mdi-format-quote accent-quote"></div>
                        <div class="quote-body">
                            <q class="heading-6">
                                ARKCartago x10/x20
                            </q>
                        </div>
                    </blockquote>
                </div>

                <div class="col-lg-6 col-xl-6">
                    <h2>Invitacion Discord</h2>
                    <div class="row row-offset-2">
                        <div class="col-lg-6">
                            <figure class="figure-light">
                                <img class="img-centered" src="{{ URL::asset('images/servers/invitacion.jpg') }}" alt=""
                                    width="300" height="200" />
                        </div>
                        <div class="col-lg-6">
                            <figure class="figure-light">
                                <figcaption>
                                    <p>Invitacion Publica</p>
                                </figcaption>
                            </figure>
                            <p>
                                Puedes ocupar esta invitacion publica.
                            </p>
                            <iframe src="https://discord.com/widget?id=676923847240318996&theme=dark" width="350"
                                height="500" allowtransparency="true" frameborder="0"
                                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
                            </iframe>
                            <a class="link-hover" href="https://bit.ly/CartagoWeb">https://bit.ly/CartagoWeb</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Variety of Music Genres-->
    <section class="section section-lg">
        <div class="container">
            <div class="block-lg text-center">
                <h2>Articulos</h2>
                <p>Ofrecemos a nuestros jugadores una amplia variedad de articulos.</p>
            </div>
            <div class="row row-30 justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media">
                                <img src="{{ URL::asset('images/categorias/shopping_list_icon_192691.ico') }}" alt=""
                                    width="60" />
                            </div>
                            <figcaption><span>Articulos</span>
                                <p>Una variedad de artículos desde armaduras, herramientas, armas, comida.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media">
                                <img src="{{ URL::asset('images/categorias/cash_register_icon_192650.ico') }}" alt=""
                                    width="60" />
                            </div>
                            <figcaption><span>Venta</span>
                                <p>Una variedad de objetos que puedes recolectar y venderlos para recibir puntos extras.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media">
                                <img src="{{ URL::asset('images/categorias/Alpha_Aberrant_Ascension_Implant.png') }}"
                                    alt="" width="60" />
                            </div>
                            <figcaption><span>Ascension</span>
                                <p>Las diferentes ascensiones de todos los mapas, estas únicamente otorgan nivel de jugador.
                                </p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media">
                                <img src="{{ URL::asset('images/categorias/Artifact_of_the_Strong.png') }}" alt=""
                                    width="60" />
                            </div>
                            <figcaption><span>Artefactos</span>
                                <p>Al vivir tribus en cueva de artefactos, puedes adquirirlos en nuestra tienda.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media">
                                <img src="{{ URL::asset('images/categorias/thylacoleo.png') }}" alt="" width="80" />
                            </div>
                            <figcaption><span>Dinos</span>
                                <p>Toda la diversidad de dinos principales del juego, con diferentes niveles entre algunas
                                    especies, genero aleatorio.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media">
                                <img src="{{ URL::asset('images/categorias/Tek_Trike.png') }}" alt="" width="80" />
                            </div>
                            <figcaption><span>Dinos Tek</span>
                                <p>Todos los dinos versión Tek.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media"
                                style="display: inline-block !important; flex-direction: row !important;">
                                <img src="{{ URL::asset('images/categorias/shadowmane.png') }}" alt="" width="80" />
                                <img src="{{ URL::asset('images/categorias/magmasaur.png') }}" alt="" width="100" />
                            </div>
                            <figcaption><span>Dinos 362</span>
                                <p>Listado de dinos de mayor nivel, que puedes adquirir con una donación para obtener una
                                    cantidad de puntos para comprarlo ò ahorrar puntos para comprarlo.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media">
                                <img src="{{ URL::asset('images/categorias/stryder.png') }}" alt="" width="80" />
                            </div>
                            <figcaption><span>Dinos Gen2</span>
                                <p>Todos los dinos del mapa Genesis 2.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media">
                                <img src="{{ URL::asset('images/categorias/Dossier_Dragon.png') }}" alt="" width="110" />
                            </div>
                            <figcaption><span>Engramas</span>
                                <p>Los engramas de todos los boss de Ark, en sus diferentes niveles de dificultad.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media">
                                <img src="{{ URL::asset('images/categorias/Rex_Saddle.png') }}" alt="" width="80" />
                            </div>
                            <figcaption><span>Monturas</span>
                                <p>Monturas para un listado exclusivo de dinosaurios, en calidad alta dándote sus
                                    estadísticas de forma aleatoria.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeInLeft">
                    <a class="variety-box-wrapper" href="/Tienda">
                        <figure class="variety-box">
                            <div class="variety-media">
                                <img src="{{ URL::asset('images/categorias/box_parcel_icon_192643.ico') }}" alt=""
                                    width="70" />
                            </div>
                            <figcaption><span>Cajas</span>
                                <p>Nuestro listado de cajas para los jugadores y que puedan observar el contenido diferente
                                    para cada una de ellas. </p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Steam -->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-xl-6">
                    <h2>Acceso Steam:</h2>
                    <p>
                        Para acceder debes estar en el menú del juego, sin entrar a la lista de server.
                    </p>
                    <ol class="list-ordered">
                        <li>
                            The Island x10/x20 <a class="link-hover"
                                href="steam://connect/203.17.245.246:27055">steam://connect/203.17.245.246:27055</a>
                        </li>
                        <li>
                            Ragnarok x10/x20 <a class="link-hover"
                                href="steam://connect/203.17.245.246:27043">steam://connect/203.17.245.246:27043</a>
                        </li>
                        <li>
                            Cristal Isles x10/x20 <a class="link-hover"
                                href="steam://connect/203.17.245.246:27071">steam://connect/203.17.245.246:27071</a>
                        </li>
                        <li>
                            Extinction x10/x20 <a class="link-hover"
                                href="steam://connect/203.17.245.246:27075">steam://connect/203.17.245.246:27075</a>
                        </li>
                        <li>
                            Genesis2 x10/x20 <a class="link-hover"
                                href="steam://connect/203.17.245.246:27047">steam://connect/203.17.245.246:27047</a>
                        </li>
                    </ol>
                </div>
                <div class="col-xl-6">
                    <h2>Acceso EPIC GAMES:</h2>
                    <p>
                        ARK de Epic Games no tiene actualmente un método adecuado para unirse a un servidor directamente a
                        través de IP directa. Esta no es una limitación de nuestra parte, aunque este metodo es oficial,
                        lamentablemente no funciona siempre.
                    </p>
                    <p>
                        Paso 1: únete a una partida de ARK para un jugador.
                    </p>
                    <p>
                        Paso 2: haga clic en la pestaña para abrir la consola.
                    </p>
                    <p>
                        Paso 3: Escriba: open IP: PORT y presione enter.
                    </p>
                    <ol class="list-ordered">
                        <li>The Island x10/x20 || </li>
                        <li>Ragnarok x10/x20 || </li>
                        <li>Cristal Isles x10/x20 || </li>
                        <li>Extinction x10/x20 || </li>
                        <li>Genesis2 x10/x20 || </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Base typography -->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <ul class="list-xl">
                        <li>
                            <p>Todos los mapas activos tienen cluster entre si.</p>
                            <p>
                                Se abrirán mas mapas con el tiempo, la intención es conseguir más jugadores para que crezca
                                nuestra comunidad y alcanzar un clúster completo de todos los mapas.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <h2>Rates</h2>
                    <ul class="instafeed instagram-gallery" data-lightgallery="group">
                        <li>
                            <a class="instagram-item" data-lightgallery="item"
                                href="{{ URL::asset('images/servers/RatesSpanish.png') }}">
                                <img src="{{ URL::asset('images/servers/RatesSpanish.png') }}" alt="" width="150"
                                    height="72" />
                            </a>
                        </li>
                        <li>
                            <a class="instagram-item" data-lightgallery="item"
                                href="{{ URL::asset('images/servers/RatesEnglish.png') }}">
                                <img src="{{ URL::asset('images/servers/RatesEnglish.png') }}" alt="" width="150"
                                    height="72" />
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-xl-6">
                    <h2>Reglas</h2>
                    <ul class="instafeed instagram-gallery" data-lightgallery="group">
                        <li>
                            <a class="instagram-item" data-lightgallery="item"
                                href="{{ URL::asset('images/servers/RulesSpanish.png') }}">
                                <img src="{{ URL::asset('images/servers/RulesSpanish.png') }}" alt="" width="150"
                                    height="72" />
                            </a>
                        </li>
                        <li>
                            <a class="instagram-item" data-lightgallery="item"
                                href="{{ URL::asset('images/servers/RulesEnglish.png') }}">
                                <img src="{{ URL::asset('images/servers/RulesEnglish.png') }}" alt="" width="150"
                                    height="72" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
