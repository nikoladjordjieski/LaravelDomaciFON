<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class IspitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ispits')->insert([
            'Predmet' => 'Milena',
            'Rezultat' => 'Nikolic',
            'Student' => 1
            
        ]);
    }
}
