<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 


class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $month = [
            ['name'=>'January'],
            ['name'=>'February'],
            ['name'=>'March'],
            ['name'=>'April'],
            ['name'=>'May'],
            ['name'=>'June'],
            ['name'=>'July'],
            ['name'=>'August'],
            ['name'=>'September'],
            ['name'=>'October'],
            ['name'=>'November'],
            ['name'=>'Desember'],
        ];

        DB::table('month_names')->insert($month);
    }
}