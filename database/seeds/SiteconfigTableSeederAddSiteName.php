<?php

use Illuminate\Database\Seeder;

class SiteconfigTableSeederAddSiteName extends Seeder
{
    public function run()
    {
        DB::table('sites')->insert([
            'sitename' => 'HaruBiru',
            'logo' => 'front/img/HaruBiru.png',
            'about' => '<p>This is HaruBiru blog!</p>'
        ]);
    }
}
