<?php

namespace Database\Seeders;

use App\Models\Boss;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelworlds;
use Illuminate\Database\Seeder;

class BossSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Добавляет мировых боссов в БД
        Boss::insert([
            [
                'name' => 'Архон',
                'type' => 'world',
                'respawn' => '04:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Баксбакуалануксивайе',
                'type' => 'world',
                'respawn' => '05:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Воко',
                'type' => 'world',
                'respawn' => '10:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Гигантская Тортолла',
                'type' => 'world',
                'respawn' => '05:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Денгур Кровавый топор',
                'type' => 'world',
                'respawn' => '05:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Деструктор',
                'type' => 'world',
                'respawn' => '05:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Древний Энт',
                'type' => 'world',
                'respawn' => '01:28:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Зверомор',
                'type' => 'world',
                'respawn' => '04:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Королева Крыс',
                'type' => 'world',
                'respawn' => '02:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Пружинка',
                'type' => 'world',
                'respawn' => '08:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Тёмный Шаман',
                'type' => 'world',
                'respawn' => '03:25:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Хьюго',
                'type' => 'world',
                'respawn' => '05:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Эдвард',
                'type' => 'world',
                'respawn' => '04:05:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
