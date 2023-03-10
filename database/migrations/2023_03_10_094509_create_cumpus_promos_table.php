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
        Schema::create('cumpus_promos', function (Blueprint $table) {
            $table->id();
            $table->integer('cumpuses_id');
            $table->foreignId('cumpuses_id')
            ->constrained('cumpuses');
            $table->integer('promo_id');
            $table->foreignId('promo_id')
            ->constrained('promos');
            
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
        Schema::dropIfExists('cumpus_promos');
    }
};
