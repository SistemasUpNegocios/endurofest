<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="theme-color" content="#282828">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title>Mexiquillo Enduro 2022</title>
  <meta name="description"
    content="La página web Mexiquillo Enduro 2022, tiene para ti la nueva aventura extrema en motocicletas enduro. Desde aquí te podras registrar para ser parte de esta aventura el 1, 2 y 3 de Septiembre del 2022. Te esperamos.">
  <meta name="keywords"
    content="Mexiquillo Enduro 2022, Mexiquillo, Enduro, 2022, ruta mexiquillo, rutas, viaje a mexiquillo, motos enduro, cabras, cabras Durango, Durango - Mexiquillo, aventura, 1, 2, 3, septiembre, enduro cabras Durango, motoclub, uptrading experts">

  <link href="<?php echo e(asset('img/logo.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('img/logo.png')); ?>" rel="apple-touch-icon">

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="<?php echo e(url('/')); ?>" class="logo me-auto me-lg-0"><img src="<?php echo e(asset('img/logo.png')); ?>" alt=""
              class="img-fluid"></a>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
              <li><a class="nav-link scrollto" href="#reglamento">Reglamento</a></li>
              <li><a class="nav-link scrollto" href="#recomendaciones">Recomendaciones</a></li>
              <li><a class="nav-link scrollto" href="<?php echo e(url('/cabañas')); ?>">Cabañas</a></li>
              <li><a class="nav-link scrollto" href="#contacto">Contacto</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

          <a href="" class="get-started-btn scrollto" data-bs-toggle="modal"
            data-bs-target="#registerModal">Inscríbete</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="swiperHero d-flex flex-column justify-content-center pt-0">
    <div class="intro-content position-absolute">
      <div class="container">
        <div class="justify-content-center">
          <img src="<?php echo e(asset('img/logo.png')); ?>" alt="" class="hero-img">
          <h2>Sé parte de esta aventura</h2>
          <h5>1 · 2 · 3 Septiembre</h5>
          <a href="" class="btn btn-hero mb-4" data-bs-toggle="modal" data-bs-target="#registerModal">Inscríbete
            ahora</a>
          <div class="d-flex align-items-center justify-content-center">
            <h3 class="m-0 me-2">Powered by:</h3>
            <img class="sponsor-img-hero" src="<?php echo e(asset('img/cabraslogo.png')); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <div style="height: 150px; width: 100%; position: absolute; bottom: 0; z-index: 100">
      <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M-104.12,164.31 C-75.90,130.77 1.41,147.55 500.00,49.98 L500.00,150.00 L-10.44,162.34 Z"
          style="stroke: none; fill: #282828;">
        </path>
      </svg>
    </div>
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background: url(../img/hero11.jpg) top center;">
      </div>
      <div class="swiper-slide" style="background: url(../img/portada2.jpg) top center">
      </div>
      <div class="swiper-slide" style="background: url(../img/portada3.jpg) top center;">
      </div>
    </div>
  </section>


  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" style="position: relative; z-index: 10">
          <h2>Acerca de nosotros</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <div class="about-img">
              <img class="moto-about" src="<?php echo e(asset('img/moto2.png')); ?>" alt="">
            </div>
            <div class="info-about">
              <p>
                <b>Enduro Cabras Durango</b> es un motoclub de deporte de aventura y de
                competencia que ha participado en infinidad de rutas de aventura, por
                mencionar las más importantes del Norte del País son las siguientes:
              </p>
              <ul>
                <div class="d-flex">
                  <div class="me-2">
                    <li><i class="ri-check-double-line"></i>Ruta Durango Mazatlán</li>
                    <li><i class="ri-check-double-line"></i>Coahuila 1000</li>
                    <li><i class="ri-check-double-line"></i>Vallartazo</li>
                  </div>
                  <div>
                    <li><i class="ri-check-double-line"></i>Tarahumara VIP</li>
                    <li><i class="ri-check-double-line"></i>La Baja 1000</li>
                  </div>
                </div>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              En lo que de competencia se refiere participamos muy activamente
              con representación en el ANEN. Esta ruta Mexiquillo Enduro 2022, será nuestra primera edición oficial.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= sponsors Section ======= -->
    <section id="sponsors" class="sponsors pb-0">
      <div class="container">

        <div class="section-title">
          <h2>Nuestros patrocinadores</h2>
          <p>Revisa nuestros patrocinadores oficiales:</p>
        </div>

        <div class="row no-gutters sponsors-wrap clearfix wow fadeInUp justify-content-center">

          <div class="col-xl-12 col-12 justify-content-center">

            <div class="swiper mySwiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-1.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-2.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-3.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-4.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-5.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-6.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-7.jpeg" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-8.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-9.jpeg" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-10.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-11.jpg" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-slide d-flex align-items-center">
                  <div class="p-5"><img src="img/sponsors/sponsor-12.png" class="img-fluid" alt=""></div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End sponsors Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Inscripción</h2>
          <p>¿Qué incluye tu inscripción? revisa los detalles de nuestro kit oficial:</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-8 col-md-6 col-12 mt-2 mt-md-0 cont">
            <div class="box recommended shadow">
              <div class="imgs-container2">
                <img class="img-tierra" src="<?php echo e(asset('img/dirt.png')); ?>" alt="">
              </div>
              <div class="imgs-container">
                <img class="img-moto" src="<?php echo e(asset('img/moto.png')); ?>" alt="">
              </div>
              <div class="info-container">
                <span class="recommended-badge">Detalles</span>
                <h3>Kit oficial</h3>
                <h4><sup>$</sup><b>3,500</b><span> <b style="color: #000">/ piloto</b></span></h4>
                <ul>
                  <li><i class="ri-check-line"></i>Acceso a ruta GPS</li>
                  <li><i class="ri-check-line"></i>Jersey oficial</li>
                  <li><i class="ri-check-line"></i>Buff edición 2022</li>
                  <li><i class="ri-check-line"></i>Brazalete foleado total-access</li>
                  <li><i class="ri-check-line"></i>Sticker conmemorativo</li>
                  <li><i class="ri-check-line"></i>Regalos por parte de los patrocinadores</li>
                  <li><i class="ri-check-line"></i>Concierto de Rock en clausura del evento</li>
                  <li><i class="ri-check-line"></i>2 comidas diarias <a href="<?php echo e(url('/menu')); ?>" target="_blank">Revisa
                      el menú aquí.</a></li>
                  <li><i class="ri-check-line"></i>Puntos intermedios de hidratación</li>
                  <li><i class="ri-check-line"></i>Asistencia de primeros auxilios durante el trayecto</li>
                  <li><i class="ri-check-line"></i>Asistencia mecánica <b>(con costo para el piloto)</b></li>
                  <li class="text-secondary text-uppercase">(Cupo limitado)</li>
                  <li class="text-secondary text-uppercase">*Paquete solo ruta $1,500.00</li>
                  <li class="text-secondary text-uppercase">*Paquete ruta, jersey y buff $2,300.00</li>
                  <li class="text-secondary text-uppercase">*Invitados pagan $2,000.00 extra y tienen derecho a comidas
                    y evento de clausura</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy" data-bs-toggle="modal" data-bs-target="#registerModal"
                    style="text-decoration: none">Inscribirme</a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Faq Section ======= -->
    <section id="reglamento" class="faq mt-5">
      <div class="container">

        <div class="row justify-content-center">
          <div class="section-title">
            <h2>Reglamento</h2>
          </div>

          <div class="col-10">

            <h4>Aspectos generales</h4>

            <p class="text-justify">Este reglamento es una guía para poder participar en el "<b>Mexiquillo Enduro
                2022</b>"
              de
              una forma un tanto más
              organizada y sobre todo con más seguridad.
              Todos estamos conscientes del momento incierto en que vivimos en México y de los riesgos de accidentes
              físicos a los que estás expuesto al participar en este evento de deporte y aventura extremos en
              motocicleta
              enduro mismos que aceptamos, al participar en el "<b>Mexiquillo Enduro 2022</b>".
              Al registrarte daremos por hecho que leíste este reglamento y que estás de acuerdo en seguir todas las
              indicaciones, recomendaciones y observaciones en él inscritas.
            </p>

            <h4>Registro</h4>

            <ol>
              <li>Para poder participar en el “Mexiquillo Enduro 2022" deberás estar previamente inscrito en el
                registro
                de la misma. <b>NO SE ACEPTARÁN PARTICIPANTES QUE NO TENGAN NÚMERO DE REGISTRO</b>.</li>
              <li>Participación del Evento <b>LIMITADA</b>.</li>
              <li>No habrá ningún tipo de devoluciones <b>(SIN EXCEPCIÓN)</b>.</li>
              <li>La fecha de cierre de registro es el día viernes <b>19 de Agosto de 2022</b>.</li>
              <li>Favor de enviar tu comprobante de depósito para confirmar tu asistencia.</li>
            </ol>

            <h4>Mexiquillo Enduro 2022</h4>

            <ol>
              <li>Los participantes deberán estar debidamente inscritos en el registro de la misma y llevar las
                identificaciones oficiales de la ruta en su brazo casco y motocicleta, sólo se brindarán servicios de
                paquete
                de registro a las personas debidamente identificadas con brazalete de plástico y calcas de
                identificación proporcionadas.</li>
              <li>Cada participante es responsable de su seguridad.</li>
              <li>El piloto deberá llevar en todo momento su equipo de protección como casco, googles, peto y guantes.
              </li>
              <li>Por seguridad, la ruta se rodará en grupo con guías al frente y barredora con paramédicos atrás,
                además de contarse con apoyo mecánico menor.</li>
              <li>No se deberá adelantar a los guías de avanzada del grupo.</li>
              <li>Ningún participante se puede quedar atrás del grupo, su motoclub le deberá de dar el apoyo para
                continuar o llegar a algún punto de extracción seguro.</li>
              <li>Deberán llevar efectivo para recarga de gasolina extra en caso de requerir rellenar tanque, calcula
                rodar 80km. el primer día y el segundo día 140 y el tercero 50 km</li>
              <li>Es importante ir pendiente de tus compañeros de rodada, cerciorándose en cruceros o desviaciones que
                el que viene inmediatamente atrás de ti, tome el camino correcto.</li>
              <li>La ruta GPS les será entregada para su carga en los GPS durante la <b>JUNTA DE PILOTOS</b> que será el
                día jueves 9 AM durante el desayuno.</li>
              <li>Durante el trayecto, si no están seguros del camino a seguir, hay que
                esperar a algún guía o staff <b>QUE ESTÉ DEBIDAMENTE IDENTIFICADO</b>, que les pueda indicar el camino,
                por su seguridad y la de los que los puedan seguir.</li>
              <li>Queda prohibido rodar en caminos fuera de la ruta, deberán ir seguros que van por el camino correcto.
              </li>
              <li>Llevar siempre los faros encendidos para facilitar ver al de enfrente y al de atrás, si paran por
                algún motivo, salirse del paso de las demás motos.</li>
              <li>Habrá checkpoint que se utilizará para compactar grupo.</li>
              <li>En caso de de descompostura verificar con staff u organizadores la mejor manera de extraer su
                motocicleta.
              </li>
              <li>Sus motocicletas deberán estar en óptimas condiciones mecánicas para participar en la ruta, es su
                responsabilidad que así sea.</li>
              <li>No Habrá barredoras para extraer motocicletas averiados de la ruta, todo Endurero deberá ser
                autosuficiente y contar con el apoyo de sus compañeros de motoclub.</li>
              <li>No se recomienda ingerir bebidas alcohólicas durante el recorrido de la ruta.</li>
              <li>Es indispensable llevar una bolsa para deshechar tu basura durante la ruta, habrá un contenedor para
                dejarla en Mexiquillo.</li>
              <li>Se tendrá que seguir la ruta pre-establecida en el mapa de la ruta "intransferible" que se entregará
                el 01 de septiembre durante el registro.</li>
              <li><b>No podrán participar Cuatrimotos , UTV's o cualquier vehículo distinto a una motocicleta de
                  Enduro.</b></li>
            </ol>

            <h4>Responsabilidad</h4>

            <p>Respecto a su participación en el "<b>Mexiquillo Enduro 2022</b>", al efectuar el pago acepta
              implícitamente
              el participante los siguientes términos y condiciones:</p>

            <ol>
              <li>
                El Comité Organizador, los patrocinadores o miembros del staff, no son responsables por ningún retraso,
                accidente, gasto, inconveniencia o cualquier tipo en parte o totalmente de la negligencia de otros o de
                causas fuera de nuestro control.
              </li>
              <li>
                El Comité Organizador, los patrocinadores o miembros del staff, no podemos aceptar responsabilidad por
                pérdidas, gastos extraordinarios por causa de retrasos o cambios, contingencias terrestres, o servicios,
                enfermedad, eventos climáticos, huelgas, manifestaciones, guerras, asaltos, secuestros, cuarentenas,
                muerte o cualquier otra causa. Todos estos gastos extraordinarios o pérdidas en caso de que las hubiera,
                deberán ser cubiertas por los participantes, ya que los costos de nuestros servicios sólo incluyen
                algunos de los gastos regulares hechos durante el periodo del recorrido de el "<b>Mexiquillo Enduro
                  2022</b>"
                .
              </li>
              <li>
                El Comité Organizador se reserva el derecho de cambiar la ruta, por causas de fuerza mayor u otras.
              </li>
              <li>
                El Comité Organizador se reserva el derecho de declinar el registro de participación a cualesquier
                persona que esté afectando por cualquier razón, la operación normal de el "<b>Mexiquillo Enduro
                  2022</b>" , o
                afecte los derechos y bienestar de nuestros participantes.
              </li>
              <li>
                Aún cuando el Comité Organizador toma todas las posibles acciones, investigaciones y planeamiento para
                que su participación en el "<b>Mexiquillo Enduro 2022</b>" sea de lo más placentera y segura posible,
                dado las circunstancias por las que atraviesa México y las características de riesgo físico y de
                seguridad personal del deporte extremo de andar en motocicleta todo terreno, el Comité Organizador, sus
                patrocinadores o cualquier miembro del staff, no son responsables de cualquier accidente, daño físico o
                mental, incluyendo robo, asalto, secuestro, muerte u otros que pudieran sufrir los participantes durante
                el periodo de recorrido de el "<b>Mexiquillo Enduro 2022</b>" y al pagar o depositar el costo del
                registro en la misma, los participantes están aceptando todas las condiciones y términos de esta
                declaración de responsabilidades por parte del Comité Organizador.
              </li>
            </ol>

          </div>


        </div>

      </div>
    </section><!-- End Faq Section -->

    <!-- ======= Faq Section ======= -->
    <section id="recomendaciones" class="faq mt-5 mb-3">
      <div class="container">

        <div class="row justify-content-center">

          <div class="section-title">
            <h2>Recomendaciones</h2>
          </div>

          <div class="col-10">

            <h4>Recomendaciones personales</h4>

            <ol>
              <li>Lleva impermeable.</li>
              <li>Lleva todo tu equipo personal de protección.</li>
              <li>Hidrátate desde antes de la ruta.</li>
              <li>Lleva líquidos contigo para la ruta, hay muy pocas fuentes de abastecimiento.</li>
              <li>Dosifica bien tu esfuerzo son aproximadamente de 4 a 6 horas de camino cada día.</li>
              <li>Lleva algunos geles y bebidas energéticas.</li>
              <li>No pierdas de vista a tu grupo.</li>
              <li>Usa tu GPS, familiarízate con el antes de la ruta ó descarga la aplicación <b>Wikiloc</b> en tu
                celular.</li>
            </ol>

            <h4>Recomendaciones mecánicas</h4>

            <p>Por el tipo de ruta que es, con lugares bastante remotos y la importancia de no quedarse en la misma
              descompuesto por seguridad, les recomendamos revisar estos puntos y cuidar su motocicleta para poder
              llegar
              al punto de retorno.</p>

            <p>La seguridad física del piloto y equipo es primordial, ejerzan su sentido común, el “<b>Mexiquillo
                Enduro 2022</b>" <b>no es de competencia, es de saber llegar al destino con bien</b>.</p>


            <h4>Condición de tu motocicleta</h4>

            <ul>
              <li>Rodamientos (baleros) en perfecto estado.</li>
              <li>Motor en excelentes condiciones, (aceite, filtros y bujías nuevos).</li>
              <li>Cadena y sprockets en muy buen estado.</li>
              <li>Frenos funcionando muy bien.</li>
              <li>Llantas con más de media vida útil.</li>
              <li>Sistema de iluminación funcionando (una buena luz).</li>
              <li>Gasolina suficiente para completar recorrido del día.</li>
            </ul>

            <h4>Equipo personal</h4>

            <ul>
              <li>Casco.</li>
              <li>Googles.</li>
              <li>Guantes.</li>
              <li>Botas para motociclismo.</li>
              <li>Peto.</li>
              <li>Protección codos y rodillas.</li>
              <li>1 lt. (cuando menos) de agua para tomar.</li>
            </ul>

            <h4>Herramientas y accesorios</h4>

            <ul>
              <li>Kit para desponchar llantas (saber desmontar llanta).</li>
              <li>Bomba de aire eléctrica o de mano.</li>
              <li>Herramienta básica.</li>
              <li>GPS para seguir ruta (no habrá marcas físicas de ruta).</li>
              <li>Cuerda para remolcar motocicleta.</li>
            </ul>

          </div>
    </section><!-- End Faq Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="contacto">
    <div class="container">
      <img src="<?php echo e(asset('img/logo.png')); ?>" alt="" class="mb-3">
      <h3>Mexiquillo Enduro 2022</h3>
      <p>Ruta Mexiquillo Enduro 2022 (1, 2 y 3 de Septiembre)</p>
      <div class="social-links">
        <a href="https://www.facebook.com/Cabras-Enduro-Durango-1689610537957095" target="_blank" class="facebook"><i
            class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/endurocabrasdurango/" target="_blank" class="instagram"><i
            class="bx bxl-instagram"></i></a>
        <a href="mailto:mexiquilloenduro@uptradingexperts.com" class="instagram"><i class="bx bx-envelope"></i></a>
      </div>
      <div class="copyright">
        &copy; 2022 <strong><span>Mexiquillo Enduro</span></strong>. Todos los derechos reservados
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path
        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
  </svg>

  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Formulario de inscripción</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-primary-modal d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
              <use xlink:href="#info-fill" />
            </svg>
            <div>
              Llena todos los campos a continuación para registrarte:
            </div>
          </div>

          <form id="inscripcionForm" action="<?php echo e(URL::to('admin/addInscripcion')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
              <div class="col-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" title="Campo obligatorio / Solo letras" minlength="3"
                    maxlength="75" pattern="[a-zA-Zá-úÁ-Ú ]+" placeholder="Ingresa el nombre" id="nombreInput"
                    name="nombre" required>
                  <label for="nombreInput">Nombre completo</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" title="Campo obligatorio / Solo letras" minlength="3"
                    maxlength="75" placeholder="Ingresa el nombre del Motoclub" id="motoclubInput" name="motoclub"
                    required>
                  <label for="motoclubInput">Nombre del Motoclub</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" minlength="3" maxlength="10"
                    placeholder="Ingresa el teléfono de contacto" id="telefonoContactoInput" name="telefonocontacto"
                    required>
                  <label for="telefonoContactoInput">Teléfono de contacto</label>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" minlength="3" maxlength="10"
                    placeholder="Ingresa el teléfono de emergencia" id="telefonoEmergenciaInput"
                    name="telefonoemergencia" required>
                  <label for="telefonoEmergenciaInput">Teléfono de emergencia</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" minlength="3" maxlength="75"
                    placeholder="Ingresa tu correo electrónico" id="correoInput" name="correo" required>
                  <label for="correoInput">Correo electrónico</label>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <select name="talla" class="form-control" id="tallaInput" required>
                    <option value="" selected>Selecciona..</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                  </select>
                  <label for="tallaInput">Talla del jersey</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <select name="tiposangre" class="form-control" id="tipoSangreInput" required>
                    <option value="" selected>Selecciona..</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                  </select>
                  <label for="tipoSangreInput">Tipo de sangre</label>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <input type="date" class="form-control" placeholder="Ingresa tu fecha de nacimiento"
                    id="fechaNacInput" name="fechanac" required>
                  <label for="fechaNacInput">Fecha de nacimiento</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <select class="form-control" id="paqueteInput" name="paquete" required>
                    <option value="" selected>Selecciona..</option>
                    <option value="3500">Kit Oficial - $3,500.00</option>
                    <option value="2300">Solo ruta, jersey y buff (sin comidas) - $2,300.00</option>
                    <option value="1500">Solo ruta - $1,500.00</option>
                  </select>
                  <label for="paqueteInput">Tipo de paquete que deseas</label>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-floating mb-3">
                  <select class="form-control" id="invitadoInput">
                    <option value="" selected>Ningún invitado</option>
                    <option value="1">1 invitado (+$2,000.00)</option>
                    <option value="2">2 invitados (+$4,000.00)</option>
                    <option value="3">3 invitados (+$6,000.00)</option>
                    <option value="4">4 invitados (+$8,000.00)</option>
                    <option value="5">5 invitados (+$10,000.00)</option>
                  </select>
                  <label for="invitadoInput">¿Llevarás invitados? $2,000.00 por c/u</label>
                </div>
              </div>
            </div>
            <div class="row" id="contInvitados"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary-modal" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary-modal">Inscribirme ahora</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script src="js/main.js"></script>
  <script src="js/inscripcion.js"></script>
</body>

</html><?php /**PATH /home1/upnegoci/mexiquilloenduro.uptradingexperts.com/resources/views/layouts/index.blade.php ENDPATH**/ ?>