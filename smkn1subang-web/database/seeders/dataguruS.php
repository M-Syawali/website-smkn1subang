<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PesertadidikS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesertadidik')->insert([
            'nis'=> '12100707',
            'namalengkap'=> 'Syawali',
            'jk'=>'L',
            'kelas'=>'11 - RPL - 1',
            'alamat'=>'Parigisari',
            'status'=>'Pelajar',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
        DB::table('pesertadidik')->insert([
            'nis'=> '121000808',
            'namalengkap'=> 'Egi',
            'jk'=>'L',
            'kelas'=>'11 - RPL - 1',
            'alamat'=>'Jujung',
            'status'=>'Pelajar',
            'created_at'=> date('Y-m-d H:i:s')
        ]);

   
        DB::table('pesertadidik')->insert([
            'nis'=> '12100202',
            'namalengkap'=> 'Arzenna',
            'jk'=>'L',
            'kelas'=>'11 - RPL - 1',
            'alamat'=>'Rancakandong',
            'status'=>'Pelajar',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
