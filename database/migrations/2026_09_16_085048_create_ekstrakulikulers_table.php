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
        Schema::create('ekstrakulikulers', function (Blueprint $table) {
            $table->uuid('id_ekstrakulikuler');
            $table->string('nama_eskul', 40);
            $table->string('pembina', 40);
            $table->string('jadwal', 40);
            $table->text('deskripsi');
            $table->string('gambar', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekstrakulikulers');
    }
};
