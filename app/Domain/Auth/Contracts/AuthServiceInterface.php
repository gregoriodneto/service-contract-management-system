<?php

namespace App\Domain\Auth\Contracts;

use App\Domain\Auth\DTOs\LoginData;
use App\Models\User;

interface AuthServiceInterface
{
    public function login(LoginData $data): array;
    public function logout(User $user): void;
}