<?php

use App\Enums\ItemStatus;
use App\Enums\ReserveStatusEnum;
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
            $table->date('dateReservation')->useCurrent();
            $table->date('dateEmprunt')->nullable();
            $table->date('datePreuveReturn')->nullable();
            $table->date('dateDeReturn')->nullable();
            $table->enum('status', ReserveStatusEnum::getValues())->default(ReserveStatusEnum::ENATTEND);
            $table->unsignedBigInteger('etudiant_id');
            $table->foreign('etudiant_id')
            ->references('id')->on('users');
            $table->unsignedBigInteger('livre_id');
            $table->foreign('livre_id')
            ->references('id')->on('livres');
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
        Schema::dropIfExists('reservations');
    }
};
