<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'News',
            'slug' => 'news'
        ]);
    }
}
