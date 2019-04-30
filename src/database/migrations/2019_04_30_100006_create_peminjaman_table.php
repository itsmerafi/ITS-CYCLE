<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('mahasiswas_id',14);
            $table->char('petugas_id',5);
            $table->char('sepedas_id',5);
            $table->char('pos_id',5);
            $table->timestamp('peminjaman_tanggal_meminjam')->nullable();
            $table->timestamp('peminjaman_tanggal_mengembalikan')->nullable();
            $table->string('peminjaman_keterangan');
            $table->string('peminjaman_status');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
