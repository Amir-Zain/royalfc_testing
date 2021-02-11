<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_teams', function (Blueprint $table) {
            $table->id();
            $table->text('team');
            $table->text('manager');
            $table->text('assist');
            $table->text('icon_player');
            $table->text('manager_image');
            $table->text('assist_image');
            $table->text('icon_player_image');
            $table->text('team_logo');
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
        Schema::dropIfExists('league_teams');
    }
}
