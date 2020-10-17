<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{

    public function permission()
    {
        $user = auth()->user();
    }

    public function menu()
    {
        $user = auth()->user();

        $pages = $user->pagesPivot->load('modules');

        return response($pages);
    }

}
