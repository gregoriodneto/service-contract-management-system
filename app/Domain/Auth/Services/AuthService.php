<?php

namespace App\Domain\Auth\Services;

use App\Domain\Auth\Contracts\AuthServiceInterface;
use App\Domain\Auth\DTOs\LoginData;
use App\Models\User;
use Hash;

class AuthService implements AuthServiceInterface
{
    public function login(LoginData $data): array
    {
        $user = User::where('email', $data->email)->first();

        if (! $user || ! Hash::check($data->password, $user->password)) 
        {
            abort(401, 'Invalid credentials');
        }

        $token = $user->createToken('api-token')->plainTextToken;

        return [
            'user'=>$user,
            'token'=>$token
        ];
    }

    public function logout(User $user): void
    {
        $user->currentAccessToken()->delete();
    }
}