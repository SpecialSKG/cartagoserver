@extends('layouts.layout1')
@section('titulo', 'Servers')
@section('body')

    <!-- Breadcrumbs -->
    <section class="section section-bredcrumbs" style="background: url(images/cartago/dragon1.png) no-repeat center / cover">
        <div class="container context-dark breadcrumb-wrapper text-left">
            <h1>Servers</h1>
            <ul class="breadcrumbs-custom">
                <li><a href="/Inicio">Home</a></li>
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
                            <a class="link-hover" href="https://bit.ly/CartagoWeb">https://bit.ly/CartagoWeb</a>
                        </div>
                    </div>
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
                            Valguero x10/x20 <a class="link-hover"
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
                        <li>Valguero x10/x20 || </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Base typography -->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
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
                                href="{{ URL::asset('images/servers/Diapositiva1.png') }}">
                                <img src="{{ URL::asset('images/servers/Diapositiva1.png') }}" alt="" width="150"
                                    height="72" />
                            </a>
                        </li>
                        <li>
                            <a class="instagram-item" data-lightgallery="item"
                                href="{{ URL::asset('images/servers/Diapositiva2.png') }}">
                                <img src="{{ URL::asset('images/servers/Diapositiva2.png') }}" alt="" width="150"
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
                                href="{{ URL::asset('images/servers/reglas1.png') }}">
                                <img src="{{ URL::asset('images/servers/reglas1.png') }}" alt="" width="150"
                                    height="72" />
                            </a>
                        </li>
                        <li>
                            <a class="instagram-item" data-lightgallery="item"
                                href="{{ URL::asset('images/servers/reglas2.png') }}">
                                <img src="{{ URL::asset('images/servers/reglas2.png') }}" alt="" width="150"
                                    height="72" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
