<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('nombre', 50);
            $table->string('apPaterno', 50);
            $table->string('apMaterno', 50)->nullable();
            $table->string('usuario', 30);
            $table->string('telefono', 15)->nullable();
            $table->string('correo', 50)->nullable();
            $table->string('password', 120);
            $table->enum('tipo', ['residente', 'cajero', 'jefe', 'gerente', 'corporativo']);
            $table->enum('estatus', ['activo', 'inactivo']);
            $table->string('noReferencia', 30)->nullable();
            $table->string('gallardete', 30)->nullable();
            $table->decimal('saldoxAplicar', 6, 2);
            $table->string('fotografia', 100)->nullable();
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
        Schema::dropIfExists('usuario');
    }
}
