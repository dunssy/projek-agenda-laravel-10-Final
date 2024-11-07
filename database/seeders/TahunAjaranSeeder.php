<?php

namespace Database\Seeders;

use App\Models\TahunAjaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData = [
            [
             'ajaran'=>'01-01-2001'
            ],
            [
             'ajaran'=>'01-01-2002'
            ],
            [
             'ajaran'=>'01-01-2003'
            ],
            [
             'ajaran'=>'01-01-2004'
            ],
            [
             'ajaran'=>'01-01-2005'
            ],
            [
             'ajaran'=>'01-01-2006'
            ],
            [
             'ajaran'=>'01-01-2007'
            ],
            [
             'ajaran'=>'01-01-2008'
            ],
            [
             'ajaran'=>'01-01-2009'
            ],
        ];
        foreach($userData as $key => $val ){
          TahunAjaran::create($val);
        }
    }
}
