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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_donac');
            $table->enum("tipo_donac",["insumos","efectivo"]);
            $table->integer('valor_donac')->nullable();
            $table->enum("produc_donacion",["Juguetes","Alimento","Productos de higiene","Medicamentos","Accesorios"])->nullable();
            $table->enum("medio_donac",["Efecty","Baloto","Nequi"]);
            $table->enum("estado_donac",["Recibida","En espera"]);
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
        Schema::dropIfExists('donations');
    }
};
