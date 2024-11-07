<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        // ]);

    $userData = [
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

        foreach ($userData as $key => $val) {
            # code..
            User::create($val);
        }
    }
}
