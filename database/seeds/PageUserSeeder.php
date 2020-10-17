<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_page = [
            [
                'user_id' => 1,
                'page_id' => 1,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1
            ]
        ];

        foreach ($user_page as $up) try {
            DB::table('page_user')->insert($up);
        } catch (Exception $exception) {
            continue;
        }
    }
}
