<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RabbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rabbit')->insert([
            [
            'name'=>'Dzordzina',
            'born'=>'2022-07-21',
            'gender'=>'Female',
            ],
            [
            'name'=>'Brys',
            'born'=>'2022-10-12',
            'gender'=>'Male',
            ],
            [
            'name'=>'Balbina',
            'born'=>'2021-04-12',
            'gender'=>'Female',
            ]
        ]);
    }
}
