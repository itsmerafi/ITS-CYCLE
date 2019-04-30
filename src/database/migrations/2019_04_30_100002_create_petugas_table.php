<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pos_id');
            $table->string('petugas_nama');
            $table->string('petugas_password');
            $table->char('petugas_nomorhp',13);
            $table->string('petugas_alamat');
            // $table->timestamps();
            // ->reference('id')->on('kategori_wo')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
