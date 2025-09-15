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
        Schema::table('pengajuans', function (Blueprint $table) {
            $table->unsignedBigInteger('it_asset_id')->after('karyawan_id')->nullable();
            $table->foreign('it_asset_id')->references('id')->on('devices')->onDelete('cascade');
            $table->dropColumn('it_asset');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengajuans', function (Blueprint $table) {
            $table->dropForeign(['it_asset_id']);
            $table->dropColumn('it_asset_id');
        });
    }

};
