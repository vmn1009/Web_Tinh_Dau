<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\IctBaseController;
use App\utils\Data;
class APIBasketController extends IctBaseController
{
    public function index()
    {
        $this->prepareData();
        Data::queryBasket();
        return $this->renderView();

    }

    public function setLayout(): string
    {
        return "layouts.cart";
    }
}

