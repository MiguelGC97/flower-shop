<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class FlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flowers')->insert([
            ['species' => 'Daisy', 'color' => 'white'],
            ['species' => 'Rose', 'color' => 'red']
            ['species' => 'Tulip', 'color' => 'orange']
        ]);
    }
}