<?php
namespace App\Repositories;
use App\Models\Organization;
use App\Repositories\Interfaces\OrganizationRepositoryInterface;

 class OrganizationRepository extends BaseRepository implements OrganizationRepositoryInterface
{
    public function __construct(Organization $model)
    {
        parent::__construct($model);
    }

    public function all()
    {
       return  $this->model->all();
    }
    public function store(array $data)
    {
        return $this->model->create($data);
    }
}
