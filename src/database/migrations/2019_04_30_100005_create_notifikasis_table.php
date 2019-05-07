<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifikasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->increments('id',11);
            $table->string('petugas_id');
            $table->string('notifikasi_user');
            $table->string('notifikasis_isi');
            $table->timestamp('notifikasis_waktu_kirim');
            $table->tinyInteger('notifikasis_status');
            // $table->primary('id');
            // $table->char('notifikasi_petugas',5);
            // $table->timestamps();
        });

        // Schema::table('notifikasis', function($table) {
        //     $table->foreign('petugas_id')->references('id')->on('petugas');
        //     // $table->foreign('mahasiswas_id')->references('id')->on('mahasiswas');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifikasis');
    }
}
