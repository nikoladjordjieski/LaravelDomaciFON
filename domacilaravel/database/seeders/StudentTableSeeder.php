<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'Ime' => 'Milena',
            'Prezime' => 'Nikolic',
            'Broj indeksa' => '108/17',
            'Godina studija' => 'Prva'
        ]);
    }
}
