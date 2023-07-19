<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/logo.png')); ?>">
  <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon.ico')); ?>">
  <title>Inicia sesión | Administrador Mexiquillazo Enduro 2022</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">

  <link href="<?php echo e(asset('css/nucleo-icons.css')); ?>" rel="stylesheet" />

  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo e(asset('css/nucleo-svg.css')); ?>" rel="stylesheet" />
  <link id="pagestyle" href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('css/preloader.css')); ?>" rel="stylesheet">
  
  
</head>

<body class="">
  <div id="loader" class="loader">
    <h1></h1>
    <span></span>
    <span></span>
    <span></span>
  </div>

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain ">
                <div class="card-header pb-0 text-left bg-transparent">
                  <div class="d-flex align-items-center">
                    <img class="imgSubtitle" src="<?php echo e(asset('img/logo.png')); ?>" alt="">
                    
                  </div>
                  <h2 class="font-weight-bolder text-primary text-gradient mt-4 mb-0">Inicia sesión</h2>
                  <p class="mb-0">Ingresa tus datos para iniciar sesión</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="">
                    <?php echo csrf_field(); ?>

                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                      <symbol id="exclamation-triangle-fill" fill="#fff" viewBox="0 0 16 16">
                        <path
                          d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                      </symbol>
                    </svg>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                      </svg>
                      <div class="text-white">
                        Datos incorrectos, intenta de nuevo
                      </div>
                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <label class="labelForm">Correo electrónico</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Ingresa tu correo electrónico"
                        aria-label="Email" aria-describedby="email-addon" name="email" required>
                    </div>
                    <label class="labelForm">Contraseña</label>
                    <div class="mb-3">
                      <input id="passwordInput" type="password" class="form-control" placeholder="Ingresa la contraseña"
                        aria-label="Password" aria-describedby="password-addon" name="password" required>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" onclick="verPass()">
                      <label id="textCheck" class="form-check-label" for="rememberMe">Mostrar
                        contraseña</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0 btnSubmit">Iniciar
                        sesión</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                  style="background: url(<?php echo e(asset('img/hero8.jpg')); ?>)">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="<?php echo e(asset('js/login.js')); ?>"></script>
  <script src="<?php echo e(asset('js/preloader.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html><?php /**PATH C:\laragon\www\endurofest\resources\views/auth/index.blade.php ENDPATH**/ ?>