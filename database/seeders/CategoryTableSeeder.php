<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'House',
                'slug' => 'house',
            ],
            [
                'name' => 'Accessories',
                'slug' => 'accessories',
            ],
            [
                'name' => 'Kitchen',
                'slug' => 'kitchen',
            ],
            [
                'name' => 'Kids',
                'slug' => 'kids',
            ],
            [
                'name' => 'Office',
                'slug' => 'office',
            ],


        ]);
    }
}
