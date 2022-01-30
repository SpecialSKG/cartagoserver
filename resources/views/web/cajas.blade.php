@extends('layouts.layoutWeb')
@section('titulo', 'Cajas')
@section('bodyWeb')

    <!-- Breadcrumbs -->
    <section class="section section-bredcrumbs" style="background: url(images/cartago/w_5.png) no-repeat center / cover">
        <div class="container context-dark breadcrumb-wrapper text-left">
            <h1>Cajas</h1>
            <ul class="breadcrumbs-custom">
                <li><a href="/Inicio">Inicio</a></li>
                <li class="active">Cajas</li>
            </ul>
        </div>
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 text-center">
                <div class="col-lg-8 col-xl-8 offset-lg-2 offset-xl-2">
                    <!-- Quote Default-->
                    <blockquote class="quote quote-default">
                        <div class="quote-icon mdi mdi-format-quote accent-quote"></div>
                        <div class="quote-body">
                            <q class="heading-6">
                                Dependiendo de la calidad de la caja darán cosas aleatorias.
                            </q>
                        </div>
                        <div class="quote-body">
                            <q class="heading-6">
                                Desde piedra hasta bp, dinos, elemento, etc.
                            </q>
                        </div>
                        <div class="quote-body">
                            <q class="heading-6">
                                La de recursos dará aleatoria mente cualquier recurso de ark.
                            </q>
                        </div>
                        <div class="quote-body">
                            <q class="heading-6">
                                Todas las cajas regalan X cantidad de puntos, desde 100 points hasta 10.000 points.
                            </q>
                        </div>
                    </blockquote>
                </div>
                <div class="col-lg-8 col-xl-8 offset-lg-2 offset-xl-2">
                    <!-- Quote Default-->
                    <h2>¿Como consultar o comprar las cajas?</h2>

                    <figure class="figure-light">
                        <figcaption>
                            <p>Comando:</p>
                        </figcaption>
                    </figure>
                    <div class="heading-6">
                        /box
                    </div>
                    <div class="heading-6">
                        (muestra la información en el juego de tus cajas disponibles).
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Steam -->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 text-center">
                <div class="col-xl-6">
                    <div class="heading-3">
                        1r Adquirir la caja:
                    </div>
                    <br>
                    <div class="heading-6">
                        /buybox (nombre de la caja) (cantidad)
                    </div>
                    <div class="heading-4">
                        Ejemplo :
                    </div>
                    <div class="heading-6">
                        /buybox cajaverde 1
                    </div>
                    <br>

                    <div class="heading-3">
                        2do Canjear la caja:
                    </div>
                    <br>
                    <div class="heading-6">
                        /box (Nombre de la Caja)
                    </div>
                    <div class="heading-4">
                        Ejemplo :
                    </div>
                    <div class="heading-6">
                        /box cajaverde
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="heading-4">
                        Ejemplos para todas las cajas :
                    </div>
                    <br>
                    <div class="heading-6">
                        /box cajarecursos
                    </div>
                    <div class="heading-6">
                        /box cajaverde
                    </div>
                    <div class="heading-6">
                        /box cajamorada
                    </div>
                    <div class="heading-6">
                        /box cajaroja
                    </div>
                    <div class="heading-6">
                        /box cajaoro
                    </div>
                </div>

                <div class="col-lg-8 col-xl-8 offset-lg-2 offset-xl-2">
                    <!-- Quote Default-->
                    <div class="heading-4">
                        (Gratuita / FREE)
                    </div>
                    <div class="heading-4">
                        /box inicio
                    </div>
                    <div class="heading-6">
                        Esta caja es unica y es gratuita para todo aquel jugador que inicia en el servidor.
                    </div>
                    <div class="heading-6">
                        Obtendra recursos y 1 dino al azar.
                    </div>
                </div>

                <div class="col-lg-8 col-xl-8 offset-lg-2 offset-xl-2">
                    <!-- Quote Default-->
                    <div class="heading-4">
                        (Gratuita / FREE)
                    </div>
                    <div class="heading-4">
                        /box cartago
                    </div>
                    <div class="heading-6">
                        Esta caja es otorgada cada 2 horas de juego en el mismo mapa, si se cambia, sera reiniciado el
                        tiempo.
                        Es gratuita para todos los jugadores y obtendran 1 articulo y 1 dino al azar.
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4 offset-lg-2 offset-xl-2">
                    <!-- Quote Default-->
                    <h2>Precios</h2>
                    <br>
                    <div class="heading-4">
                        Caja Recursos
                    </div>
                    <div class="heading-6">
                        ID: cajarecursos || Points: 6.000
                    </div>
                    <br>

                    <div class="heading-4">
                        Caja Verde
                    </div>
                    <div class="heading-6">
                        ID: cajaverde || Points: 10.000
                    </div>
                    <br>

                    <div class="heading-4">
                        Caja Morada
                    </div>
                    <div class="heading-6">
                        ID: cajamorada || Points: 25.000
                    </div>
                    <br>

                    <div class="heading-4">
                        Caja Roja
                    </div>
                    <div class="heading-6">
                        ID: cajaroja || Points: 30.000
                    </div>
                    <br>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <iframe src="https://slides.com/jalvaro/caja-cartago/embed?style=light" width="375" height="225"
                        title="Cajas Cartago" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen
                        allowfullscreen>
                    </iframe>
                    <br>
                    <a class="button button-primary btn-lg" href="https://slides.com/jalvaro/caja-cartago/fullscreen"
                        target="_blank" data-caption-animate="fadeInUp" data-caption-delay="450">FullScreen</a>
                </div>

            </div>
        </div>
    </section>
@endsection
