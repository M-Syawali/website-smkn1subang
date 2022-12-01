<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class datakelasS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datakelas')->insert([
            'namaeskul'=> 'Paskibra',
            'namapembina'=>'Asep',
            'jumlahsiswa'=>'80',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
        DB::table('datakelas')->insert([
            'namaeskul'=> 'Badminton',
            'namapembina'=>'Guntur',
            'jumlahsiswa'=>'40',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    
    
        
        DB::table('eskul')->insert([
            'namaeskul'=> 'Futsal',
            'namapembina'=>'Amet',
            'jumlahsiswa'=>'50',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
