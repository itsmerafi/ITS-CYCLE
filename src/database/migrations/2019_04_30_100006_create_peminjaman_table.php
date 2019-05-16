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
        Schema::create('pinjams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('users_id');
            $table->string('petugas_id')->nullable();
            $table->string('sepedas_id')->reference('id')->on('sepedas');
            $table->integer('pos_id')->reference('id')->on('pos');
            $table->timestamp('pinjams_tanggal_meminjam')->nullable();
            $table->timestamp('pinjams_tanggal_mengembalikan')->nullable();
            $table->string('pinjams_keterangan')->nullable();
            $table->string('pinjams_status')->nullable();
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
        Schema::dropIfExists('pinjams');
    }
}
