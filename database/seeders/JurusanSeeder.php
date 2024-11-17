<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $userData = [
           [
            'jurusan'=>'RPL(1)'
           ],
           [
            'jurusan'=>'RPL(2)'
           ],
           [
            'jurusan'=>'TO(1)'
           ],
           [
            'jurusan'=>'TO(2)'
           ],
           [
            'jurusan'=>'AT(1)'
           ],
           [
            'jurusan'=>'AT(2)'
           ],
           [
            'jurusan'=>'TKJ(1)'
           ],
           [
            'jurusan'=>'TKJ(2)'
           ],
        ];

        foreach ($userData as $key => $val) {
            # code..
            // User::create($val);
            Jurusan::create($val);
        }

    }
}
