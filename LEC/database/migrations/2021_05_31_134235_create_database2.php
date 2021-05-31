<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabase2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lec_match', function(Blueprint $table) {
            $table->id();
            $table->foreignId('day_id')->constrained('lec_day');
            $table->foreignId('team1_id')->constrained('lec_team');
            $table->foreignId('team2_id')->constrained('lec_team');
            $table->foreignId('winner_id')->nullable()->constrained('lec_team');
        });

        Schema::create('lec_bet', function(Blueprint $table) {
            $table->id();
            $table->integer('score');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('lec_match_id')->constrained('lec_match');
            $table->foreignId('winner_id')->constrained('lec_team');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
