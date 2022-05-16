<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategikunciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategikunci', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->text('strategi_kunci');
            $table->string('tahun_mulai');
            $table->softDeletes();
            $table->string('tahun_akhir');
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
        Schema::dropIfExists('strategikunci');
    }
}
