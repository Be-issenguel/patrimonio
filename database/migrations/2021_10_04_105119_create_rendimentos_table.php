<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendimentos', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['SALARIAL', 'PRESTAÇÃO DE SERVIÇOS', 'LUCRO DE NEGÓCIO']);
            $table->double('montante', 11, 2);
            $table->string('mes');
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
        Schema::dropIfExists('rendimentos');
    }
}
