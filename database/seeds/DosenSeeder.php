<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($data = 1; $data <= 50; $data++){
            DB::table('data_dosen')->insert([
                'dosen_id'=> $faker->increments('id_ID'),
                'dosen_nama'=> $faker->namadosen,
                'dosen_alamat'=> $faker->alamatdosen,
                'dosen_jurusan'=> $faker->jurusandosen
            ]);
        }
    }
}
