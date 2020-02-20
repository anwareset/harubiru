<?php

use Illuminate\Database\Seeder;

class SiteconfigTableSeederAddSiteName extends Seeder
{
    public function run()
    {
        DB::table('sites')->insert([
            'sitename' => 'HaruBiru'
        ]);
    }
}
