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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('dateReservation');
            $table->date('dateEmprunt');
            $table->date('datePreuveReturn');
            $table->date('dateDeReturn');
            $table->unsignedBigInteger('etudiant_id');
            $table->foreign('etudiant_id')
            ->references('id')->on('users');
            $table->unsignedBigInteger('livre_id');
            $table->foreign('livre_id')
            ->references('id')->on('livres');
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
        Schema::dropIfExists('reservations');
    }
};
