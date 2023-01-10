<?php

namespace App\Services\Organizations;

use App\Http\Resources\OrganizationResource;
use App\Repositories\Interfaces\OrganizationRepositoryInterface;

class OrganizationService
{
    private OrganizationRepositoryInterface $organizationRepositoryInterface;

    public function __construct(OrganizationRepositoryInterface $organizationRepositoryInterface)
    {
        $this->organizationRepositoryInterface = $organizationRepositoryInterface;
    }

    public function index()
    {
        $organizations = $this->organizationRepositoryInterface->all();
         return response()->success(OrganizationResource::collection($organizations));
    }

    public function store($data)
    {
        $organization = $this->organizationRepositoryInterface->store($data);
        return response()->success(new OrganizationResource($organization));
    }
}
