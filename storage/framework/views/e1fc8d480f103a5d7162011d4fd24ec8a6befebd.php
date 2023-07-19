<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="theme-color" content="#282828">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Cabañas en Mexiquillo | Mexiquillo Enduro 2022</title>
    <meta name="description"
        content="La página web Mexiquillo Enduro 2022, tiene para ti cabañas en mexiquillo a un precio accesible, para que disfrutes de una aventura fantástica con tus seres queridos, puedes llamar ahora mismo a los números que se muestran en pantalla y puedes revisar la ubicación de la cabaña que más te guste.">
    <meta name="keywords"
        content="Cabañas, Mexiquillo, Cabañas en mexiquillo, ruta mexiquillo, rutas, viaje a mexiquillo, Durango - Mexiquillo, aventura, Durango, motoclub, uptrading experts">

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <a href="<?php echo e(url('/')); ?>" class="logo me-auto me-lg-0"><img src="<?php echo e(asset('img/logo.png')); ?>" alt=""
                            class="img-fluid"></a>

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li><a class="nav-link scrollto" href="<?php echo e(url('/')); ?>">Inicio</a></li>
                            <li><a class="nav-link scrollto" href="<?php echo e(url('/#reglamento')); ?>">Reglamento</a></li>
                            <li><a class="nav-link scrollto" href="<?php echo e(url('/#recomendaciones')); ?>">Recomendaciones</a></li>
                            <li><a class="nav-link scrollto active" href="<?php echo e(url('/cabañas')); ?>">Cabañas</a></li>
                            <li><a class="nav-link scrollto" href="<?php echo e(url('/#contacto')); ?>">Contacto</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->

                    <a href="" class="get-started-btn scrollto" data-bs-toggle="modal"
                        data-bs-target="#registerModal">Inscríbete</a>
                </div>
            </div>

        </div>
    </header><!-- End Header -->


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="<?php echo e(url('/')); ?>">Inicio</a></li>
                    <li>Cabañas en Mexiquillo</li>
                </ol>
                <h2 class="title-section">Cabañas en Mexiquillo</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="cabanas" class="container main-section pt-0">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <span class="tag">CENTRO CAMPESTRE SEDE</span>
                                <img src="<?php echo e(asset('img/cabanas/miranchito.jpg')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Rústicas Mi Ranchito</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>

                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Adolfo López Mateos S/N Col. Los Pinos, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6692405889" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/ccd2b2QomDwZecqF6" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/starita.webp')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Santa Rita</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Col. Centro cerca del Parque Mexiquillo, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6673035177" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/NHy1qZk9FXmR3rPp9" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/mirador.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">El Mirador de Mexiquillo</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas el Mirador de Mexiquillo, Juárez, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6751271862" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/JX9rtzhgJ5at7VKB9" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/losalamos.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Los Alamos</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Calle sin nombre a 50mts de entrada a Mexiquillo, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6751035526" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/Beq2Z45dazjaaqyB8" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/santamaria.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Santa María</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star-half-alt"></i></span><br>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas Santa María México 40, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:8713479292" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/khBZVBMbFwGSkjUNA" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/misierralinda.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Mi Sierra Linda</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Adolfo López Mateos S/N, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6692096420" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/jy2LwMctzHq4bW9T8" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/lalomita.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas La Lomita</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Adolfo López Mateos S/N, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6691908881" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/Ryg3nyw1ahnmGiZu9" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/lafogata.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas La Fogata</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Carretera Libre Durango-Mazatlán Km. 143, 34955 Mexiquillo, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6673245480" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/u4GXtzM8QQMXfNhs5" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/elranchero.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas El Ranchero</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Carretera Libre Durango-Mazatlán Km. 143, 34955 Mexiquillo, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6691120639" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/2Qr7BAmuevPYNF17A" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/encanto.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Encanto de la Montaña</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas Encanto de la Montaña, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6691506814" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/Sr8PN2i57XD5X68P6" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/rinconcito.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas El Rinconcito</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas El Rinconcito, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6751031744" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/t5r9bTVwMmX26gYY6" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/montealto.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Monte Alto</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Av. Adolfo López Mateos S/N, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6181839384" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/Ffb8TbzvSfMvuWgr7" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/montebello.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Monte Bello</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas Mexiquillo Av. Mexiquillo, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/BKdgQXKgnPp9TyQo7" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/hostalmexiquillo.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Hostal Mexiquillo</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Francisco Villa S/N Col. Centro, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6181385059" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/hcztptrKyM2DM8cXA" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/lospinos.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Los Pinos</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                        <span><i class="fas fa-star-half-alt"></i></span><br>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Mexiquillo Cabañas Los Pinos, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6693282316" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/GX8CEPDt3GKCfEPt7" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/alturas.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Alturas de Mexiquillo</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Parque Natural Mexiquillo Adolfo López Mateos S/N, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6674606661" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/xTF5GjD6UrFMfwxZA" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/bellaluna.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabaña Bella Luna</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabaña Bella Luna Mexiquillo 34224, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6693250178" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/smybmTnsmCgULAwH9" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/ojedas.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabaña Ojeda's</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Calle Pueblo Nuevo, 34941 Mexiquillo, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/62vRkMjcHS11ayR87" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/elcomedero.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas El Comedero</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas El Comedero, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6681568794" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/FwSkyPeM1yHJik4h6" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/parque.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Parque Natural Mexiquillo</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star-half-alt"></i></span><br>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Parque Natural Mexiquillo, 34941 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6758770048" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/nvmFmE4Y81xDoraV8" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/villasbosque.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Villas del Bosque Mexiquillo</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Villas del Bosque Mexiquillo, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6751050505" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/aPUBpci69UUYShgY9" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/villascoronado.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Villas de Coronado</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas Villa de Coronado, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6691016030" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/STd87UNmotSnRs256" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/california.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabaña California</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabaña California, 34954 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6182247640" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/183WMkPmEguNPuMr9" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/3encinos.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Los 3 Encinos</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas Los 3 Encinos, 34954 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/9aAa2aWsGnqyjpz59" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/praderaverde.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Pradera Verde</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas Pradera Verde Pueblo Nuevo, 34954 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6758715501" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/Ae8DnzgyVaMGg3e19" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/chiricahua.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabaña Chiricahua</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">A 80mts de entrada a Parque Natural Mexiquillo, 34954 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6691101031" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/EndiyKY1UBA9jAFa8" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/quintoelemento.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Quinto Elemento</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas Quinto Elemento, 34954 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6691060468" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/VWQuRUmbpqQYp6Po9" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/laescondida.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas La Escondida</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Carretera Libre Durango-Mazatlán km 143, 34954 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6675778917" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/bghkMJxgimVEqWYr6" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/laconsentida.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabaña La Consentida</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Adolfo López Mateos, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6692731641" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/TpkeKLwVURsJdz1D8" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/puertademexiquillo.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">La puerta de Mexiquillo</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas la Puerta de Mexiquillo, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6181867211" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/i9C5sHeXbQQfqftj9" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/mazatleca.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabaña la Mazatleca</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Calle sin nombre Colonia Industrial, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6692640095" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/mPf3TKXdBN4gpmMs5" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/lajoyita.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabaña La Joyita</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabaña La Joyita Mexiquillo, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6751129048" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/CT8vx8Y5XFh8i4M58" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/montana.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas Montana</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabaña Montana Mexiquillo, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6692523506" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/pADgKA7j49F6cwN88" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/elcapitan.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas El Capitán</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas El Capitán México 40 S/N, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6671341004" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/bF98QhkJVJQNf9Mr5" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/elcampero.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas El Campero</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas El Campero, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6181548226" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/BAD99r71sPDAnoFU9" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/laroca.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabaña La Roca</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabaña La Roca Mexiquillo, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/kopBRj7GDjy2tpaC9" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/amarilla.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabaña Amarilla</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabaña Amarilla Mexiquillo, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6673896006" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/bGGg6C8DNgabgRXt7" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/lasierra.png')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabañas La Sierra</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabañas La Sierra, 34957 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="https://maps.app.goo.gl/uYSXWvGMZ9siUyWQ6" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="section border bg-white rounded p-2">
                        <div class="row">
                            <div class="col-lg-12 img-section">
                                <img src="<?php echo e(asset('img/cabanas/miramonte.jpg')); ?>"
                                    class="p-0 m-0 res-ponsive img-prop">
                            </div>
                            <div class="col-lg-12 sectin-title">
                                <h1 class="pt-2 mb-0">Cabaña MiraMonte</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 text-right">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-12 section-detail">
                                <p class="ml-2">Cabaña San José 1122, 34955 La Ciudad, Dgo.</p>
                                <hr>
                            </div>
                            <div class="col-lg-12 pb-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="tel:6673564434" class="btn btn-block btn-sm btn-prop call"><i
                                                class='bx bx-phone-call me-1'></i>Llama ahora</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="https://goo.gl/maps/EDXzahqQU1ZYNUh8A" target="_blank"
                                            class="btn btn-block btn-sm btn-prop map"><i class='bx bx-map me-1'></i>Ver
                                            en el mapa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="contacto">
        <div class="container">
            <img src="<?php echo e(asset('img/logo.png')); ?>" alt="" class="mb-3">
            <h3>Mexiquillo Enduro 2022</h3>
            <p>Ruta Mexiquillo Enduro 2022 (1, 2 y 3 de Septiembre)</p>
            <div class="social-links">
                <a href="https://www.facebook.com/Cabras-Enduro-Durango-1689610537957095" target="_blank"
                    class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/endurocabrasdurango/" target="_blank" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="mailto:mexiquilloenduro@uptradingexperts.com" class="instagram"><i
                        class="bx bx-envelope"></i></a>
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

    <script src="js/main2.js"></script>
    <script src="js/inscripcion.js"></script>
</body>

</html><?php /**PATH /home2/endurofe/mexiquillazo/resources/views/layouts/cabanas.blade.php ENDPATH**/ ?>