@extends('layouts.layout1')
@section('titulo', 'Acerca de')
@section('body')

    <!-- Breadcrumbs -->
    <section class="section section-bredcrumbs" style="background: url(images/cartago/dragon1.png) no-repeat center / cover">
        <div class="container context-dark breadcrumb-wrapper text-left">
            <h1>Nosotros</h1>
            <ul class="breadcrumbs-custom">
                <li><a href="/Inicio">Inicio</a></li>
                <li class="active">Nosotros</li>
            </ul>
        </div>
    </section>
    <!-- Join Our Team-->
    <section class="section section-lg custom-image-section">
        <div class="container relative-container">
            <div class="row row-30 row-md-60 justify-content-between">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h2>Nuestra misión</h2>

                    <div class="heading-6">
                        Que cualquier jugador pueda tener un sitio donde divertirse y conocer nuevas
                        personas.
                    </div>
                    <p>
                        Brindar una experiencia grata, donde el jugador pueda sentirse cómodo jugando y que tenga la
                        confianza de preguntar a los administradores, ya que nosotros también somos jugadores, por ello el
                        servidor nunca se estancará en una sola cosa, siempre estará en una evolución acompañada de todos
                        ustedes.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <img src="{{ URL::asset('images/acerca/logoark.png') }}" alt="" width="80%" />
                    </div>

                    {{-- <div class="progress-linear-wrap">
                        <article class="progress-linear">
                            <div class="progress-header">
                                <p>Music</p><span class="progress-value">75</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                            </div>
                        </article>
                        <article class="progress-linear">
                            <div class="progress-header">
                                <p>News</p><span class="progress-value">50</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                            </div>
                        </article>
                        <article class="progress-linear">
                            <div class="progress-header">
                                <p>Entertainment</p><span class="progress-value">75</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                            </div>
                        </article>
                        <article class="progress-linear">
                            <div class="progress-header">
                                <p>Shows</p><span class="progress-value">75</span>
                            </div>
                            <div class="progress-bar-linear-wrap">
                                <div class="progress-bar-linear"></div>
                            </div>
                        </article>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Your Career Starts Here-->
    <section class="section section-lg bg-gray-100">
        <div class="container text-center">
            <h2 class="custom-title">
                <span>Historia</span>
            </h2>
            <!-- Owl Carousel-->
            <div class="owl-carousel text-left" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4"
                data-dots="false" data-nav="false" data-stage-padding="15" data-loop="true" data-margin="30"
                data-autoplay="true" data-mouse-drag="true">

                <div class="timeline">
                    <div class="date">09 Enero 2021</div>
                    <div class="line"></div>
                    <img src="{{ URL::asset('images/acerca/primitivo.jpg') }}" alt="" width="150" height="125" />
                    <h6 class="title">
                        Server Primitivo
                    </h6>
                    <p class="exeption">
                        Ragnarok, Valguero.
                    </p>
                </div>

                <div class="timeline">
                    <div class="date">19 Febrero 2021</div>
                    <div class="line"></div>
                    <img src="{{ URL::asset('images/acerca/x10_1.jpg') }}" alt="" width="100" height="72" />
                    <h6 class="title">
                        Server x10
                    </h6>
                    <p class="exeption">
                        Ragnarok, Valguero.
                    </p>
                </div>

                <div class="timeline">
                    <div class="date">31 Febrero 2021</div>
                    <div class="line"></div>
                    <img src="{{ URL::asset('images/acerca/x10_1.jpg') }}" alt="" width="100" height="72" />
                    <h6 class="title">
                        Server x10
                    </h6>
                    <p class="exeption">
                        The Island, Ragnarok, Extincion, Genesis 1, Cristal Isles, The Center.
                    </p>
                </div>

                <div class="timeline">
                    <div class="date">30 Abril 2021</div>
                    <div class="line"></div>
                    <img src="{{ URL::asset('images/acerca/x100_1.jpg') }}" alt="" width="100" height="72" />
                    <h6 class="title">
                        Server x100
                    </h6>
                    <p class="exeption">
                        Ragnarok.
                    </p>
                </div>

                <div class="timeline">
                    <div class="date">26 Mayo 2021</div>
                    <div class="line"></div>
                    <img src="{{ URL::asset('images/acerca/x10_1.jpg') }}" alt="" width="100" height="72" />
                    <h6 class="title">
                        Server x10
                    </h6>
                    <p class="exeption">
                        Ragnarok, Valguero, The Island, The Center, Cristal Isles, Genesis 2.
                    </p>
                </div>

                <div class="timeline">
                    <div class="date">09 Julio 2021</div>
                    <img src="{{ URL::asset('images/acerca/x100_1.jpg') }}" alt="" width="100" height="72" />
                    <h6 class="title">
                        Server x100
                    </h6>
                    <p class="exeption">
                        Ragnarok.
                    </p>
                </div>

                <div class="timeline">
                    <div class="date">23 Julio 2021</div>
                    <div class="line"></div>
                    <img src="{{ URL::asset('images/acerca/x5_1.jpg') }}" alt="" width="100" height="72" />
                    <h6 class="title">
                        Server x5
                    </h6>
                    <p class="exeption">
                        Ragnarok, The Island.
                    </p>
                </div>

                <div class="timeline">
                    <div class="date">10 Septiembre 2021</div>
                    <div class="line"></div>
                    <img src="{{ URL::asset('images/acerca/x10_1.jpg') }}" alt="" width="100" height="72" />
                    <h6 class="title">
                        Server x10
                    </h6>
                    <p class="exeption">
                        Ragnarok, The Island, Cristal Isles, Extincion, Valguero.
                    </p>
                </div>

                <div class="timeline">
                    <div class="date">19 Noviembre 2021</div>
                    <div class="line"></div>
                    <img src="{{ URL::asset('images/acerca/x10_1.jpg') }}" alt="" width="100" height="72" />
                    <h6 class="title">
                        Server x10
                    </h6>
                    <p class="exeption"></p>
                </div>

            </div>
        </div>
    </section>
    <!-- Administradores -->
    <section class="section section-lg">
        <div class="container text-center">
            <h2 class="custom-title"><span>Administradores</span></h2>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-1" data-items="1" data-dots="true" data-nav="true"
                data-md-stage-padding="0" data-loop="true" data-autoplay="true" data-margin="30" data-mouse-drag="false">

                <blockquote class="quote quote-large">
                    <div class="quote-meta">
                        <img class="img-bordered" src="{{ URL::asset('images/acerca/cobra.png') }}" alt="" width="220"
                            height="220" />
                    </div>
                    <div class="quote-body">
                        <div class="author heading-6">
                            <cite>Cobra</cite>
                        </div>
                        <div class="position">Owner & Administrador</div>
                        <q class="heading-5">
                            Las cosas no tienen por qué cambiar el mundo para ser importantes. (Steve Jobs)
                        </q>
                    </div>
                </blockquote>

                <blockquote class="quote quote-large">
                    <div class="quote-meta">
                        <img class="img-bordered" src="{{ URL::asset('images/acerca/moises.jpg') }}" alt="" width="220"
                            height="220" />
                    </div>
                    <div class="quote-body">
                        <div class="author heading-6">
                            <cite>Moises</cite>
                        </div>
                        <div class="position">Administrador & Programador</div>
                        <q class="heading-5">
                            Una vez aceptamos nuestros límites, vamos más allá de estos. (Albert Einstein)
                        </q>
                    </div>
                </blockquote>

                <blockquote class="quote quote-large">
                    <div class="quote-meta">
                        <img class="img-bordered" src="{{ URL::asset('images/acerca/mrwyvern.jpg') }}" alt=""
                            width="220" height="220" />
                    </div>
                    <div class="quote-body">
                        <div class="author heading-6">
                            <cite>Mr Wyvern</cite>
                        </div>
                        <div class="position">Administrador - Discord & Programador</div>
                        <q class="heading-5">
                            Cada día trae nuevas opciones. (Martha Beck)
                        </q>
                    </div>
                </blockquote>

            </div>
        </div>
    </section>

@endsection
