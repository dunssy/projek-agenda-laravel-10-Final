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
        Schema::create('guru', function (Blueprint $table) {
            $table->Integer('nip')->primary();
            $table->string('nama');
            $table->enum('jenis_kelamin',['pria','wanita']);
            $table->string('agama');
            $table->string('username');
            $table->string('email');
            $table->enum('level',['admin','guru']);
            $table->string('foto')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
