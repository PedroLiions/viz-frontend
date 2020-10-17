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
                'workspace_id' => 1
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@hotmail.com',
                'password' => Hash::make('Acesso123#'),
                'workspace_id' => 1
            ],
            [
                'name' => 'Daniel',
                'email' => 'dvillela@deepcenter.com.br',
                'password' => Hash::make('Gokussj4'),
                'workspace_id' => 1
            ],
            [
                'name' => 'Gabriel',
                'email' => 'gcamargo@deepcenter.com.br',
                'password' => Hash::make('Viz123#'),
                'workspace_id' => 1
            ],
            [
                'name' => 'Samuel',
                'email' => 'smonteiro@deepcenter.com.br',
                'password' => Hash::make('Viz123#')
            ]
        ];

        foreach ($users as $user) {
            try {
                DB::table('users')->insert($user);
            } catch (Exception $exception) {
                continue;
            }
        }

    }
}
