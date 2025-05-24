<?php

namespace App\Http\Controllers\Api;

use App\Domain\Auth\Contracts\AuthServiceInterface;
use App\Domain\Auth\DTOs\LoginData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function __construct(
        protected AuthServiceInterface $authService,
    ) {}

    public function login(LoginRequest $request): JsonResponse
    {
        $data = LoginData::fromArray($request->validated());

        $result = $this->authService->login($data);

        return response()->json($result);
    }

    public function logout(Request $request): JsonResponse
    {
        $this->authService->logout($request->user());

        return response()->json(['message' => 'Logount out']);
    }
}