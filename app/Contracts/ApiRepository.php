<?php

namespace App\Contracts;

interface ApiRepository
{
    public function getData($table_name);
    public function getItem($table_name, $id);
}