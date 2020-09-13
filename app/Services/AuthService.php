<?php

namespace App\Services;

use App\Models\PasswordReset;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class AuthService
{
    public function generateToken($email)
    {
        $now = Carbon::now()->toDateTimeLocalString();

        $token = md5("$email $now");

        $userExist = User
            ::where('email', $email)
            ->exists();

        if (!$userExist) {
            return false;
        }

        PasswordReset::create([
            'email' => $email,
            'token' => $token,
        ]);

        return $token;
    }

    public function updatePasswordByToken(
        PasswordReset $passwordReset,
        string $password
    ): bool
    {
        $password = Hash::make($password);

        $passwordReset->used_at = Carbon::now();
        $passwordReset->save();

        return User::where([
            'email' => $passwordReset->email
        ])->update([
            'password' => $password
        ]);
    }
}
