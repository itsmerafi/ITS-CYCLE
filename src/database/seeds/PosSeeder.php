<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Faker\Factory as Faker;

class PosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('pos')->insert([
            ['pos_lokasi' => 'Pintu Utama', 'pos_is_active' => 'Aktif', 'petugas_id' => '05111640000001','pos_jumlah_sepeda'=> 25],
            ['pos_lokasi' => 'Asrama', 'pos_is_active' => 'Aktif', 'petugas_id' => '05111640000002','pos_jumlah_sepeda'=> 25],
            ['pos_lokasi'=> 'Pintu Keluar ITS', 'pos_is_active' => 'Non-Aktif', 'petugas_id' => '05111640000003','pos_jumlah_sepeda'=> 25],
        ]);
    }
}