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
        Schema::create('donasi_proyeks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_donasi');
            $table->foreign('id_donasi')->references('id')->on('donasis');
            $table->unsignedBigInteger('id_proyek');
            $table->foreign('id_proyek')->references('id')->on('proyek_masjids');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi_proyeks');
    }
};
