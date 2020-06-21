<?php

use Illuminate\Database\Seederx;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeederAddDefaultAdmin extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'administrator',
                'email' => 'admin@harubiru.test',
                'level' => '1',
                'password' => bcrypt('admin'),
                'bio' => 'Dominate nobody but yourself',
                'avatar' => 'assets/img/avatar/avatar-1.png'
            ],
            [
                'name' => 'Muhammad Tri Anwarruddin',
                'email' => 'anwar@harubiru.test',
                'level' => '0',
                'password' => bcrypt('Edibawer21'),
                'bio' => 'Ketidakpatuhan adalah pondasi sejati, mereka yang patuh pastilah budak.',
                'avatar' => 'assets/img/avatar/avatar-6.png'
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@harubiru.test',
                'level' => '0',
                'password' => bcrypt('Edibawer21'),
                'bio' => 'Gitu aja kok repot!',
                'avatar' => 'assets/img/avatar/avatar-2.png'
            ],
            [
                'name' => 'Mikail Bakunin',
                'email' => 'bakunin@harubiru.test',
                'level' => '0',
                'password' => bcrypt('Edibawer21'),
                'bio' => 'Viva la Anarchia',
                'avatar' => 'assets/img/avatar/avatar-7.png'
            ],
        ];

        DB::table('users')->insert($users);
    }
}
