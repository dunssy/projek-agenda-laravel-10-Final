<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guru = [
     
        [
           'nip'=>'12345',
           'nama'=>'Agung',
           'jenis_kelamin'=>'pria',
           'agama'=>'Islam',
           'username'=>'Rizki Billar',
           'email'=>'Gmail@gmail.com',
           'level'=>'admin',
           'password'=>bcrypt('122312'),
           'created_at'=>date('Y-m-d H-i-s')
        ],
        [
           'nip'=>'54321',
           'nama'=>'Ramadan',
           'jenis_kelamin'=>'pria',
           'agama'=>'Islam',
           'username'=>'Rama Billar',
           'email'=>'mail@gmail.com',
           'level'=>'admin',
           'password'=>bcrypt('00098'),
           'created_at'=>date('Y-m-d H-i-s')
        ],
        [
           'nip'=>'342351',
           'nama'=>'Dafik',
           'jenis_kelamin'=>'pria',
           'agama'=>'kristen',
           'username'=>'Dafik Billar',
           'email'=>'amail@gmail.com',
           'level'=>'guru',
           'password'=>bcrypt('10012'),
           'created_at'=>date('Y-m-d H-i-s')
        ],
            ];
        
       DB::table('guru')->insert($guru);
    }
}
