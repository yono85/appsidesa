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
        Schema::create('tb_populations', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('no_kk');
            $table->string('name');
            $table->integer('gender');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('religion');
            $table->string('pendidikan_akhir');
            $table->string('pekerjaan');
            $table->string('gol_darah');
            $table->string('status_perkawinan');
            $table->string('status_dalam_keluarga');
            $table->string('kewarganegaraan');
            $table->string('status_hidup');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('dusun');
            $table->text('alamat');
            $table->text('foto');
            $table->tinyInteger('isdeleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_populations');
    }
};
