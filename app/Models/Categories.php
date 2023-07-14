<?php

namespace App\Models;

class Categories
{
    public $id;
    public $label;
    public $url;

    public $type;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return "catagory/".$this->url;
    }

}
