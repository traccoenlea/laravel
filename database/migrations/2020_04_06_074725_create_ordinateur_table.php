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
            $table->string('photo');
            $table->string('name');
            $table->string('processeur');
            $table->integer('taille');
            $table->integer('poids');
            $table->integer('disque')->nullable();
            $table->integer('sdd')->nullable();
            $table->string('graphique', 50);
            $table->integer('autonomie');
            $table->integer('ram');
            $table->string('systeme', 50);
            $table->string('dalle', 50);
            $table->integer('tactile');
            $table->string('resolution', 50);
            $table->string('marque', 50);
            $table->integer('usba');
            $table->integer('usbc');
            $table->integer('jack');
            $table->integer('hdmi');
            $table->integer('sd');
            $table->integer('microsd');
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
