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
             'kelas'=>'12'
            ],
            [
             'kelas'=>'11'
            ],
            [
             'kelas'=>'12'
            ],
        ];
        foreach($userData as $key => $val ){
          Kelas::create($val);
        }
    }
}
