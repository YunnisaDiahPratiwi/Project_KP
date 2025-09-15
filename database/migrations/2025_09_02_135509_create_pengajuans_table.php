<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('karyawan_id')->constrained()->onDelete('cascade');
            // Relasi ke devices
            $table->foreignId('it_asset_id')
                    ->constrained('devices')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('kategori_layanan');
            $table->text('detail_masalah');
            $table->enum('status', ['pending', 'diproses', 'selesai'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
