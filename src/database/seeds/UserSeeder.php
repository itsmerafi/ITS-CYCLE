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

        	DB::table('users')->insert([

            'users_nama' => $faker->name,
            'users_nomor_id' => '0511164000000'.$index,
            'password' => bcrypt('12345678'),
            'users_nomorhp' => '08134567890'.$index,
            'users_alamat' => $faker->address,
            'users_departemen' => $faker->city,

        	]);

		}
    }
}