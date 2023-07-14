<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\IctBaseController;
use App\utils\Data;
use Illuminate\Http\Request;

class APISearchController extends IctBaseController
{
    public array $data = [];

    public function index($url)
    {
        $data = Data::getProductBySearch($url);
        return $data;
    }

    public function show($url){
        $this->prepareData();
        $this->addData('dataSearch',Data::getProductBySearch($url));
        $data = Data::getProductBySearch($url);
        return $this->renderView();
    }

    public function setLayout(): string
    {
        return "layouts.listsearch";
    }

}
