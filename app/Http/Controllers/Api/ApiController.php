<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\TableData;
use App\Models\Post;
use App\Services\ApiService;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class ApiController extends Controller
{
    private $api_service;
    public function __construct(ApiService $service)
    {
        $this->api_service = $service;
    }

    public function getTableName($name)
    {
        $data = $this->api_service->get($name);
        return $this->response($data);
    }

    public function getTableItem($table_name, $id)
    {
        $data = $this->api_service->getItemById($table_name, $id);
        return $this->response($data);
    }

    private function response($response_data)
    {

            if(is_object($response_data)){
                return \Response::json($response_data, 200);
            }
            throw new TableData($response_data);
    }
}
