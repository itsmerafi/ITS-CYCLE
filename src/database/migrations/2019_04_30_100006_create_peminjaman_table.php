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
            // $table->bigIncrements('id');
            // $table->increments('id',11);
            $table->string('mahasiswas_id');
            $table->string('petugas_id');
            $table->integer('pos_id')->reference('id')->on('pos');
            $table->timestamp('peminjaman_tanggal_meminjam')->nullable();
            $table->timestamp('peminjaman_tanggal_mengembalikan')->nullable();
            $table->string('peminjaman_keterangan');
            $table->string('peminjaman_status');
            // $table->primary('id');
            // $table->timestamps();
        });

        // Schema::table('peminjaman', function($table) {
        //     $table->foreign('mahasiswas_id')->references('id')->on('mahasiswas');
        //     $table->foreign('petugas_id')->references('id')->on('petugas');
        //     $table->foreign('pos_id')->references('id')->on('pos');
        //     $table->foreign('sepedas_id')->references('id')->on('sepedas');
        // });
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
