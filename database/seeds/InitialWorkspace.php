<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitialWorkspace extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workspaces = [
            [
                'client' => 'DeepCenter'
            ]
        ];

        foreach ($workspaces as $workspace) try {
            DB::table('workspaces')->insert($workspace);
        } catch (Exception $exception) {
            continue;
        }

        $modules = [
            [
                'name' => 'dashboards'
            ],
            [
                'name' => 'users'
            ]
        ];

        foreach ($modules as $module) try {
            DB::table('modules')->insert($module);
        } catch (Exception $exception) {
            continue;
        }


        $module_workspace = [
            [
                'module_id' => 1,
                'workspace_id' => 1
            ]
        ];

        foreach ($module_workspace as $mw) try {
            DB::table('workspace_module')->insert($mw);
        } catch (Exception $exception) {
            continue;
        }

        $pages = [
            [
                'name' => 'Agents',
                'route' => 'dashboards/agents',
                'module_id' => 1
            ],
            [
                'name' => 'Best time',
                'route' => 'dashboards/best-time',
                'module_id' => 1
            ],
            [
                'name' => 'Diário',
                'route' => 'dashboards/daily',
                'module_id' => 1
            ],
            [
                'name' => 'Funil',
                'route' => 'dashboards/funnel',
                'module_id' => 1
            ],
            [
                'name' => 'Multi channel',
                'route' => 'dashboards/multi-channel',
                'module_id' => 1
            ],
            [
                'name' => 'Carteira',
                'route' => 'dashboards/portfolio',
                'module_id' => 1
            ],
            [
                'name' => 'Região',
                'route' => 'dashboards/region',
                'module_id' => 1
            ],
        ];

        foreach ($pages as $page) try {
            DB::table('pages')->insert($page);
        } catch (Exception $exception) {
            continue;
        }

        $module_page = [
            [
                'module_id' => 1,
                'page_id' => 1
            ],
            [
                'module_id' => 1,
                'page_id' => 2
            ]
        ];

        foreach ($module_page as $mp) try {
            DB::table('module_page')->insert($mp);
        } catch (Exception $exception) {
            continue;
        }




    }
}
