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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('name');
            $table->Integer('nip')->nullable();
            $table->string('kelamin')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->string('username')->nullable(); 
            $table->string('password');
            $table->string('tempat')->nullable();
            $table->date('tgl')->nullable();
            $table->string('agama')->nullable();
            $table->string('email')->unique();
            $table->string('foto')->nullable();
            $table->enum('level',['admin','guru','kepsek'])->default('admin');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
