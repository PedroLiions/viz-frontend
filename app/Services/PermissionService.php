<?php

namespace App\Services;

use App\User;

class PermissionService
{
    public function hasPermission(
        string $page,
        string $permission
    )
    {
        $page_user = auth()->user()->pagesWithPivot()->where('name', $page)->first();

        if (! $page_user || ! $page_user->pivot->{$permission}) {
            abort(401, 'Você não tem permissão para acessar esses recursos.');
        }
    }
}
