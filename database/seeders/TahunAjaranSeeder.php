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
             'ajaran'=>'01-01-2001',
             'status'=>'0'
            ],
            [
             'ajaran'=>'01-01-2002',
             'status'=>'0'
            ],
            [
             'ajaran'=>'01-01-2003',
             'status'=>'0'
            ],
            [
             'ajaran'=>'01-01-2004',
             'status'=>'0'
            ],
            [
             'ajaran'=>'01-01-2005',
             'status'=>'0'
            ],
            [
             'ajaran'=>'01-01-2006',
             'status'=>'0'
            ],
            [
             'ajaran'=>'01-01-2007',
             'status'=>'0'
            ],
            [
             'ajaran'=>'01-01-2008',
             'status'=>'0'
            ],
            [
             'ajaran'=>'01-01-2009',
             'status'=>'0'
            ],
        ];
        foreach($userData as $key => $val ){
          TahunAjaran::create($val);
        }
    }
}
