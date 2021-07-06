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
            'Ime' => 'Pera',
            'Prezime' => 'Peric',
            'Broj indeksa' => '18/17',
            'Godina studija' => 'Druga',
            'Pol' => 'M'
        ]);
    }
}
