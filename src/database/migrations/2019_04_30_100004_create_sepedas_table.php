<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSepedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepedas', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->char('id',5);
            $table->integer('pos_id')->reference('id')->on('pos')->unsigned();
            $table->string('sepedas_model');
            $table->date('sepedas_tanggal_beli');
            $table->string('sepedas_is_available',5);
            $table->primary('id');
            // $table->timestamps();
            // $table->integer('jabatan_id')->reference('id')->on('jabatan')->unsigned()->nullable();
        });

        // Schema::table('sepedas', function($table) {
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
        Schema::dropIfExists('sepedas');
    }
}
