@extends('layouts.layoutWeb')
@section('titulo', 'Inicio')
@section('bodyWeb')

<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-2" data-loop="false" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
    <div class="swiper-wrapper">
        <div class="swiper-slide context-dark" data-slide-bg="{{ URL::asset('images/cartago/w_1.png') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-lg-left">
                        <div class="col-md-12 col-xl-10">
                            <h1 class="" data-caption-animate="fadeInUp" data-caption-delay="100">
                                Mas que un Server.
                            </h1>
                            <!-- <a class="button button-lg button-primary" href="about.html" data-caption-animate="fadeInUp" data-caption-delay="450">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="swiper-meta">
        <ul class="links">
            <li><a class="icon icon-meta mdi mdi-facebook" href="#"></a></li>
            <li><a class="icon icon-meta mdi mdi-twitter" href="#"></a></li>
            <li><a class="icon icon-meta mdi mdi-instagram" href="#"></a></li>
            <li><a class="icon icon-meta mdi mdi-facebook-messenger" href="#"></a></li>
            <li><a class="icon icon-meta mdi mdi-linkedin" href="#"></a></li>
            <li><a class="icon icon-meta mdi mdi-snapchat" href="#"></a></li>
        </ul>
    </div> -->

</section>
<!--Player-->
<!-- <section class="section section-xs bg-primary-gradient wave-pattern">
    <div class="container">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="col-lg-12">
                    <div class="jp-player-init">
                        <div class="jp-jplayer"></div>
                        <div class="jp-audio jp-audio-7" role="application" aria-label="media player">
                            <ul class="jp-player-list">
                                <li class="jp-player-list-item" data-jp-title="The Stark Palace - " data-jp-artist="CroMagnon Man" data-jp-mp3="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"></li>
                            </ul>
                            <div class="jp-interface">
                                <div class="jp-button jp-playpaus-button">
                                    <button class="jp-btn jp-play" role="button" tabindex="7">play</button>
                                </div>
                                <div class="jp-time-rail">
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jp-button jp-volume-button">
                                    <button class="jp-btn jp-mute" role="button" tabindex="7">max volume</button>
                                </div>
                                <div class="jp-volume-bar">
                                    <div class="jp-volume-bar-value"></div>
                                </div>
                            </div>
                            <div class="jp-playlist">
                                <div class="playlist-in">
                                    <ul>
                                        <li> </li>
                                    </ul>
                                    <div class="jp-current-time"></div>
                                    <div class="jp-no-solution"><span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your<a href="http://get.adobe.com/flashplayer/" target="_blank"> Flash plugin</a>.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Variety of Music Genres-->

<!--	Schedule of Radio Shows-->
<!-- <section class="section section-lg bg-gray-100">
    <div class="container text-center">
        <h2>Schedule of Radio Shows</h2>
        <p>Our radio has more than 20 radio shows aired weekly. They include exclusive guest mixes,live<br class="d-none d-lg-block">performances, interviews, and appearances by world-famous DJs and musicians</p>
        <div class="row row-30 row-offset-4 text-left">
            <div class="col-md-6 col-lg-4 wow fadeInRight">
                <article class="post-boxed">
                    <div class="post-meta">
                        <div class="post-meta-item">
                            <div class="post-author"><span>by</span> <a href="#">Leona Burns</a>
                            </div>
                        </div>
                        <div class="post-meta-item">
                            <div class="post-date">07:00am – 10:00am</div>
                        </div>
                    </div><a class="media-wrapper" href="#"><img src="{{ URL::asset('images/latest-blog-post-1-370x272.jpg') }}" alt="" width="370" height="272" /></a>
                    <div class="post-body">
                        <ul class="list-tags">
                            <li><a class="tag-1" href="#">Program</a>
                            </li>
                        </ul>
                        <h6 class="post-title"><a href="#">OnWave Morning Time with Leona Burns</a></h6>
                        <p class="post-exeption">Leona Burns is ready to charge up your morning with great EDM &amp; Rock music! Tune in to OnWave to get your dose of morning fun with trending hits and the latest news.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInRight" data-wow-delay="0.1s">
                <article class="post-boxed">
                    <div class="post-meta">
                        <div class="post-meta-item">
                            <div class="post-author"><span>by</span> <a href="#">Martha Ryan</a>
                            </div>
                        </div>
                        <div class="post-meta-item">
                            <div class="post-date">10:00am – 12:00am</div>
                        </div>
                    </div><a class="media-wrapper" href="#"><img src="{{ URL::asset('images/latest-blog-post-2-370x272.jpg') }}" alt="" width="370" height="272" /></a>
                    <div class="post-body">
                        <ul class="list-tags">
                            <li><a class="tag-1" href="#">Interview</a>
                            </li>
                        </ul>
                        <h6 class="post-title"><a href="#">Up in the Air with Martha Ryan (Special Guest: Ray Johnson)</a></h6>
                        <p class="post-exeption">On Saturday, Ray Johnson, a renowned DJ and musician will visit Martha Ryan’s show “Up in the Air” to answer some tricky questions about his career and personal life.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInRight" data-wow-delay="0.2s">
                <article class="post-boxed">
                    <div class="post-meta">
                        <div class="post-meta-item">
                            <div class="post-author"><span>by</span> <a href="#">Martha Ryan</a>
                            </div>
                        </div>
                        <div class="post-meta-item">
                            <div class="post-date">12:00am – 03:00pm</div>
                        </div>
                    </div><a class="media-wrapper" href="#"><img src="{{ URL::asset('images/latest-blog-post-3-370x272.jpg') }}" alt="" width="370" height="272" /></a>
                    <div class="post-body">
                        <ul class="list-tags">
                            <li><a class="tag-1" href="#">Live</a>
                            </li>
                        </ul>
                        <h6 class="post-title"><a href="#">Pixie Lott and The Rollers (Live at Rush Club, May 2018)</a></h6>
                        <p class="post-exeption">This weekend’s live concert features an incredible performance by Pixie Lott and her group The Rollers at Rush Club in Seattle, WA, which took place on May 28, 2018.</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="button-wrap-lg"><a class="button button-lg button-primary" href="#">View All Schedule</a></div>
    </div>
</section> -->

<!-- Why You Should Listen to OnWave-->
<section class="section section-lg bg-gray-100">
    <div class="container text-center">
        <h2>Por qué deberías Jugar con nosotros?</h2>
        <div class="row row-40 justify-content-center number-counter">
            <div class="col-sm-6 col-lg-3 wow fadeInLeft">
                <div class="blurb-icon-fill">
                    <div class="icon linearicons-star"><span class="index-counter"></span></div>
                    <h5 class="title">Mejor Selección</h5>
                    <p class="exeption">
                        Una tienda diseñada para el jugador, organizada en categorías para una mejor lectura y búsqueda. Y en mejora constante.
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="blurb-icon-fill">
                    <div class="icon linearicons-news"><span class="index-counter"></span></div>
                    <h5 class="title">Ultimas Noticias</h5>
                    <p class="exeption">
                        Todas las noticias y Updates por parte de Ark en nuestro Discord.
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="blurb-icon-fill">
                    <div class="icon linearicons-sun"><span class="index-counter"></span></div>
                    <h5 class="title">Disponible para todos</h5>
                    <p class="exeption">
                        Diseñado para jugadores de Steam y de Epic Games, únicamente con plugins.
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="blurb-icon-fill">
                    <div class="icon linearicons-medal-empty"><span class="index-counter"></span></div>
                    <h5 class="title">Mejor Atencion</h5>
                    <p class="exeption">
                        Una atención personalizada para cada uno de nuestros miembros, tanto en el juego como en algún reporte por algún problema.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action-->
<!-- <section class="section section-xs bg-primary-gradient">
    <div class="container">
        <div class="box-cta">
            <div class="box-cta-inner">
                <h3>Listen to OnWave From Anywhere!</h3>
            </div>
            <div class="box-cta-inner"><a class="button button-md button-white" href="#">Listen Online</a></div>
        </div>
    </div>
</section> -->

<!-- Pricing-->
<section class="section section-lg hide">
    <div class="container text-center">
        <h2>Países de Jugadores</h2>
        <div class="row no-gutters justify-content-center">
            <img src="{{ URL::asset('images/categorias/Mapamundi1.jpg.webp') }}" alt="" style="width: 75%; background-size: contain;" />
        </div>
    </div>
</section>

@endsection