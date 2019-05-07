<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('users', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
        Schema::create('users', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('users_nama');
            $table->string('users_nomor_id')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->char('users_nomorhp',13);
            $table->string('users_alamat');
            $table->string('users_departemen')->nullable();
            $table->integer('isAdmin')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->primary('users_nomor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
