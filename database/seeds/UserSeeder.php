<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Pedro',
                'email' => 'pedrolion1@hotmail.com',
                'password' => Hash::make('Acesso123#'),
            ],
            [
                'name' => 'Pedro',
                'email' => 'admin@hotmail.com',
                'password' => Hash::make('Acesso123#'),
            ],
        ];

        foreach ($users as $user) DB::table('users')->insert($user);

    }
}
