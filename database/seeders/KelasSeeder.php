<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData = [
            [
             'kelas'=>'X 1'
            ],
            [
             'kelas'=>'X 2'
            ],
            [
             'kelas'=>'X 3'
            ],
            [
             'kelas'=>'XI 1'
            ],
            [
             'kelas'=>'XI 2'
            ],
            [
             'kelas'=>'XI 3'
            ],
            [
             'kelas'=>'XII 1'
            ],
            [
             'kelas'=>'XII 2'
            ],
            [
             'kelas'=>'XII 3'
            ],
        ];
        foreach($userData as $key => $val ){
          Kelas::create($val);
        }
    }
}
