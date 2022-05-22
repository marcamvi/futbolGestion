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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha');
            $table->time('Hora');
            $table->string('Estado');
            $table->unsignedBigInteger('visitante_id')->nullable();
            $table->unsignedBigInteger('local_id')->nullable();
            $table->unsignedBigInteger('resultado_id')
                    ->nullable();
            $table->foreign('local_id')
                    ->references('id')->on('equipos')                    ->onDelete('set null');
            $table->foreign('visitante_id')
                    ->references('id')->on('equipos')                    ->onDelete('set null');
            $table->foreign('resultado_id')
                    ->references('id')->on('resultados')
                    ->onDelete('set null');
           

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
        Schema::dropIfExists('partidos');
    }
};
