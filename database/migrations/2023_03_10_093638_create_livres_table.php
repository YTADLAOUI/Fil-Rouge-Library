<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->dateTime('datePublication');
            $table->integer('quantite_total');
            $table->integer('quantite_calcul');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')
                  ->references('id')->on('categories');
            $table->unsignedBigInteger('auteure_id');
            $table->foreign('auteure_id')
                  ->references('id')->on('auteures');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livres');
    }
};
