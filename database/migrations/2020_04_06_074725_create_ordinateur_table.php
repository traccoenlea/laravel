<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdinateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordinateur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('processeur', 50);
            $table->integer('taille');
            $table->integer('poids');
            $table->string('graphique', 50);
            $table->integer('autonomie');
            $table->integer('ram');
            $table->string('connectique', 50);
            $table->string('systeme', 50);
            $table->string('dalle', 50);
            $table->string('resolution', 50);
            $table->string('marque', 50);
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
        Schema::dropIfExists('ordinateur');
    }
}
