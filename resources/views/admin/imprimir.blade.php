@php
    
    $resumenReporte = DB::table('inscripcion')
        ->where('status_pago', 'Pagado')
        ->get();
    
@endphp


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
    <img class="imgUP_superior" src="{{ asset('img/logo.png') }}" alt="Logo enduro">
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
                                @foreach ($resumenReporte as $resumenReporte)
                                    <tr>
                                        <td>{{ $resumenReporte->nombre }}</td>

                                        <td>{{ $resumenReporte->motoclub }}</td>

                                        <td>{{ $resumenReporte->telefono_contacto }}</td>

                                        <td>{{ $resumenReporte->telefono_emergencia }}</td>

                                        <td>{{ $resumenReporte->correo_electronico }}</td>

                                        <td>{{ $resumenReporte->talla }}</td>

                                        <td>{{ $resumenReporte->tipo_sangre }}</td>

                                        <td>{{ \Carbon\Carbon::parse($resumenReporte->fecha_nac)->toFormattedDateString() }}
                                        </td>

                                        <td>{{ $resumenReporte->cantidad_deposito }}</td>

                                        <td>{{ $resumenReporte->status_pago }}</td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>
            </div>

        </div>

    </section>

</body>

</html>
