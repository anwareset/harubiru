<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        $categories = [
        	['name' => 'News', 'slug' => 'news'],
        	['name' => 'GNU/Linux', 'slug' => 'gnu-linux'],
        	['name' => 'Networking', 'slug' => 'networking'],
        	['name' => 'Programming', 'slug' => 'programming']
        ];

        DB::table('categories')->insert($categories);
    }
}
