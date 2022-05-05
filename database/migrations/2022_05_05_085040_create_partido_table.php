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
        Schema::create('partido', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha');
            $table->enum('Estado', ['Pendiente', 'Jugado', 'Anulado']);
            $table->unsignedBigInteger('visitante_id')
                    ->nullable();
            $table->unsignedBigInteger('local_id')
                    -> nullable();
            $table->unsignedBigInteger('resultado_id')
                    -> nullable();
            $table->foreign('visitante_id')
                    ->references('id')
                    ->on('equipo')
                    ->onDelete('set null');
            $table->foreign('local_id')
                    ->references('id')
                    ->on('equipo')
                    ->onDelete('set null');
            $table->foreing('resultado_id')
                    ->references('id')
                    ->on('resultado')
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
        Schema::dropIfExists('partido');
    }
};
