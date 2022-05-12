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
            $table->enum('Estado', ['Pendiente', 'Jugado', 'Anulado']);
            $table->foreignId('visitante_id')
                    ->constrained('equipos');
            $table->foreignId('local_id')
                    ->constrained('equipos');
            $table->foreignId('resultado_id')
                    ->constrained('resultados');
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
