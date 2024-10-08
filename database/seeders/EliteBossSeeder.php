<?php

namespace Database\Seeders;

use App\Models\Boss;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelworlds;
use Illuminate\Database\Seeder;

class EliteBossSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Добавляет мировых боссов в БД
        Boss::insert([
            [
                'name' => 'Альфа Самец Ворлакс',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Альфа Самец Лес Морры',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Богатый Упырь Ворлакс',
                'type' => 'elite',
                'respawn' => '01:10:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' => 'Богатый Упырь Танцующий Лес',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Богатый Упырь Каталания',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Золотой Таракан',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Королева Термитов',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Пламярык',
                'type' => 'elite',
                'respawn' => '04:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Самка Жужа',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Советник Остина',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Тёмный Оракул',
                'type' => 'elite',
                'respawn' => '01:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Фараон',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Чёрная Вдова',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Хозяин 1-й этаж',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Хозяин 2-й этаж',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Превосходный пожиратель моземия',
                'type' => 'elite',
                'respawn' => '02:43:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Превосходный пожиратель элениума',
                'type' => 'elite',
                'respawn' => '02:43:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Пещерный Волк',
                'type' => 'elite',
                'respawn' => '01:48:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Мега Ирекс',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Лякуша',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Королевский паук',
                'type' => 'elite',
                'respawn' => '02:00:00',
                'time_to_death' => now()->subDays(5),
                'location_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
