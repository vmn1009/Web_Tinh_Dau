<?php

namespace App\Http\Controllers;

use App\utils\Data;
use Illuminate\Http\Request;

class CategoriesController extends IctBaseController
{
    public function show($url){
        $this->prepareData();
        $categories = 0;
        foreach ($this->data['categoriesDetail'] as $item){
            if($item->url==$url){
                $categories = $item->id;
            }
        }
        $category = $categories;
        $this->addData('listProducts',Data::getProductByCategory($category));

        return $this->renderView();
    }

    public function setLayout(): string
    {
        return 'layouts.category';
    }
}
