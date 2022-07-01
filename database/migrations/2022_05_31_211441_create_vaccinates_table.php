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
        Schema::create('vaccinates', function (Blueprint $table) {
          
             
$table->id();
$table->string('dosis_vac');
$table->date('fecha_vac');
$table->unsignedBigInteger('id_pet')->nullable();
$table->foreign('id_pet')->references('id')->on('pets')->onUpdate('cascade')->onDelete('cascade');
$table->unsignedBigInteger('id_vaccine')->nullable();
$table->foreign('id_vaccine')->references('id')->on('vaccines')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('vaccinates');
    }
};
