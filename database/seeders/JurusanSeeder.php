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
            'jurusan'=>'Rekayasa Perangkat Lunak'
           ],
           [
            'jurusan'=>'Teknik Komputer dan Jaringan'
           ],
           [
            'jurusan'=>'Teknik Sepeda Motor'
           ],
           [
            'jurusan'=>'Agriculture Tanaman'
           ],
           [
            'jurusan'=>'Teknik Sipil'
           ],
           [
            'jurusan'=>'Teknik Kendaraan Ringan'
           ],
           [
            'jurusan'=>'Teknik Alat Berat'
           ],
           [
            'jurusan'=>'Teknik Elektro'
           ],
        ];

        foreach ($userData as $key => $val) {
            # code..
            // User::create($val);
            Jurusan::create($val);
        }

    }
}
