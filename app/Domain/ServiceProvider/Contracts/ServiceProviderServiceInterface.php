<?php

namespace App\Domain\ServiceProvider\Contracts;

use App\Domain\ServiceProvider\DTOs\ServiceProviderData;

interface ServiceProviderServiceInterface
{
    public function create(ServiceProviderData $data): void;
    public function find_all(): array;
    public function update(int $id, ServiceProviderData $data): void;
    public function delete(int $id): void;
}