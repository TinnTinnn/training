<?php

namespace Database\Seeders;

use App\Http\Controllers\ItemController;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        $ctl = new ItemController();
        $data = [
            [
                'name' => 'Item 1',
                'description' => '1 description',
                'price' => 1000.40,
                'type' => 1,
                'status' => 1
            ],
            [
                'name' => 'Item 2',
                'description' => '2 description',
                'price' => 200.40,
                'type' => 2,
                'status' => 1
            ],
            [
                'name' => 'Item 3',
                'description' => '3 description',
                'price' => 300.40,
                'type' => 3,
                'status' => 1
            ],
            [
                'name' => 'Item 4',
                'description' => '4 description',
                'price' => 400.40,
                'type' => 4,
                'status' => 1
            ],
            [
                'name' => 'Item 5',
                'description' => '5 description',
                'price' => 500.40,
                'type' => 5,
                'status' => 1
            ]
        ];
    }
}
