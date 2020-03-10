<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeederAddDefaultAdmin extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'administrator',
            'email' => 'admin@harubiru.test',
            'level' => '1',
            'password' => bcrypt('admin'),
            'bio' => 'Dominate nobody but yourself',
            'avatar' => 'assets/img/avatar/avatar-1.png'
        ]);
    }
}
