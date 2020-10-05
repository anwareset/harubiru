<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
	    $this->call([
	    	UsersTableSeederAddDefaultAdmin::class,
	        SiteconfigTableSeederAddSiteName::class,
	        TagsTableSeeder::class,
	        CategoryTableSeeder::class,
	        PostTableSeeder::class,
	        PostsTagsTableSeeder::class

	    ]);
    }
}