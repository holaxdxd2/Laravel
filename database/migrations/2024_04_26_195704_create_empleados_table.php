<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coches', function (Blueprint $table) {
            $table->id('id_coche');
            $table->string('Numero de Licencia');
            $table->string('Año de Modelo');
            $table->string('Hacer');
            $table->string('password');
            $table->string('Modelo');
            $table->rememberToken();
            $table->timestamps();

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
