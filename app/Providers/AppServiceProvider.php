<?php

namespace App\Providers;

use App\Domain\Auth\Contracts\AuthServiceInterface;
use App\Domain\Auth\Services\AuthService;
use App\Domain\ServiceProvider\Contracts\ServiceProviderServiceInterface;
use App\Domain\ServiceProvider\Services\ServiceProviderService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
        $this->app->bind(ServiceProviderServiceInterface::class, ServiceProviderService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
