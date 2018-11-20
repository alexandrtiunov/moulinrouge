<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
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
                'name' => 'Свадебные платья',
                'short_name' => 'wedding_dresses',
                'activity' => '1',
            ],
            [
                'name' => 'Вечерние платья',
                'short_name' => 'evening_dresses',
                'activity' => '1',
            ]
        ];

        Category::insert($data);
    }
}
