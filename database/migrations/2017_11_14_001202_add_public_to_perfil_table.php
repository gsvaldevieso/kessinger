<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPublicToPerfilTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('profiles', function (Blueprint $table) {
                $table->boolean('public')->default(true);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $table->dropColumn('active');
    }
}
