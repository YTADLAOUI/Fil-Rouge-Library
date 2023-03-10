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
            $table->text('contant');
            $table->integer('livre_id');
            $table->foreignId('livre_id')
                  ->constrained('livres')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->integer('article_id');
            $table->foreignId('article_id')
                  ->constrained('articles')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
                
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
