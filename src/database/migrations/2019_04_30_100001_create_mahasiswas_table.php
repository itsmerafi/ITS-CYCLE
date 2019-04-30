<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('mahasiswas_nrp',14)->unique();
            $table->string('mahasiswas_nama');
            $table->string('mahasiswas_password');
            $table->char('mahasiswas_nomorhp',13);
            $table->string('mahasiswas_alamat');
            $table->string('mahasiswas_departemen');
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
        Schema::dropIfExists('mahasiswas');
    }
}
