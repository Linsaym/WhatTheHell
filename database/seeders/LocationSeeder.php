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
                'id' => 1,
                'name' => 'Иллаир'
            ],
            [
                'id' => 2,
                'name' => 'Ворлакс',
            ],
            [
                'id' => 3,
                'name' => 'Лес Морры',
            ],
            [
                'id' => 4,
                'name' => 'Волчьи Ямы',
            ],
            [
                'id' => 5,
                'name' => 'Танцующий Лес',
            ],
            [
                'id' => 6,
                'name' => 'Каталания',
            ],
            [
                'id' => 7,
                'name' => 'Катакомбы 2-й этаж',
            ],
            [
                'id' => 8,
                'name' => 'Заброшенные шахты 1-й этаж',
            ],
            [
                'id' => 9,
                'name' => 'Прииск',
            ],
            [
                'id' => 10,
                'name' => 'Поселение разбойников',
            ],
            [
                'id' => 11,
                'name' => 'Пирамида 2-й этаж',
            ],
            [
                'id' => 12,
                'name' => 'Пещера Загров',
            ],
            [
                'id' => 13,
                'name' => 'Особняк кукольника 1-й этаж',
            ],
            [
                'id' => 14,
                'name' => 'Особняк кукольника 2-й этаж',
            ],
            [
                'id' => 15,
                'name' => 'Адамант',
            ],
            [
                'id' => 16,
                'name' => 'Торговый путь',
            ],
            [
                'id' => 17,
                'name' => 'Большой разлом',
            ],
            [
                'id' => 18,
                'name' => 'Тадано',
            ],
            [
                'id' => 19,
                'name' => 'Подземелье паутины',
            ],
        ]);
    }
}
