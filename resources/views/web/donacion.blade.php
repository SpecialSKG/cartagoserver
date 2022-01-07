@extends('layouts.layoutWeb')
@section('titulo', 'Donaciones')
@section('bodyWeb')

    <link href="{{ URL::asset('css/web/card.css') }}" rel="stylesheet">

    <!-- Breadcrumbs -->
    <section class="section section-bredcrumbs" style="background: url(images/cartago/w_4.png) no-repeat center / cover">
        <div class="container context-dark breadcrumb-wrapper text-left">
            <h1>Donaciones</h1>
            <ul class="breadcrumbs-custom">
                <li><a href="/Inicio">Inicio</a></li>
                <li class="active">Donaciones</li>
            </ul>
        </div>
    </section>

    <section class="section section-lg custom-image-section">
        <div class="container relative-container">
            <div class="row row-30 row-md-60 justify-content-between">

                <div class="col-md-6">
                    <div class="heading-6">
                        Las donaciones no son con el fin de convertir el server en un <span class="font-weight-bold">“pay to
                            win”</span>, Por esa razon, las
                        donaciones serían un <span class="font-weight-bold">“pay to fast”</span>. No hay nada en la tienda,
                        mejor que lo que se pueda conseguir
                        jugando, algunos ejemplos:
                    </div>
                    <ul class="list-marked">
                        <li>
                            Cualquier dino, es peor que uno Adulto y con su impronta.
                        </li>
                        <li>
                            Cualquier montura no sera mejor que creada con habilidad de fabricación y un plano decente.
                        </li>
                        <li>
                            Cualquier arma ejemplo francotirador, su máximo rondara 350 de daño, con suerte.
                        </li>
                    </ul>
                    <br>
                    <div class="heading-6">
                        Con esto damos la facilidad de que puedan divertirse, esos jugadores que tienen tiempo limitado para
                        jugar a ARK.
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="heading-6">
                        Link de donaciones:
                        <a class="button button-primary" href="https://cartago-servers.tebex.io/" target="_blank"
                            data-caption-animate="fadeInUp" data-caption-delay="450">Sitio web</a>
                    </div>
                    <br>
                    <div class="heading-6">
                        (las donaciones van a la pagina de alojamiento, Actualmente no vivimos de esto y parte del gasto es
                        por nuestra parte, asi que nos ayudarias a seguir activos).
                    </div>
                    <br>
                    <div class="heading-6">
                        Para cualquier otro método de pago puedes consultar.
                        Cuando realices tu donación, crear un ticket en el canal 𝐑𝐞𝐩𝐨𝐫𝐭𝐬 con una captura de la
                        donación e información de tu personaje y lo que deseas comprar.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg custom-image-section">
        <div class="container relative-container">
            <div class="row row-50">

                <div class="col-md-4">
                    <div class="slide-container">

                        <div class="wrapper">
                            <div class="clash-card goblin">
                                <div class="clash-card__image clash-card__image--goblin">
                                    <img src="{{ URL::asset('images/donaciones/ninja_gamma.png') }}" alt="goblin">
                                </div>
                                <div class="clash-card__level clash-card__level--goblin">Level 1</div>
                                <div class="clash-card__unit-name">Gamma</div>
                                <div class="clash-card__unit-description">
                                    Valido por 30 Días, 80 puntos cada 15 minutos.
                                </div>
                                <div class="clash-card__unit-description">
                                    Puedes pintar tus dinos con plugin dinocolor
                                    Obtienes Caja verde cada 2h de juego, Si te desconectas del juego o cambias de mapa, se resetea el tiempo.
                                </div>
                                <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                                    <div class="one-third">
                                        <div class="stat">30
                                            <sup>Dias</sup>
                                        </div>
                                        <div class="stat-value">Time</div>
                                    </div>
                                    <div class="one-third">
                                        <div class="stat">80</div>
                                        <div class="stat-value">Puntos</div>
                                    </div>
                                    <div class="one-third no-border">
                                        <div class="stat">5 €</div>
                                        <div class="stat-value">Cost</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end clash-card goblin-->
                        </div>

                    </div>

                </div>

                <div class="col-md-4">
                    <div class="slide-container">

                        <div class="wrapper">
                            <div class="clash-card wizard">
                                <div class="clash-card__image clash-card__image--wizard">
                                    <img src="{{ URL::asset('images/donaciones/ninja_beta.png') }}" alt="wizard">
                                </div>
                                <div class="clash-card__level clash-card__level--wizard">Level 2</div>
                                <div class="clash-card__unit-name">Beta</div>
                                <div class="clash-card__unit-description">
                                    Valido por 30 Días, 100 puntos cada 15 minutos.
                                </div>
                                <div class="clash-card__unit-description">
                                    Acceso a plugin autofarm.
                                    Puedes pintar tus dinos con plugin dinocolor
                                    1 Caja Morada, cada 2h de juego, Si te desconectas del juego o cambias de mapa, se resetea el tiempo.
                                </div>
                                <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                                    <div class="one-third">
                                        <div class="stat">30
                                            <sup>Dias</sup>
                                        </div>
                                        <div class="stat-value">Time</div>
                                    </div>
                                    <div class="one-third">
                                        <div class="stat">100</div>
                                        <div class="stat-value">Puntos</div>
                                    </div>
                                    <div class="one-third no-border">
                                        <div class="stat">8 €</div>
                                        <div class="stat-value">Cost</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end clash-card wizard-->
                        </div>

                    </div>

                </div>

                <div class="col-md-4">
                    <div class="slide-container">

                        <div class="wrapper">
                            <div class="clash-card archer">
                                <div class="clash-card__image clash-card__image--archer">
                                    <img src="{{ URL::asset('images/donaciones/ninja_alpha.png') }}" alt="archer">
                                </div>
                                <div class="clash-card__level clash-card__level--archer">Level 3</div>
                                <div class="clash-card__unit-name">Alpha</div>
                                <div class="clash-card__unit-description">
                                    Valido por 30 Días, 125 puntos cada 15 minutos.
                                </div>
                                <div class="clash-card__unit-description">
                                    Acceso a plugin autofarm.
                                    Puedes pintar tus dinos con plugin dinocolor.
                                    Puedes conectar el log de tribu con tu Discord.
                                    Obtienes Caja roja cada 2h de juego, Si te desconectas del juego o cambias de mapa, se resetea el tiempo.
                                </div>
                                <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                                    <div class="one-third">
                                        <div class="stat">30
                                            <sup>Dias</sup>
                                        </div>
                                        <div class="stat-value">Time</div>
                                    </div>
                                    <div class="one-third">
                                        <div class="stat">125</div>
                                        <div class="stat-value">Puntos</div>
                                    </div>
                                    <div class="one-third no-border">
                                        <div class="stat">15 €</div>
                                        <div class="stat-value">Cost</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end clash-card archer-->
                        </div>

                    </div>
                </div>

                <div class="col-md-8">
                    <div class="slide-container">

                        <div class="wrapper">
                            <div class="clash-card giant">
                                <div class="clash-card__image clash-card__image--giant">
                                    <img src="{{ URL::asset('images/donaciones/ninja_master.png') }}" alt="giant">
                                </div>
                                <div class="clash-card__level clash-card__level--giant">Level 4</div>
                                <div class="clash-card__unit-name">Master</div>
                                <div class="clash-card__unit-description">
                                    Valido por 30 Días, 160 puntos cada 30 minutos.
                                </div>
                                <div class="clash-card__unit-description">
                                    Acceso a plugin autofarm.
                                    Puedes pintar tus dinos con plugin dinocolor
                                    Obtienes Caja oro cada 2h de juego, Si te desconectas del juego o cambias de mapa, se resetea el tiempo.
                                </div>
                                <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                                    <div class="one-third">
                                        <div class="stat">30
                                            <sup>Dias</sup>
                                        </div>
                                        <div class="stat-value">Time</div>
                                    </div>
                                    <div class="one-third">
                                        <div class="stat">160</div>
                                        <div class="stat-value">Puntos</div>
                                    </div>
                                    <div class="one-third no-border">
                                        <div class="stat">30 €</div>
                                        <div class="stat-value">Cost</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end clash-card giant-->
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <h2>Check</h2>
                    <p class="text-block">
                        Para comprobar el estado de la suscripción y saber el tiempo restante hasta renovarla (si deseas)
                    </p>
                    <p class="text-block">
                        Escribiendo el comando <span class="font-weight-bold">/groups</span>
                    </p>
                    <p class="text-block">
                        "Default" para los que no estén suscritos a ninguna subscripción,
                        "Gamma, Beta, Alpha o Master" con una cuenta regresiva del tiempo restante.
                    </p>
                </div>

                <div class="col-sm-6 col-lg-10 col-xl-6">
                    <h2>Puntos</h2>

                    <ul class="list-marked">
                        <li>
                            30.000 Points + x3 Caja Verde 🎁 (6.00 € euro)
                        </li>
                        <li></li>
                        <li>
                            60.000 Points + x4 Caja Morada 🎁 (12.00 € euro)
                        </li>
                        <li></li>
                        <li>
                            100.000 Points + x5 Caja Morada 🎁 (18.00 € euro)
                        </li>
                        <li></li>
                        <li>
                            200.000 Points + x5 Caja Morada 🎁 (22.00 € euro)
                        </li>
                        <li></li>
                        <li>
                            250.000 Points + x6 Caja Roja + x5 Cajas Recursos 🎁 (27.00 € euro)
                        </li>
                        <li></li>
                        <li>
                            500.000 Points + x10 Caja Roja + x10 Cajas Recursos 🎁 (42.00 € euro)
                        </li>
                        <li></li>
                        <li>
                            1.500.000 Points + x10 Caja Oro + x15 Cajas Recursos 🎁 (99.99 € euro)
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-10 col-xl-6">
                    <h2>Cajas</h2>

                    <ul class="list-marked">
                        <li>
                            x10 Caja Recursos (5.00 € euro) 📦 /box cajarecursos
                        </li>
                        <li></li>
                        <li>
                            x10 Caja Verde (5.00 € euro) 📦 /box cajaverde
                        </li>
                        <li></li>
                        <li>
                            x5 Caja Morada (5.00 € euro) 📦 /box cajamorada
                        </li>
                        <li></li>
                        <li>
                            x3 Caja Roja (5.00 € euro) 📦 /box cajaroja
                        </li>
                        <li></li>
                        <li>
                            x2 Caja Oro (5.00 € euro) 📦 /box cajaoro
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-6 col-xl-6">
                    <h2>Reclamar</h2>
                    <p class="text-block">
                        Las Cajas 🎁 se acumulan, cada 4 horas de juego (El tiempo se guarda aunque te desconectes o cambien
                        de mapa no pierdes tu progreso)
                    </p>
                    <h5>Como Reclamar?</h5>
                    <p class="text-block">
                        <mark>
                            /box
                        </mark>
                        <span class="font-weight-bold">
                            Ver tus cajas disponibles
                        </span>
                    </p>
                    <p class="text-block">
                        <mark>
                            /box (id box)
                        </mark>
                        <span class="font-weight-bold">
                            Reclamar caja por su respectivo ID
                        </span>
                    </p>
                </div>

                <div class="col-sm-6 col-lg-6 col-xl-6">
                    <h5>Ejemplo para cada caja</h5>
                    <ul class="list-marked">
                        <li>
                            /box inicio <span class="font-weight-bold">(Gratis)</span>
                        </li>
                        <li>
                            /box cajarecursos
                        </li>
                        <li>
                            /box cajaverde
                        </li>
                        <li>
                            /box cajamorada
                        </li>
                        <li>
                            /box cajaroja
                        </li>
                        <li>
                            /box cajaoro
                        </li>
                    </ul>
                </div>

                <div class="col-sm-10 col-lg-10 col-xl-8">
                    <h5>Más Información del contenido de cada caja en la sección Tienda</h5>
                </div>

                <div class="col-sm-10 col-lg-10 col-xl-8">
                    <p class="text-block"></p>
                    <h2>Plugins Disponibles</h2>
                    <br>

                    <h5>Simple dino stats</h5>
                    <p class="text-block">
                        Observando a cualquier Dino (incluyendo salvajes) y escribiendo en el chat del juego <span
                            class="font-weight-bold">/oracle</span> puedes saber los puntos asignados a cada stats. Y si el
                        Dino es de la tribu, con <span class="font-weight-bold">/shazam</span> cambias el nombre por las
                        estadísticas base.
                    </p>
                    <br>

                    <h5>Auto farm</h5>
                    <p class="text-block">
                        Viendo a un dinosaurio que farmea y escribiendo en el chat <span
                            class="font-weight-bold">/farm</span> el dino farmeara en automático, ahorrándose el clic de
                        raton, para desactivar vuelve a poner el comando Viendo al dinosaurio.
                    </p>
                    <br>

                    <h5>Dino color</h5>
                    <p class="text-block">
                        Con el comando <span class="font-weight-bold">/sdc (Color Region) (Id Color)</span> podrás
                        editar todas las regiones con los colores que desees de cualquier dino de tu tribu.
                        En la wiki de cada dino podrás ver las regiones disponibles y en esta pagina los ID de todos los
                        colores disponibles:
                        <a class="link-hover" href="https://ark.fandom.com/wiki/Color_IDs">
                            https://ark.fandom.com/wiki/Color_IDs
                        </a>
                    </p>
                    <br>

                </div>

                <div class="col-lg-6 col-xl-6">
                    <h2>Token, Cambio de Genero</h2>
                    <div class="row row-30 flex-md-row-reverse row-offset-2">
                        <div class="col-md-6">
                            <img src="{{ URL::asset('images/donaciones/genero.jpg') }}" alt="" width="770" height="512" />
                        </div>
                        <div class="col-md-6">
                            <h5>5 Token (2.00€ euro)</h5>
                            <p>
                                Valido para cambiar el Sexo a 1 dino por token.
                                Contactar con un Administrador para que sea otorgado el Token.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-6">
                    <h2>Max Lvl Dino</h2>
                    <div class="row row-30 flex-md-row-reverse row-offset-2">
                        <div class="col-md-6">
                            <img src="{{ URL::asset('images/donaciones/max.jpg') }}" alt="" width="770" height="512" />
                        </div>
                        <div class="col-md-6">
                            <h5>(5.00€ euro)</h5>
                            <p>
                                Valido para 2 Dinos.
                            </p>
                            <p>
                                Seran otorgados los puntos faltantes p ara el nivel maximo.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        (function() {
            var slideContainer = $(".slide-container");

            slideContainer.slick();

            $(".clash-card__image img").hide();
            $(".slick-active").find(".clash-card img").fadeIn(200);

            // On before slide change
            slideContainer.on(
                "beforeChange",
                function(event, slick, currentSlide, nextSlide) {
                    $(".slick-active").find(".clash-card img").fadeOut(1000);
                }
            );

            // On after slide change
            slideContainer.on("afterChange", function(event, slick, currentSlide) {
                $(".slick-active").find(".clash-card img").fadeIn(200);
            });
        })();
    </script>


    <!-- Mailform-->
    {{-- <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 justify-content-between">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                    data-toggle="tab">San Diego</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                    data-toggle="tab">New York</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                    data-toggle="tab">Chicago</a></li>
                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <ul class="contact-box">
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span
                                                    class="icon mdi mdi-map-marker accent-icon"></span></div>
                                            <div class="unit-body"><a class="hover-text" href="#">2130 Fulton
                                                    Street, <br class="veil reveal-lg-inline">San Diego, CA 94117-1080
                                                    USA</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span class="icon mdi mdi-phone accent-icon"></span>
                                            </div>
                                            <div class="unit-body">
                                                <ul class="list-phones">
                                                    <li><a class="hover-text" href="tel:#">1-800-1234-567</a></li>
                                                    <li><a class="hover-text" href="tel:#">1-800-1234-567</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span
                                                    class="icon mdi mdi-email-outline accent-icon"></span></div>
                                            <div class="unit-body"><a class="hover-text"
                                                    href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <ul class="contact-box">
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span
                                                    class="icon mdi mdi-map-marker accent-icon"></span></div>
                                            <div class="unit-body"><a class="hover-text" href="#">2130 Marshall
                                                    Street, <br class="veil reveal-lg-inline">New York, NY 65432-8767
                                                    USA</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span class="icon mdi mdi-phone accent-icon"></span>
                                            </div>
                                            <div class="unit-body">
                                                <ul class="list-phones">
                                                    <li><a class="hover-text" href="tel:#">1-800-1234-567</a></li>
                                                    <li><a class="hover-text" href="tel:#">1-800-1234-567</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span
                                                    class="icon mdi mdi-email-outline accent-icon"></span></div>
                                            <div class="unit-body"><a class="hover-text"
                                                    href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <ul class="contact-box">
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span
                                                    class="icon mdi mdi-map-marker accent-icon"></span></div>
                                            <div class="unit-body"><a class="hover-text" href="#">5432 Central
                                                    Street, <br class="veil reveal-lg-inline">Chicago, IL 43541-3243
                                                    USA</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span
                                                    class="icon mdi mdi-phone accent-icon"></span>
                                            </div>
                                            <div class="unit-body">
                                                <ul class="list-phones">
                                                    <li><a class="hover-text" href="tel:#">1-800-1234-567</a></li>
                                                    <li><a class="hover-text" href="tel:#">1-800-1234-567</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-horizontal unit-spacing-xxs">
                                            <div class="unit-left"><span
                                                    class="icon mdi mdi-email-outline accent-icon"></span></div>
                                            <div class="unit-body"><a class="hover-text"
                                                    href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="group group-middle social-items"><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook" href="#"></a><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-twitter" href="#"></a><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-instagram" href="#"></a><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-facebook-messenger" href="#"></a><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-linkedin" href="#"></a><a
                            class="icon icon-md icon-gray-400 novi-icon mdi mdi-snapchat" href="#"></a></div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h4>Get in Touch</h4>
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                        method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-name" type="text" name="name"
                                data-constraints="@Required">
                            <label class="form-label" for="contact-name">Name</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input" id="contact-email" type="email" name="email"
                                data-constraints="@Email @Required">
                            <label class="form-label" for="contact-email">E-mail</label>
                        </div>
                        <div class="form-wrap">
                            <label class="form-label" for="contact-message">Message</label>
                            <textarea class="form-input" id="contact-message" name="message"
                                data-constraints="@Required"></textarea>
                        </div>
                        <button class="button button-primary" type="submit">Send</button>
                    </form>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="google-map-container" data-zoom="4" data-icon="images/gmap_marker.png"
                        data-icon-active="images/gmap_marker.png" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                        data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
                        <div class="google-map"></div>
                        <ul class="google-map-markers">
                            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                                data-description="9870 St Vincent Place, Glasgow"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


@endsection
