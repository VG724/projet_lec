<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('lec_match', function (Blueprint $table) {
            $table->integer('id_winner')->nullable()->change();
        });

        Schema::create('bet', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_lec_match');
            $table->integer('id_bet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bet');
    }
}
