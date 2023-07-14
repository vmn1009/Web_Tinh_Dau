<?php

namespace App\Models;

class ProductDetail
{
    public $id;
    public $url;
    public $label;
    public $image;
    public $imageLabel;
    public $otherImages = array();
    public $otherMediaId = array();
    public $price;
    public $realPrice;
    public $mediaId;
    public $priceId;
    public function getProductUrl(){
        return "product/".$this->url;
    }
}
