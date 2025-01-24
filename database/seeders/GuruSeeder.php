<?php

namespace Database\Seeders;

use App\Models\User;
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
           'name'=>'Ahmad Maulidun',
           'kelamin'=>'pria',
           'alamat'=>'Jl.Ladang Laweh NO.88,KM.71',
           'telp'=>'08221460988',
           'tempat'=>'sumatera',
           'tgl'=>date('Y-m-d H-i-s'),
           'agama'=>'Islam',
           'username'=>'Ahmad Maulidun',
           'email'=>'admin@gmail.com',
           'level'=>'admin',
           'password'=>bcrypt('123456'),
        ],
        [
           'nip'=>'54321',
           'name'=>'Ramadan',
           'kelamin'=>'pria',
           'alamat'=>'Jl.Kalamang Kelimang 8KM No 7',
           'telp'=>'008979889',
           'tempat'=>'jawa',
           'tgl'=>date('Y-m-d H-i-s'),
           'agama'=>'Islam',
           'username'=>'Ramadhan Sah',
           'email'=>'guru@gmail.com',
           'level'=>'guru',
           'password'=>bcrypt('123456'),
        ],
        [
           'nip'=>'342351',
           'name'=>'Krisna',
           'kelamin'=>'pria',
           'alamat'=>'Jl.Kalensaid Kemadi 9KM No 8',
           'telp'=>'008979889',
           'tempat'=>'kalimantan',
           'tgl'=>date('Y-m-d H-i-s'),
           'agama'=>'kristen',
           'username'=>'Krisna diansah',
           'email'=>'krisna@gmail.com',
           'level'=>'guru',
           'password'=>bcrypt('123456'),
        ],
            ];
      
            foreach ($guru as $key => $val) {
               # code..
               User::create($val);
            }
    }
}
