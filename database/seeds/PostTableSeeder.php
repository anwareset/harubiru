<?php

use Illuminate\Database\Seeder;
use App\Posts;

class PostTableSeeder extends Seeder
{
    public function run()
    {
    	$posts = [
    		[
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
				'users_id' => '3',
				'hits' => '1'
    		],
    		[
    			'title' => 'The Second Post',
	            'content' => '
	            	<p><strong>Lorem ipsum dolor sit amet</strong></p>

					<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<p>&nbsp;</p>

					<p><em>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</em></p>

					<p>&nbsp;</p>

					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>

					<p>&nbsp;</p>

					<p><em><strong>id est laborum.</strong></em></p>',
				'thumbnail' => 'front/img/blog/single_blog_2.png',
				'category_id' => '4',
				'slug' => 'the-second-post',
				'users_id' => '3',
				'hits' => '10'
    		],
    		[
    			'title' => 'Ini Post Ketiga',
	            'content' => '
	            	<p><strong>Lorem ipsum dolor sit amet</strong></p>

					<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<p>&nbsp;</p>

					<p><em>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</em></p>

					<p>&nbsp;</p>

					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>

					<p>&nbsp;</p>

					<p><em><strong>id est laborum.</strong></em></p>',
				'thumbnail' => 'front/img/blog/single_blog_1.png',
				'category_id' => '3',
				'slug' => 'the-second-post',
				'users_id' => '2',
				'hits' => '5'
    		],
    		[
    			'title' => 'Wow HaruBiru Berhasil Terpasang',
	            'content' => '
	            	<p><strong>Lorem ipsum dolor sit amet</strong></p>

					<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<p>&nbsp;</p>

					<p><em>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</em></p>

					<p>&nbsp;</p>

					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>

					<p>&nbsp;</p>

					<p><em><strong>id est laborum.</strong></em></p>',
				'thumbnail' => 'front/img/blog/single_blog_4.png',
				'category_id' => '1',
				'slug' => 'the-second-post',
				'users_id' => '4',
				'hits' => '2'
    		]
    	];

    	foreach ($posts as $post) {
    		Posts::create($post);
    	}
    }
}