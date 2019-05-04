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
            $table->engine = 'InnoDB';
            // $table->bigIncrements('id');
            $table->char('id',5);
            $table->char('pos_id',5);
            $table->string('petugas_nama');
            $table->string('petugas_password');
            $table->char('petugas_nomorhp',13);
            $table->string('petugas_alamat');
            $table->primary('id');
            // $table->timestamps();
            // ->reference('id')->on('kategori_wo')->unsigned()->nullable();
        });

        // Schema::table('petugas', function($table) {

        //     $table->foreign('pos_id')->references('id')->on('pos');
        // });
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
