<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DepartemenSeeder extends Seeder
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
        foreach (range(1,10) as $index) {

        	DB::table('departemens')->insert([

            'departemens_nama' => $faker->city,

        	]);

		}
    }
}
