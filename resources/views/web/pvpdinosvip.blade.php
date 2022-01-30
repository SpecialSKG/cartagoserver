@extends('layouts.layoutWeb')
@section('titulo', 'Dinos Vip')
@section('bodyWeb')

    <!-- Breadcrumbs -->
    <section class="section section-bredcrumbs" style="background: url(images/cartago/w_1.png) no-repeat center / cover">
        <div class="container context-dark breadcrumb-wrapper text-left">
            <h1>Dinos VIP</h1>
            <ul class="breadcrumbs-custom">
                <li><a href="/Inicio">Inicio</a></li>
                <li class="active">Dinos VIP</li>
            </ul>
        </div>
    </section>

    <!-- Inicio-->
    <section class="section section-lg custom-image-section">
        <div class="container relative-container">
            <div class="row row-30 row-md-60 justify-content-between text-center">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2>PVP Dinos Vip</h2>

                    <div class="heading-6">
                        Aca podras encontrar todo el listado de Dinosaurios exclusivos.
                    </div>

                    <div class="heading-6">
                        Estos los puedes comprar con dinero real y tambien dentro del servidor con puntos.
                    </div>

                    <div class="heading-6">
                        Cada enlace te llevara al Dinosaurio que tu quieres para realizar la compra.
                    </div>

                    <br>

                    <div class="heading-6">
                        Link de Sitio de Compra:
                        <a class="button button-primary" href="https://cartago-servers.tebex.io/category/dinos-pvp"
                            target="_blank" data-caption-animate="fadeInUp" data-caption-delay="450">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg custom-image-section">
        <div class="container relative-container">

            <div class="row row-30 row-md-60 justify-content-between text-center">
                <div class="col-sm-8 col-md-8 col-lg-8 offset-sm-2 offset-md-2 offset-lg-2">
                    <img src="{{ URL::asset('images/pvpdinosvip/01.jpg') }}" alt="" width="100%" />
                </div>
            </div>

            <div class="row row-30 row-md-60 justify-content-between text-center">
                <div class="col-sm-8 col-md-8 col-lg-8 offset-sm-2 offset-md-2 offset-lg-2">
                    <img src="{{ URL::asset('images/pvpdinosvip/02.jpg') }}" alt="" width="100%" />
                </div>
            </div>

            <div class="row row-30 row-md-60 justify-content-between text-center">
                <div class="col-sm-8 col-md-8 col-lg-8 offset-sm-2 offset-md-2 offset-lg-2">
                    <img src="{{ URL::asset('images/pvpdinosvip/03.jpg') }}" alt="" width="100%" />
                </div>
            </div>

            <div class="row row-30 row-md-60 justify-content-between text-center">
                <div class="col-sm-8 col-md-8 col-lg-8 offset-sm-2 offset-md-2 offset-lg-2">
                    <img src="{{ URL::asset('images/pvpdinosvip/04.jpg') }}" alt="" width="100%" />
                </div>
            </div>

            <div class="row row-30 row-md-60 justify-content-between text-center">
                <div class="col-sm-8 col-md-8 col-lg-8 ">
                    <img src="{{ URL::asset('images/pvpdinosvip/05.jpg') }}" alt="" width="100%" />
                </div>

                <div class="col-sm-12 col-md-2 col-lg-2 offset-md-1 offset-lg-1">
                    <div class="heading-6">
                        <br>
                        <a class="button button-primary" href="https://cartago-servers.tebex.io/package/4846340"
                            target="_blank" data-caption-animate="fadeInUp" data-caption-delay="450">Noglin</a>

                        <a class="button button-primary" href="https://cartago-servers.tebex.io/package/4846225"
                            target="_blank" data-caption-animate="fadeInUp" data-caption-delay="450">Void</a>

                        <a class="button button-primary" href="https://cartago-servers.tebex.io/package/4846230"
                            target="_blank" data-caption-animate="fadeInUp" data-caption-delay="450">Maewing</a>
                    </div>
                </div>
            </div>




        </div>
    </section>

@endsection
