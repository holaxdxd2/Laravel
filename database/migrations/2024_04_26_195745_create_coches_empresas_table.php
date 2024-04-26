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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('nombre completo');
            $table->string('Direccion');
            $table->string('Ciudad estado');
            $table->string('Estado');

            //creamos el campor para albergar la llave foranea
            $table->unsignedBigInteger('id_coche')->unique();
            $table->foreign('id_coche')
                ->references('id_coche')
                ->on('coches')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coches');
    }
};
