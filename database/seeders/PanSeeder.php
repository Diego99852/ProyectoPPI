<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pan = [
            ['nombre' => 'Concha', 'precio' => 20.00],
            ['nombre' => 'dona', 'precio' => 16.00],
            ['nombre' => 'Mil hojas', 'precio' => 15.50],
        ];

        DB::table('pans')->insert($pan);
    }
    
}
