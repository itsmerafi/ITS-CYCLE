<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SepedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sepedas')->insert([
            ['id' => 'SP001', 'pos_id' => '1', 'sepedas_model' => 'WIMCYCLE','sepedas_is_available'=> 'Baik','sepedas_tanggal_beli'=>Carbon::parse('2019-01-01')],
            ['id' => 'SP002', 'pos_id' => '1', 'sepedas_model' => 'WIMCYCLE','sepedas_is_available'=> 'Baik','sepedas_tanggal_beli'=>Carbon::parse('2019-01-01')],
            ['id'=> 'SP003', 'pos_id' => '2', 'sepedas_model' => 'BMX','sepedas_is_available'=> 'Baik','sepedas_tanggal_beli'=>Carbon::parse('2019-01-01')],
        ]);
    }
}