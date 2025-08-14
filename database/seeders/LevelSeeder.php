<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LevelModel;
use Monolog\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LevelModel::create([
            'name'=> 'A1'
        ]);

        LevelModel::create([
            'name'=> 'A2'
        ]);

        LevelModel::create([
            'name'=> 'B1'
        ]);

        LevelModel::create([
            'name'=> 'B2'
        ]);

        LevelModel::create([
            'name'=> 'C1'
        ]);

        LevelModel::create([
            'name'=> 'C2'
        ]);
    }
}
