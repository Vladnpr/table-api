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
}