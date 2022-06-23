<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Regasistencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regasistencia', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Llave secundaria de tabla empleados
            $table->integer('NoEmp');
            $table->foreign('NoEmp')->references('NoEmp')->on('empleados');

            $table->date('f_entrada');
            $table->time('h_entrada');
            $table->date('f_salida');
            $table->time('h_salida');
            $table->string('adscripcion',50);
            $table->string('estatus',50);
            $table->string('placas_vehiculos',50);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regasistencia');
    }
}
