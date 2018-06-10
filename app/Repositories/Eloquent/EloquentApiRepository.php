<?php

namespace App\Repositories\Eloquent;

use App\Contracts\ApiRepository;

class EloquentApiRepository implements ApiRepository
{
    private $model;

    public function getData($table_name)
    {
        if($this->checkTable($table_name)) {
            $this->setModel($table_name);
            return $this->model->all();
        } else {
            return 2;
        }
    }

    public function getItem($table_name, $id)
    {
        if($this->checkTable($table_name)){
            $this->setModel($table_name);
            return $this->model->findOrFail($id);
        }
        return 2;
    }

    private function setModel($table_name)
    {
        $class_name = 'App\\Models\\' . studly_case(str_singular($table_name));
        if(class_exists($class_name)){
            $this->model = new $class_name;
        }
    }

    private function checkTable($table_name)
    {
        return \Schema::hasTable($table_name);
    }
}