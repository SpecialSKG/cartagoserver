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
            <div class="row row-50 text-center">
                <div class="col-lg-6 col-xl-6">
                    <h2>Nombre de Servidor:</h2>
                    <!-- Quote Default-->
                    <blockquote class="quote quote-default">
                        <div class="quote-icon mdi mdi-format-quote accent-quote"></div>
                        <div class="quote-body">
                            <q class="heading-4">
                                [ES-EN][CARTAGO][X10X20]
                            </q>
                        </div>

                        <div class="quote-body">
                            <q class="heading-4">
                                ---------------------------------
                            </q>
                        </div>

                        <div class="quote-body">
                            <q class="heading-4">
                                Todos los mapas activos tienen cluster entre si.
                            </q>
                        </div>
                    </blockquote>

                    <br><br>

                    <h2>Inicio de la Temporada</h2>
                    <blockquote class="quote quote-default">
                        <div class="quote-icon mdi mdi-format-quote accent-quote"></div>
                        <div class="quote-body">
                            <q class="heading-4">
                                19 de Noviembre 2021
                            </q>
                        </div>

                        <div class="quote-body">
                            <q class="heading-4">
                                ---------------------------------
                            </q>
                        </div>

                        <div class="quote-body">
                            <q class="heading-4">
                                Next Wipe Enero 2022
                            </q>
                        </div>

                    </blockquote>
                </div>

                <div class="col-lg-6 col-xl-6">

                    <div class="row text-center">
                        <div class="col-lg-12">
                            <h2>Invitacion Discord</h2>
                            <p>
                                Invitacion publica.
                            </p>
                            <a class="link-hover" target="_blank" href="https://bit.ly/CartagoWeb">https://bit.ly/CartagoWeb</a>
                        </div>
                        <div class="col-lg-12">
                            <iframe src="https://discord.com/widget?id=676923847240318996&theme=dark" width="350"
                                height="500" allowtransparency="true" frameborder="0"
                                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seccion Articulos-->
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
                                href="steam://connect/cartagoserver.ddns.net:27021">steam://connect/cartagoserver.ddns.net:27021</a>
                        </li>
                        <li>
                            Lost island x10/x20 <a class="link-hover"
                                href="steam://connect/cartagoserver.ddns.net:27038">steam://connect/cartagoserver.ddns.net:27038</a>
                        </li>
                        <li>
                            Ragnarok x10/x20 <a class="link-hover"
                                href="steam://connect/cartagoserver.ddns.net:27015">steam://connect/cartagoserver.ddns.net:27015</a>
                        </li>
                        <li>
                            Valguero x10/x20 <a class="link-hover"
                                href="steam://connect/cartagoserver.ddns.net:27018">steam://connect/cartagoserver.ddns.net:27018</a>
                        </li>
                        <li>
                            Cristal Isles x10/x20 <a class="link-hover"
                                href="steam://connect/cartagoserver.ddns.net:27016">steam://connect/cartagoserver.ddns.net:27016</a>
                        </li>
                        <li>
                            The Center x10/x20 <a class="link-hover"
                                href="steam://connect/cartagoserver.ddns.net:27022">steam://connect/cartagoserver.ddns.net:27022</a>
                        </li>
                        <li>
                            Scorched Earth x10/x20 <a class="link-hover"
                                href="steam://connect/cartagoserver.ddns.net:27019">steam://connect/cartagoserver.ddns.net:27019</a>
                        </li>
                        <li>
                            Aberration x10/x20 <a class="link-hover"
                                href="steam://connect/cartagoserver.ddns.net:27024">steam://connect/cartagoserver.ddns.net:27024</a>
                        </li>
                        <li>
                            Extinction x10/x20 <a class="link-hover"
                                href="steam://connect/cartagoserver.ddns.net:27023">steam://connect/cartagoserver.ddns.net:27023</a>
                        </li>
                        <li>
                            Genesis 1 x10/x20 <a class="link-hover"
                                href="steam://connect/cartagoserver.ddns.net:27020">steam://connect/cartagoserver.ddns.net:27020</a>
                        </li>
                        <li>
                            Genesis2 x10/x20 <a class="link-hover"
                                href="steam://connect/cartagoserver.ddns.net:27017">steam://connect/cartagoserver.ddns.net:27017</a>
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
                        <li>The Island x10/x20 || open cartagoserver.ddns.net:27021</li>
                        <li>Lost Island x10/x20 || open cartagoserver.ddns.net:27038</li>
                        <li>Ragnarok x10/x20 || open cartagoserver.ddns.net:27015</li>
                        <li>Valguero x10/x20 || open cartagoserver.ddns.net:27018</li>
                        <li>Cristal Isles x10/x20 || open cartagoserver.ddns.net:27016</li>
                        <li>The Center x10/x20 || open cartagoserver.ddns.net:27022</li>
                        <li>Scorched Earth x10/x20 || open cartagoserver.ddns.net:27019</li>
                        <li>Aberration x10/x20 || open cartagoserver.ddns.net:27024</li>
                        <li>Extinction x10/x20 || open cartagoserver.ddns.net:27023</li>
                        <li>Genesis 1 x10/x20 || open cartagoserver.ddns.net:27020</li>
                        <li>Genesis 2 x10/x20 || open cartagoserver.ddns.net:27017</li>
                    </ol>
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
