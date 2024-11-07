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
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_g_mapel');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_mapel');
            $table->unsignedBigInteger('id_jurusan');
            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_g_mapel')->references('id')->on('g_mapel')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('g_mapel')->onDelete('cascade');
            $table->foreign('id_mapel')->references('id_mapel')->on('g_mapel')->onDelete('cascade');
            $table->foreign('id_jurusan')->references('id_jurusan')->on('g_mapel')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id_kelas')->on('g_mapel')->onDelete('cascade');
            $table->date('tgl');
            $table->string('jam');
            $table->text('materi');
            $table->string('absen');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};
