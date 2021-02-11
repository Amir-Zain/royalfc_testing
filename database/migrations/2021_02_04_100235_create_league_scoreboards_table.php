<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueScoreboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_scoreboards', function (Blueprint $table) {
            $table->id();
            $table->text('team');
            $table->text('matches');
            $table->integer('wins');
            $table->integer('loss');
            $table->integer('draws');
            $table->integer('points');
            $table->integer('goal_difference');
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
        Schema::dropIfExists('league_scoreboards');
    }
}
