<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Buzon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('buzon');
        Schema::create('buzon', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('idBuzon');
            $table->string('titulo', 40);
            $table->string('descripcion', 100);
            $table->string('imagen', 100)->nullable();
            $table->date('fecha');
            $table->enum('estatus', ['no visto', 'visto', 'en proceso', 'finalizado']);
            $table->string('resueltoPor', 40)->nullable();
            $table->string('respuesta', 500)->nullable();

            // Llave foranea que conecta con id de 'usuario'
            $table->integer('usuario_idUsuario')->unsigned();

            // Llave foranea que conecta con id de 'usuario'
            $table->foreign('usuario_idUsuario')->references('idUsuario')->on('usuario')
            ->onDelete('cascade');

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
        Schema::dropIfExists('buzon');
    }
}
