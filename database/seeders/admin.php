<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModeEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * 
     * @return void
     * Seed the application's database.
     */
    public function run()
    {
       DB::table('admis')->insert( [
            'name' => 'Rini',
            'kode' => 'tuvw',
        ]);
    }
}
