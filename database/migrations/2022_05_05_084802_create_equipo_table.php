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
        Schema::create('equipo', function (Blueprint $table) {
            $table->unsignedBigInteger('entidad_id');
            $table->foreign('entidad_id')
                    ->referencies('id')
                    ->on('entidad')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->id();
            $table->string('Nombre_equipo');
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
        Schema::dropIfExists('equipo');
    }
};
