<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        $tags = [
        	['name' => 'Arch', 'slug' => 'arch'],
        	['name' => 'Debian', 'slug' => 'debian'],
        	['name' => 'OpenWrt', 'slug' => 'openwrt'],
        	['name' => 'Laravel', 'slug' => 'laravel'],
        	['name' => 'XFCE', 'slug' => 'xfce'],
        ];

        DB::table('tags')->insert($tags);
    }
}
