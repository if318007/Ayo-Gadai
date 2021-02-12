<?php

use Illuminate\Database\Seeder;

class DataPerusahaanTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_perusahaan')->insert([
            'nama_perusahaan' => 'Ayo Gadai',
            'logo_perusahaan' => 'test.jpg',
            'biaya_admin' => 15000,
            'denda_per_hari' => 10000,
            'remember_token' => str_random(60),
        ]);
    }
}
