<?php

namespace App\Http\Controllers\Api;

use App\Domain\ServiceProvider\Contracts\ServiceProviderServiceInterface;
use App\Domain\ServiceProvider\DTOs\ServiceProviderData;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceProvider\ServiceProviderRequest;

class ServiceProviderController extends Controller
{
    public function __construct(
        protected ServiceProviderServiceInterface $serviceProviderService
    ){}

    public function create(ServiceProviderRequest $request)
    {
        $validated = $request->validated();

        $data = new ServiceProviderData(
            $validated["user_id"],
            $validated["company_name"],
            $validated["phone"],
            $validated["address"],
        );
        $this->serviceProviderService->create($data);
        return response()->json(["message" => "Provedor de Serviço criado com sucesso!"]);
    }
}
