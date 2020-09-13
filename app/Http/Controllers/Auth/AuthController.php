<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RecoveryPassword;
use App\Models\PasswordReset;
use App\Services\AuthService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    private $authService;

    /**
     * Create a new AuthController instance.
     *
     * @param AuthService $authService
     */
    public function __construct(
        AuthService $authService
    )
    {
        $this->middleware('auth:api', ['except' => ['login', 'generateToken', 'updatePassword']]);

        $this->authService = $authService;
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials))
            return response()->json(['error' => 'Unauthorized'], 401);

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }

    public function generateToken()
    {
        request()->validate([
            'email' => 'email'
        ]);

        $email = request()->get('email');

        $token = $this->authService->generateToken($email);

        if (! $token) {
            return response()->json([]);
        }

        Mail::to($email)->send(
            new RecoveryPassword($token)
        );

        $response = [
            'code' => 0,
            'message' => 'Email send successfully'
        ];

        return response()->json($response);

    }

    public function updatePassword(): JsonResponse
    {
        try {
            $token = request()->get('token');

            $password = request()->get('password');

            /* DB tuple */
            $passwordRecovery = PasswordReset::where('token', $token)->firstOrFail();

            $dateNow = Carbon::now()->addHours(2);

            if ($dateNow->diffInHours($passwordRecovery->created_at) < 2) {
                $response = [
                    'code' => 1,
                    'message' => 'Not updated, toke has expired'
                ];
            } else if ($passwordRecovery->used_at) {
                $response = [
                    'code' => 2,
                    'message' => 'Token already used'
                ];
            } else {
                $this->authService->updatePasswordByToken($passwordRecovery, $password);

                $response = [
                    'code' => 0,
                    'message' => 'Password updated'
                ];
            }
        } catch (ModelNotFoundException $modelNotFoundException) {
            $response = [
                'code' => 3,
                'message' => 'Token not exist'
            ];
        }

        return response()->json($response);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return response()->json([
            'access_token' => auth()->refresh(),
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }

}
