<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search()
    {
        $search = request()->get('search');

        return Page::where('name', 'like', "%$search%")
            ->limit(10)
            ->get(['id', 'name', 'route']);
    }

}
