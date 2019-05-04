<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->char('id',5);
            $table->char('petugas_id',5);
            $table->string('pos_lokasi');
            $table->string('pos_is_active');
            $table->integer('pos_jumlah_sepeda');
            $table->primary('id');
            // $table->timestamps();
        });

        // Schema::table('pos', function($table) {
        //     $table->foreign('petugas_id')->references('id')->on('petugas');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pos');
    }
}
