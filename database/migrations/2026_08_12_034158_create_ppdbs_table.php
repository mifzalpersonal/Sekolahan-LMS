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
        Schema::create('ppdbs', function (Blueprint $table) {
            
            $table->id();
            $table->string('nisn', 10)->unique();
            $table->string('nik', 16);
            $table->string('nama');
            $table->enum('kelamin', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->text('alamat');
            $table->string('nomor_hp_siswa');

            
            // pemisah aja antara orang tua ama murid
            
            $table->string('nama_ortu');
            $table->string('nomor_hp_ortu');
            
            //keterangan sekolah
            
            $table->string('asal_sekolah');
            $table->string('jurusan');
            $table->enum('status', ['terverifikasi', 'belumverif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdbs');
    }
};
