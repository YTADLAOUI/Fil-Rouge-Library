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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->unsignedBigInteger('livre_id');
            $table->foreign('livre_id')
                  ->references('id')->on('livres')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
                  $table->unsignedBigInteger('etudiant_id');
            $table->foreign('etudiant_id')
            ->references('id')->on('users');

                
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
        Schema::dropIfExists('commentaires');
    }
};
