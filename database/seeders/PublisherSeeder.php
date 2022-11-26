<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('publishers')->insert([
            [
                // 1
                'name' => 'Gramedia Pustaka Utama',
                'address' => 'Palmerah, Jakarta - Indonesia',
                'phone' => '02114732565',
                'email' => 'gpu@gmail.com',
                'image' => 'Gramedia-Pustaka-Utama-(GPU)-Logo-1-6426.jpg'
            ],
            [
                // 2
                'name' => 'PENERBIT SABAK GRIP',
                'address' => 'Kebun Jeruk, Jakarta - Indonesia',
                'phone' => '0214896277',
                'email' => 'psg@gmail.com',
                'image' => 'grip logo .jpg'
            ],
        ]);
    }
}
