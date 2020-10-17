<?php

namespace App\Http\Controllers;

use App\Module;
use App\Page;
use App\Services\PermissionService;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $permissionService;

    public function __construct(
        PermissionService $permissionService
    )
    {
        $this->permissionService = $permissionService;
    }

    public function all()
    {
        $this->permissionService->hasPermission('Agents', 'read');

        return User::get([
            'id',
            'name',
            'email'
        ]);
    }

    public function create()
    {
        try {
            DB::beginTransaction();
            $inputs = request()->all();

            $password = Hash::make($inputs['password']);

            $user = new User;
            $user->name = $inputs['name'];
            $user->password = $password;
            $user->email = $inputs['email'];
            $user->workspace_id = $inputs['workspace_id'];

            $pages = Page::get('id');

            $user_pages = [];

            foreach ($pages as $page) {
                $user_pages[$page->id] = [
                    'create' => true,
                    'read' => true,
                    'update' => true,
                    'delete' => true,
                ];
            }

            $user->save();
            $user->pages()->sync($user_pages);

            DB::commit();

            return $user->load('pagesWithPivot');
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception);
        }
    }

    public function pagesAndPermissions($user_id)
    {
        $user = User::find($user_id);

        $modulesAndPages = Module::all()->load('pages');

        $pagesOfUser = $user->pagesWithPivot->map(function ($page) {
            return [
                'page_id' => $page->id,
                'name' => $page->name,
                'route' => $page->route,
                'create' => $page->pivot->create,
                'update' => $page->pivot->update,
                'delete' => $page->pivot->delete,
                'read' => $page->pivot->read
            ];
        });

        return response([
            'modules_and_pages' => $modulesAndPages,
            'user_pages' => $pagesOfUser,
        ]);
    }


    public function destroy($id)
    {
        return User::where('id', $id)->destroy();
    }

    public function updateUser($user_id)
    {
        $this->permissionService->hasPermission('Usuários', 'update');

        $inputs = request()->all();

        $userDB = User::find($user_id);

        if (isset($inputs['user']['password'])) {
            $inputs['user']['password'] = Hash::make($inputs['user']['password']);
        }

        $userDB->fill($inputs['user']);
        $userDB->save();

        $pages_users = [];

        foreach ($inputs['pagesAndPermissions'] as $item) {
            $pages_users[$item['page_id']] = [
                'create' => $item['create'] ?? false,
                'update' => $item['update'] ?? false,
                'read' => $item['read'] ?? false,
                'delete' => $item['delete'] ?? false
            ];
        }

        $userDB->pages()->sync($pages_users);

        return [
            'message' => 'Save with success'
        ];
    }
}
