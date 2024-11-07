<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
             'mapel'=>'Produktif'
            ],
            [
             'mapel'=>'Bahasa Sunda'
            ],
            [
             'mapel'=>'Bahasa Indonesia'
            ],
            [
             'mapel'=>'Bahasa Inggris'
            ],
            [
             'mapel'=>'Matematika'
            ],
            [
             'mapel'=>'Pendidikan Kewirausahaan'
            ],
            [
             'mapel'=>'Pendidikan Jasmani dan Rohani'
            ],
            [
             'mapel'=>'Pendidikan Kewernegaraan'
            ],
            [
             'mapel'=>'Informatika'
            ],
        ];
        foreach($userData as $key => $val ){
          Mapel::create($val);
        }
    }
}
