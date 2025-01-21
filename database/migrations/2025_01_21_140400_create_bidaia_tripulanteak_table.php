<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bidaia_tripulanteak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bidaiariak_id');
            $table->unsignedBigInteger('tripulanteak_id');
            $table->string('eginkizuna');
            $table->timestamps();

            $table->foreign('bidaiariak_id')->references('id')->on('bidaiariaks')->onDelete('cascade');
            $table->foreign('tripulanteak_id')->references('id')->on('tripulanteaks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidaia_tripulanteak');
    }
};
