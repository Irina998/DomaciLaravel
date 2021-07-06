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
            'Predmet' => 'ITEH',
            'Rezultat' => 'Polozio',
            'Student' => 11
            
        ]);
    }
}
