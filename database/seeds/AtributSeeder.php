<?php

use Illuminate\Database\Seeder;
use App\Atribut;

class AtributSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'type' => 'Модерация',
            ],
            [
                'type' => 'Нет в наличии',
            ],
            [
                'type' => 'Новинка',
            ],
            [
                'type' => 'Прокат',
            ],
            [
                'type' => 'Архив',
            ],
            [
                'type' => 'Топ',
            ]
        ];

        Atribut::insert($data);
    }
}
