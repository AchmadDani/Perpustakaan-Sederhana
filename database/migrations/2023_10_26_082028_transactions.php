<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userIdPetugas'); // userIdPetugas
            $table->unsignedBigInteger('userIdPeminjaman'); // userIdPeminjaman
            $table->date('tanggalPinjam'); // tanggalPinjam
            $table->date('tanggalSelesai'); // tanggalSelesai
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
