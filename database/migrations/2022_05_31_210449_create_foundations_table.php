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
        Schema::create('foundations', function (Blueprint $table) {
            $table->id();
            $table->string('nit_fundacion');
            $table->string('nombre_fundacion');
            $table->string('username_fundacion')->unique();
            $table->string('direccion_fundacion');
            $table->string('contacto_fundacion');
            $table->string('foto_fundacion');
            $table->string('email_fundacion')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password_fundacion');
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
        Schema::dropIfExists('foundations');
    }
};
