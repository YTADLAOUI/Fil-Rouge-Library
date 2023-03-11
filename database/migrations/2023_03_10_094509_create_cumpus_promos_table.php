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
            $table->unsignedBigInteger('cumpuses_id');
            $table->foreign('cumpuses_id')
            ->references('id')->on('cumpuses');
            $table->unsignedBigInteger('promo_id');
            $table->foreign('promo_id')
            ->references('id')->on('promos');
            
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
