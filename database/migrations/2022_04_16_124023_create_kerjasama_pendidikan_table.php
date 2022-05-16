<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjasamaPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerjasama_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('lembaga_mitra')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('judul_kegiatan_PS')->nullable();
            $table->string('manfaat')->nullable();
            $table->time('waktu_durasi')->nullable();
            $table->string('bukti_kerjasama')->nullable();
            $table->string('tahun')->nullable();
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
        Schema::dropIfExists('kerjasama_pendidikan');
    }
}
