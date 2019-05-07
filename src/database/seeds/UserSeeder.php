<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        foreach (range(1,5) as $index) {
            // if($index<=3){
	           //  DB::table('users')->insert([
	        	// 'id' => 'PTG0'.$index,
	        	// 'pos_id' => $faker->randomDigitNotNull,
	            // 'name' => $faker->name,
	            // 'email' => $faker->email,
	            // 'password' => bcrypt('12345678'),
	            // 'users_nomorhp' => '08134567890'.$index,
	            // 'users_alamat' => $faker->address,
	            // 'users_departemen' => $faker->city,
	            // 'isAdmin' => 0,
	        	// ]);
	        // }
          //   else{
            	DB::table('users')->insert([
	        	// 'id' => 'PTG0'.$index,
	        	// 'pos_id' => $faker->randomDigitNotNull,
	            'users_nama' => $faker->name,
	            'users_nomor_id' => '0511164000000'.$index,
	            'password' => bcrypt('12345678'),
	            'users_nomorhp' => '08134567890'.$index,
	            'users_alamat' => $faker->address,
	            'users_departemen' => $faker->city,
	            // 'isAdmin' => 1,
            	]);
          //   }  
		}
    }
}



// $table->bigIncrements('id');
// $table->string('name');
// $table->string('email')->unique();
// $table->timestamp('email_verified_at')->nullable();
// $table->string('password');
// $table->rememberToken();
// $table->timestamps();