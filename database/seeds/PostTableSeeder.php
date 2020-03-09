<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Hello, World!',
            'content' => '
            	<p><strong>Lorem ipsum dolor sit amet</strong></p>

				<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

				<p>&nbsp;</p>

				<p><em>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</em></p>

				<p>&nbsp;</p>

				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>

				<p>&nbsp;</p>

				<p><em><strong>id est laborum.</strong></em></p>',
			'thumbnail' => 'assets/img/firstpost.png',
			'category_id' => '1',
			'slug' => 'hello-world',
			'users_id' => '1',
			'hits' => '1',
			'created_at' => Carbon\Carbon::now()
        ]);
    }
}
