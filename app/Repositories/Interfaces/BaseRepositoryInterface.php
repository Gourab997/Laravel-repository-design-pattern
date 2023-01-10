<?php

namespace App\Repositories\Interfaces;

Interface BaseRepositoryInterface
{
    public function create($data);
    public function insert(array $data);
    public function find($id);
    public function firstOrCreate($data);
    public function findOrFail($id);
    public function getAll();
    public function update($data);
    public function delete();
}
