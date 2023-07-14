<?php

namespace App\Http\Controllers;

use App\utils\Data;
use Illuminate\Http\Request;

class HomeController extends IctBaseController
{
    public function show()
    {
        $this->prepareData();
        $categories = array();
        foreach ($this->getData('categoriesDetail') as $category) {
            $categories[$category->label] = Data::getProductByCategory($category->id);
        }
        $this->addData('allProductByCategory', $categories);
        return $this->renderView();
    }
    public function slider(){
        return view("layouts.slider");
    }
    public function index()
    {
        return view('client.Search.search');
    }

    public function setLayout(): string
    {
        return "layouts.home";
    }
}
