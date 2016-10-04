<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->integer('gameId')->nullable();
            $table->date('startDate')->nullable();
            $table->integer('timeActive')->nullable();
            $table->integer('registeredPlayers')->nullable();
            $table->integer('registeredCodes')->nullable();
            $table->integer('prisesGiven')->nullable();
            $table->integer('playersLimit')->nullable();
            $table->string('state')->nullable();

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
        Schema::drop('campaigns');
    }
}
