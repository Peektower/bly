<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Red Seat',
                'code' => 'ETY755J',
                'slug' => 'red-seat',
                'category_id' => 1,
                'image' => 'red-seat.png',
                'description' => 'This is a well designed and crafted product that will suit many needs, in terms of quality, craftmanship and aesthetics.',
                'quantity' => 10,
                'price' => 200,
            ],

            [
                'name' => 'Dark Seat',
                'code' => 'DJFS-33D',
                'slug' => 'dark-seat',
                'category_id' => 1,
                'image' => 'dark-seat.jpg',
                'description' => 'This is a well designed and crafted product that will suit many needs, in terms of quality, craftmanship and aesthetics.',
                'quantity' => 15,
                'price' => 150,
            ],

            [
                'name' => 'Modern Bed',
                'code' => 'ERTF484',
                'slug' => 'modern-bed',
                'category_id' => 1,
                'image' => 'modern-bed.jpg',
                'description' => 'This is a well designed and crafted product that will suit many needs, in terms of quality, craftmanship and aesthetics.',
                'quantity' => 23,
                'price' => 500,
            ],

            [
                'name' => 'Modern Table',
                'code' => 'QPWOS89',
                'slug' => 'modern-table',
                'category_id' => 1,
                'image' => 'modern-table.png',
                'description' => 'This is a well designed and crafted product that will suit many needs, in terms of quality, craftmanship and aesthetics.',
                'quantity' => 15,
                'price' => 350,
            ],

            [
                'name' => 'Blue Seat',
                'code' => '1JSJ8SL',
                'slug' => 'blue-seat',
                'category_id' => 1,
                'image' => 'blue-seat.png',
                'description' => 'This is a well designed and crafted product that will suit many needs, in terms of quality, craftmanship and aesthetics.',
                'quantity' => 9,
                'price' => 190,
            ],



        ]);
    }
}
