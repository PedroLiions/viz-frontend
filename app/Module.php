<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function pages()
    {
        return $this->belongsToMany(Page::class);
    }
}
