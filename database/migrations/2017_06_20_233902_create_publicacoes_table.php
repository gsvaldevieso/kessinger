<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('autores');
            $table->integer('ano');
            $table->integer('periodico_id');
            $table->string('area_atuacao');
            $table->string('titulo');
            $table->string('categoria');
            $table->binary('publicacao');
            $table->foreign('periodico_id')
                  ->references('id')->on('periodicos')
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
        Schema::dropIfExists('publicacoes');
    }
}
