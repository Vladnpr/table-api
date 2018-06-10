<?php

namespace App\Exceptions;

use Exception;

class TableData extends Exception
{
    protected $code;
    public function __construct($data)
    {
        $this->code = $data;
        parent::__construct("", 0);
    }

    public function getResponse()
    {
        switch ($this->code){
                case 2:
                    $data = [
                        'code' => $this->code,
                        'message' => 'Not found',
                        'details' => 'Entity (or table) not found'
                    ];
                    $http_status = 400;
                    break;
                case 0:
                    $data = [
                        'code' => $this->code,
                        'message' => 'Path you requested not exist',
                        'details' => ''
                    ];
                    $http_status = 404;
                    break;
                default:
                    $data = [
                        'code' => -1,
                        'message' => 'Internal error',
                        'details' => 'Please try again later'
                    ];
                    $http_status = 400;
            }

            return \Response::json($data, $http_status);
    }
}
