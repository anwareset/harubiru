<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Viral',
            'slug' => 'viral'
        ]);
    }
}
