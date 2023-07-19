

<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>Gestión de inscripciones</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Gestión de inscripciones</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body pt-3">
                    <table class="table table-striped table-bordered nowrap" id="inscripciones">
                        <thead>
                            <tr>
                                <th data-priority="0" scope="col">Nombre completo</th>
                                <th data-priority="0" scope="col">Motoclub</th>
                                <th data-priority="0" scope="col">Teléfono de contacto</th>
                                <th data-priority="0" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('preloader'); ?>
<div id="loader" class="loader">
    <h1></h1>
    <span></span>
    <span></span>
    <span></span>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<footer id="footer" class="footer">
    <div class="copyright" id="copyright">
    </div>
    <div class="credits">
        Todos los derechos reservados
    </div>
</footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\endurofest\resources\views/admin/show.blade.php ENDPATH**/ ?>