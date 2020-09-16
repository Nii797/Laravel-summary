<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class DekanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 200; $i++){
            DB::table('data_dekan')->insert([
                'dekan_id' => $faker->phoneNumber,
                'dekan_nama' => $faker->name,
                'dekan_jabatan' => $faker->jobTitle,
                'dekan_jurusan' => $faker->email,
                'dekan_umur' => $faker->numberBetween(25,40),
                'dekan_alamat' => $faker->country        
            ]);
        }    
    }
}
