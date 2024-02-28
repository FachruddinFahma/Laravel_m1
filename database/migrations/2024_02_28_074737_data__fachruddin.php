<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{




    public function up(): void
    {
        Schema::create('Mahasiswa', function (Blueprint $table) {
            $table->string('nim',10)->primary();
            $table->string('nama',25);
            $table->string('prodi',25);
            $table->string('alamat',50);
            $table->string('no_telp',15);
            $table->date('tgl_lahir');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
