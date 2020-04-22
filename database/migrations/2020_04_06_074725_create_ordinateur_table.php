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
            $table->decimal('taille')->nullable();
            $table->integer('poids')->nullable();
            $table->integer('disque')->nullable();
            $table->integer('sdd')->nullable();
            $table->string('graphique', 50);
            $table->integer('autonomie')->nullable();
            $table->integer('ram')->nullable();
            $table->string('systeme', 50);
            $table->string('dalle', 50);
            $table->boolean('tactile')->nullable();
            $table->string('resolution', 50);
            $table->string('marque', 50);
            $table->integer('usba')->nullable();
            $table->integer('usbc')->nullable();
            $table->integer('jack')->nullable();
            $table->integer('hdmi')->nullable();
            $table->integer('sd')->nullable();
            $table->integer('microsd')->nullable();
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
