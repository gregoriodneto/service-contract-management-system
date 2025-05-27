<?php

namespace App\Domain\ServiceProvider\Services;

use App\Domain\ServiceProvider\Contracts\ServiceProviderServiceInterface;
use App\Domain\ServiceProvider\DTOs\ServiceProviderData;
use App\Domain\ServiceProvider\Exceptions\ServiceProviderCreationException;
use App\Models\ServiceProvider;
use Throwable;

class ServiceProviderService implements ServiceProviderServiceInterface
{
    public function create(ServiceProviderData $data): void
    {
        try {
            ServiceProvider::create($data->toArray());
        } catch (Throwable $e) {
            throw new ServiceProviderCreationException("Failed to create Service Provider",0, $e);
        }
    }
    public function find_all(): array
    {
        return [];
    }
    public function update(int $id, ServiceProviderData $data): void
    {

    }
    public function delete(int $id): void
    {

    }
}