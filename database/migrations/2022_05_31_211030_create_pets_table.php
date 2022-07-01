<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_masc',20);
            $table->string('edad_masc',20);
            $table->string('raza_masc',15);
            $table->string('tamaño_masc',20);
            $table->string('sexo_masc',10);
            $table->string('tipo_masc',20);
            $table->string('estado',20);
            $table->text('descripcion_masc');
            $table->string('foto_masc1');
            $table->string('foto_masc2');
            $table->string('foto_masc3');
            $table->string('foto_masc4');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pets');
    }
};
