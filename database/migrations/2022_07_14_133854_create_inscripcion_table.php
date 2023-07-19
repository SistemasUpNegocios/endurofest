<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 150);
            $table->string('motoclub', 150);
            $table->unsignedBigInteger('telefono_contacto');
            $table->unsignedBigInteger('telefono_emergencia');
            $table->string('correo_electronico', 150);
            $table->enum('talla', ['S', 'M', 'L', 'XL', 'XXL']);
            $table->enum('tipo_sangre', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']);
            $table->date('fecha_nac');
            $table->double('cantidad_deposito');
            $table->string('invitado1', 150)->nullable();
            $table->string('invitado2', 150)->nullable();
            $table->string('invitado3', 150)->nullable();
            $table->string('invitado4', 150)->nullable();
            $table->string('invitado5', 150)->nullable();
            $table->enum('status_pago', ['Pendiente', 'Pagado'])->default('Pendiente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion');
    }
}
