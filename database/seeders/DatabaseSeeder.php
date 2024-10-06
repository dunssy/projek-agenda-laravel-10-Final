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
            'email'=>'Jhon@gmail.com',
            'level'=>'admin',
            'password'=>bcrypt('123123')  
            ],
            [
            'name'=>'Kira Yos',
            'email'=>'kira@gmail.com',
            'level'=>'kepsek',
            'password'=>bcrypt('123123')  
            ],
            [
            'name'=>'Asep Dahlah',
            'email'=>'asep@gmail.com',
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
