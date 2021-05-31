<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'username')->unique()->change();
            //$table->string('username')->unique()->change();
            $table->dropColumn('email');
            $table->integer('score')->default(0);
        });

        Schema::create('lec_team', function(Blueprint $table) {
            $table->id();
            $table->string('acronym', 3);
            $table->string('name', 255);
        });

        Schema::create('lec_day', function(Blueprint $table) {
            $table->id();
            $table->timestamp('day');
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
