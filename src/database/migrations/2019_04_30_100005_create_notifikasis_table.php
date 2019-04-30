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
            $table->char('petugas_id',5);
            $table->char('mahasiswas_id',14);
            $table->string('notifikasis_isi');
            $table->timestamp('notifikasis_waktu_kirim');
            $table->tinyInteger('notifikasis_status');
            // $table->char('notifikasi_petugas',5);
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
        Schema::dropIfExists('notifikasis');
    }
}
