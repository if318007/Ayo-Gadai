<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

                [
                    'name' => 'David Muliadi Butarbutar',
                    'email' => 'muliadibutarbutar13@gmail.com',
                    'password' => bcrypt('butarbutar'),
                    'role' => 'Admin',
                    'status' => 'aktif',
                ],
                [
                    'name' => 'Karyawan',
                    'email' => 'karyawan@gmail.com',
                    'password' => bcrypt('karyawan'),
                    'role' => 'Karyawan',
                    'status' => 'aktif',
                ],
                [
                    'name' => 'Kurir',
                    'email' => 'kurir@gmail.com',
                    'password' => bcrypt('kurir'),
                    'role' => 'Kurir',
                    'status' => 'aktif',
                ],
                [
                    'name' => 'Nasabah',
                    'email' => 'nasabah@gmail.com',
                    'password' => bcrypt('nasabah'),
                    'role' => 'Nasabah',
                    'status' => 'aktif',
                ]

            ]);
    }
}
