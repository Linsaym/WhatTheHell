<?php

namespace Database\Seeders;

use App\Models\Boss;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelworlds;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class LocationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            [
                'name' => 'Иллаир'
            ]
        ]);
    }
}
