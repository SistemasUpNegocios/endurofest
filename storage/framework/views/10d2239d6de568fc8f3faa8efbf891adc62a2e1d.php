<?php
    
    $resumenReporte = DB::table('inscripcion')
        ->where('status_pago', 'Pagado')
        ->get();
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de inscripciones</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        hr {
            page-break-after: always;
            border: none;
            margin: 0;
            padding: 0;
        }

        .imgUP_superior {
            position: absolute;
            width: 320px;
            left: -45px;
            top: -46px;
        }

        table {
            text-align: center;
            justify-content: center
        }

        th {
            background-color: #B40090;
            color: white;
        }


        td {
            border: black 0.1px solid;
        }
    </style>
</head>

<body>
    <img class="imgUP_superior" src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo enduro">
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

                                    <th data-priority="0" scope="col">Teléfono de emergencia</th>

                                    <th data-priority="0" scope="col">Correo Electrónico</th>

                                    <th data-priority="0" scope="col">Talla</th>

                                    <th data-priority="0" scope="col">Tipo de sangre</th>

                                    <th data-priority="0" scope="col">Fecha de nacimiento</th>

                                    <th data-priority="0" scope="col">Cantidad de depósito</th>

                                    <th data-priority="0" scope="col">Status</th>

                                </tr>

                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $resumenReporte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resumenReporte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($resumenReporte->nombre); ?></td>

                                        <td><?php echo e($resumenReporte->motoclub); ?></td>

                                        <td><?php echo e($resumenReporte->telefono_contacto); ?></td>

                                        <td><?php echo e($resumenReporte->telefono_emergencia); ?></td>

                                        <td><?php echo e($resumenReporte->correo_electronico); ?></td>

                                        <td><?php echo e($resumenReporte->talla); ?></td>

                                        <td><?php echo e($resumenReporte->tipo_sangre); ?></td>

                                        <td><?php echo e(\Carbon\Carbon::parse($resumenReporte->fecha_nac)->toFormattedDateString()); ?>

                                        </td>

                                        <td><?php echo e($resumenReporte->cantidad_deposito); ?></td>

                                        <td><?php echo e($resumenReporte->status_pago); ?></td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>



                    </div>

                </div>



            </div>

        </div>

    </section>

</body>

</html>
<?php /**PATH C:\laragon\www\endurofest\resources\views/admin/imprimir.blade.php ENDPATH**/ ?>