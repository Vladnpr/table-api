<?php

namespace App\Services;

use App\Contracts\ApiRepository;

class ApiService
{
    private $repository;

    public function __construct(ApiRepository $repository)
    {
        $this->repository = $repository;
    }

    public function get($table_name)
    {
        return $this->repository->getData($table_name);
    }

    public function getItemById($table_name, $id)
    {
        return $this->repository->getItem($table_name, $id);
    }
}