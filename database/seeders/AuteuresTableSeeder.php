<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuteuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auteures')->insert([
            ['nom' => 'Mohamed'],
            ['nom' => 'Ahmed'],
            ['nom' => 'Habib']
        ]);
    }
}
