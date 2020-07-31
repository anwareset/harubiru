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
    			'description' => 'Ini adalah deskripsi dari artikel yang akan anda baca. String dari deskripsi ini akan otomatis dipotong setelah 300 karakter.',
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
    			'description' => 'String dari deskripsi ini akan otomatis dipotong setelah 300 karakter. Ini adalah deskripsi dari artikel yang akan anda baca.',
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
    			'description' => 'Oke, saya kira menggunakan deskripsi dengan kolom yang berbeda memang terlihat kurang cerdas. Tapi apa daya, baru ini jalan yang saya temukan.',
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
				'slug' => 'ini-post-ketiga',
				'users_id' => '2',
				'hits' => '5'
    		],
    		[
    			'title' => 'Wow HaruBiru Berhasil Terpasang',
    			'description' => 'HaruBiru adalah sebuah CMS sederhana yang dibangun menggunakan PHP Web Framework Laravel.',
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
				'slug' => 'wow-harubiru-berhasil-terpasang',
				'users_id' => '4',
				'hits' => '2'
    		]
    	];

    	foreach ($posts as $post) {
    		Posts::create($post);
    	}
    }
}