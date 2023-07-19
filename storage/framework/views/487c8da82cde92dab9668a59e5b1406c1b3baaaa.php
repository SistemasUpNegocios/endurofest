<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="<?php echo e(url('/admin/inscripciones')); ?>" class="logo d-flex align-items-center">
            
            <span class="d-none d-lg-block">Administrador Mexiquillo Enduro 2022</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn menu-pc" id="btntog"></i>
        <a class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
            aria-controls="offcanvasExample">
            <i class="bi bi-list toggle-sidebar-btn menu-cel" id="btntog"></i>
        </a>
    </div>


    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span id="nombre" class="d-none d-md-block dropdown-toggle ps-2">
                        <?php echo e(auth()->user()->name); ?>

                    </span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>
                            <?php echo e(auth()->user()->name); ?>

                        </h6>
                        <span>
                            Usuario administrador
                        </span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="<?php echo e(url('/admin/logout')); ?>">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Cerrar sesión</span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>

</header>

<div class="sidebar-nav sidebar offcanvas offcanvas-start" tabindex="-1" id="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-heading">Menú</li>

        <li class="nav-item">
            <a class="<?php if(request()->is('admin/inscripciones')): ?> nav-link <?php else: ?> nav-link collapsed <?php endif; ?>"" href="<?php echo e(url('/admin/inscripciones')); ?>">
                <i class="bi bi-grid"></i>
                <span>Inscripciones</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo e(url('/admin/logout')); ?>">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Cerrar sesión</span>
            </a>
        </li>


    </ul>
</div><?php /**PATH /home1/upnegoci/mexiquilloenduro.uptradingexperts.com/resources/views/sidebar.blade.php ENDPATH**/ ?>