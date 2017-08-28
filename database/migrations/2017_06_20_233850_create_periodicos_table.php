<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('issn');
            $table->binary('imagem');
            $table->string('area_atuacao');
            $table->string('fator_impacto');
            $table->string('qualis');
            $table->mediumText('descricao');
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
        Schema::dropIfExists('periodicos');
    }
}
