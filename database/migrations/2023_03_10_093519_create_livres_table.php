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
            $table->text('resume');
            $table->integer('quantite');
            $table->dateTime('dateEmprunt');
            $table->dateTime('dateRetour');
            $table->integer('categories_id');
            $table->foreignId('categories_id')
                  ->constrained('categories');
            $table->integer('auteure_id');
            $table->foreignId('auteure_id')
                  ->constrained('auteures');
            $table->integer('admin_id');
            $table->foreignId('admin_id')
                  ->constrained('users');
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
        Schema::dropIfExists('livres');
    }
};
