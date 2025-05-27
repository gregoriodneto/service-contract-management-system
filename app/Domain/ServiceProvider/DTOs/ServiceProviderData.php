<?php

namespace App\Domain\ServiceProvider\DTOs;

class ServiceProviderData
{
    public function __construct(
        private string $user_id,
        private string $company_name,
        private string $phone,
        private string $address,
    ) {}

    public function toArray(): array
    {
        return [
            'user_id' => $this->user_id,
            'company_name'=> $this->company_name,
            'phone'=> $this->phone,
            'address'=> $this->address
        ];
    }
}