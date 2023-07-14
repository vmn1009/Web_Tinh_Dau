<?php

namespace App\Http\Controllers;

use App\utils\Data;
use Illuminate\Http\Request;

class ProductController extends IctBaseController
{
    public function index($url){
        $this->prepareData();
        $this->addData('productDetails', Data::getProductByUrl($url));
        $this->addData('otherListProductByCategory', Data::getOtherCatagories());
        return $this->renderView();
    }


    public function setLayout(): string
    {
        return "layouts.productdetail";
    }
}


