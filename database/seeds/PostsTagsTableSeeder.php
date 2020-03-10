<?php

use Illuminate\Database\Seeder;

class PostsTagsTableSeeder extends Seeder
{
    public function run()
    {
        $posts_tags = [
        	['posts_id' => '1', 'tags_id' => '1'],
        	['posts_id' => '1', 'tags_id' => '2'],
        	['posts_id' => '2', 'tags_id' => '2'],
        	['posts_id' => '2', 'tags_id' => '3'],
        	['posts_id' => '3', 'tags_id' => '3'],
        	['posts_id' => '3', 'tags_id' => '4'],
        	['posts_id' => '3', 'tags_id' => '5'],
        	['posts_id' => '4', 'tags_id' => '1'],
        	['posts_id' => '4', 'tags_id' => '2'],
        	['posts_id' => '4', 'tags_id' => '3'],
        	['posts_id' => '4', 'tags_id' => '4'],
        ];

        DB::table('posts_tags')->insert($posts_tags);
    }
}
