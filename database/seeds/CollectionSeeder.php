<?php

use Illuminate\Database\Seeder;
use App\Collection;

class CollectionSeeder extends Seeder
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
                'name' => 'DOMINISS',
                'year' => '2019',
                'short_name' => 'dominiss',
            ]
        ];

        Collection::insert($data);
    }
}
