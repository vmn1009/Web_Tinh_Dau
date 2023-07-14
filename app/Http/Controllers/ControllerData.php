<?php

namespace App\Http\Controllers;

use App\utils\Data;

abstract class ControllerData extends Controller
{
    public $data = [];
    public function index($url){
        $this->data['categoriesDetail'] = Data::getCatagories();
        $this->data['productCategories'] = $this->prepareData($url);
        return view($this->setLayout(), $this->data);

    }
    public abstract function prepareData($url);
    public abstract function setLayout();

}
