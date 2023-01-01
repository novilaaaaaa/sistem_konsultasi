<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_dokter', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->foreign('pasien_id')->references('id')->on('pasien');
            $table->unsignedBigInteger('dokter_id');
            $table->foreign('dokter_id')->references('id')->on('dokter');
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
        Schema::dropIfExists('pasien_dokter');
    }
}
