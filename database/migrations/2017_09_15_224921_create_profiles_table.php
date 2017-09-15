<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->string('full_name', 200);
            $table->string('address', 100)->nullable();;
            $table->integer('address_number')->nullable();;
            $table->string('cep', 10)->nullable();;
            $table->string('grade', 100)->nullable();;
            $table->string('area', 100)->nullable();;
            $table->string('cpf', 20)->nullable();;
            $table->string('nacionalidade')->nullable();;
            $table->integer('user_id');
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->increments('id');
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
        Schema::dropIfExists('profiles');
    }
}
