<?php

namespace App\Http\Controllers;

use App\Services\ExampleService;

class TestController extends Controller
{
    public function index(ExampleService $service)
    {
        return response()->json(['message' => $service->execute()]);
    }
}