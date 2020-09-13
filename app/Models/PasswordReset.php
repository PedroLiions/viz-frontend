<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $primaryKey = 'token';

    const UPDATED_AT = null;

    protected $fillable = ['token', 'email'];
}
