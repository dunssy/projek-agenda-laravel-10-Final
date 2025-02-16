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
            $table->foreign('id_g_mapel')->references('id')->on('g_mapel')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('g_mapel')->onDelete('cascade');
            $table->date('tgl');
            $table->string('jam');
            $table->text('materi');
            $table->string('absen');
            $table->text('keterangan');
            $table->string('file')->nullable();
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
