<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembagaMitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembaga_mitra', function (Blueprint $table) {
            $table->id();
            $table->string('lembaga_mitra')->nullable();
            $table->enum('tingkat', ['internasional', 'nasional', 'wilayah_lokal'])->nullable();
            $table->string('judul_kegiatan_kerja_sama')->nullable();
            $table->string('manfaat_bagi_yang_diakterditasi')->nullable();
            $table->time('waktu')->nullable();
            $table->string('durasi')->nullable();
            $table->string('bukti_kerjasama')->nullable();
            $table->string('tahun_berakhirnya_kerjasama')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('lembaga_mitra');
    }
}
