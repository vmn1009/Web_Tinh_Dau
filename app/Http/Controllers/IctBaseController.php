<?php

namespace App\Http\Controllers;

use App\utils\Data;

abstract class IctBaseController extends Controller
{
    public array $data = [];

    public function renderView()
    {
        return view($this->setLayout(), $this->data);
    }

    public function prepareData(): void
    {
        $this->data['categoriesDetail'] = Data::getCatagories();
    }

    public function addData($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function getData($key)
    {
        return $this->data[$key];
    }

    public abstract function setLayout(): string;

}
