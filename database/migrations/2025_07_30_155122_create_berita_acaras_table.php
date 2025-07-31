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
        Schema::create('berita_acaras', function (Blueprint $table) {
            $table->id();

            // Relasi ke devices
            $table->foreignId('it_asset_id')
                    ->constrained('devices')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            // Kolom lainnya
            $table->string('user');
            $table->string('unit');
            $table->string('kategori_layanan');
            $table->string('jenis_layanan');
            $table->text('detail_pekerjaan');
            $table->enum('status', ['Selesai', 'Diproses', 'Pending'])->default('Pending');
            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_acaras');
    }
};
