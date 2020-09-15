<?php

use Illuminate\Database\Seeder;

class DekanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('data_dekan')->insert([
            'dekan_id' => '54358',
            'dekan_nama' => 'herdunlatihan',
            'dekan_jabatan' => 'DekanLatihan',
            'dekan_jurusan' => 'Nehnik',
            'dekan_umur' => '60',
            'dekan_alamat' => 'Randukurung'        
        ]);
    }
}
