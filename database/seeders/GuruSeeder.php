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
        [
         'name'=>'Jhon Doe',
         'nip'=>'23111',
         'kelamin'=>'pria',
         'alamat'=>'Jl.Pesantren No.19,KM.89',
         'telp'=>'0099888',
         'tempat'=>'Cimahi',
         'username'=>'Ada Jhon disini',
         'email'=>'jhon@gmail.com',
         'agama'=>'islam',
         'level'=>'admin',
         'password'=>bcrypt('123123')  
         ],[
         'name'=>'Felix Cincau',
         'nip'=>'212221',
         'kelamin'=>'pria',
         'alamat'=>'Jl.Amir primuim No.19,KM.89',
         'telp'=>'099999',
         'tempat'=>'Ciwidey',
         'username'=>'Ada Cincau',
         'email'=>'felix@gmail.com',
         'agama'=>'islam',
         'level'=>'guru',
         'password'=>bcrypt('123123')  
         ],
         [
         'name'=>'Anisa',
         'nip'=>'209333',
         'kelamin'=>'wanita',
         'alamat'=>'Jl.Haji Bolot No.09,KM.10',
         'telp'=>'099999',
         'tempat'=>'Cilende',
         'username'=>'Anisa Say',
         'email'=>'anisa@gmail.com',
         'agama'=>'islam',
         'level'=>'guru',
         'password'=>bcrypt('123123')  
         ],
         [
         'name'=>'Alex Cawu',
         'nip'=>'111111',
         'kelamin'=>'pria',
         'alamat'=>'Jl.primuim No.01,KM.79',
         'telp'=>'666008',
         'tempat'=>'Cicingan',
         'username'=>'Cawu Goreng',
         'email'=>'alex@gmail.com',
         'agama'=>'kristen',
         'level'=>'admin',
         'password'=>bcrypt('123123')  
         ],
         [
         'name'=>'Imade in China',
         'nip'=>'0998901',
         'kelamin'=>'pria',
         'alamat'=>'Jl.Denpasaran NO.90,KM.77',
         'telp'=>'1233339',
         'tempat'=>'Bali',
         'username'=>'Imade',
         'email'=>'made@gmail.com',
         'agama'=>'hindu',
         'level'=>'guru',
         'password'=>bcrypt('123123')  
         ],                
         [
         'name'=>'Muhammad Abduh',
         'nip'=>'19740930',
         'kelamin'=>'pria',
         'alamat'=>'Jl.Ladang Laweh NO.88,KM.71',
         'telp'=>'08221460988',
         'tempat'=>'Padang',
         'username'=>'Abduh',
         'email'=>'abduh@gmail.com',
         'agama'=>'islam',
         'level'=>'guru',
         'password'=>bcrypt('123123')  
         ],             
            ];
      
            foreach ($guru as $key => $val) {
               # code..
               User::create($val);
            }
    }
}
