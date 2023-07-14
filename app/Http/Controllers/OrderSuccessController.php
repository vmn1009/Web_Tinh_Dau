<?php

namespace App\Http\Controllers;
use App\Http\Controllers\IctBaseController;
class OrderSuccessController extends IctBaseController
{
    public function show(){
        $this->prepareData();
        return $this->renderView();
    }
    public function setLayout(): string
    {
        return "layouts.ordersuccess";
    }
}
