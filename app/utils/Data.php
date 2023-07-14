<?php

namespace App\utils;

use App\Models\Categories;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
class Data
{
    public static function getUrl()
    {
        return url('/');
    }
    public static function queryProductByUrl($param1)
    {
        return Http::get(self::getUrl() . "/jsonapi/product?include=text,media,attribute,price&filter[%3D~][product.url]={$param1}");
    }
    public static function queryProductByCatalog($id) {
        return Http::get(self::getUrl()."/jsonapi/product?include=media,price&filter[f_catid]={$id}");
    }
    public static function querrySearch($url){
        return Http::get(self::getUrl()."/jsonapi/product?include=text,media,attribute,price&filter[~%3D][product.label]={$url}");
    }
    public static function queryCatalog($id){
        return Http::get(self::getUrl()."/jsonapi/catalog?include=catalog&id=$id");
    }
    public static function queryBasket() {
        $dataToken = Http::get(self::getUrl()."/jsonapi/catalog?include=catalog&id=1");
        $response = Http::withHeaders([
            'X-CSRF-TOKEN' => csrf_token()
        ])->get(self::getUrl()."/jsonapi/basket?id=default");
        $data = $response->json();
    }

    public static function convertCategories($response): array{
        $catalogArray = [];
        $included = $response['included'];
        foreach ($included as $item) {
            $catalog = new Categories();
            $catalog->id = $item['id'];
            if($item['attributes']['catalog.url'] != 'other'){
                $catalog->type = 'menu';
            }else{
                $catalog->type = 'other';
            }
            $catalog->label = $item['attributes']['catalog.label'];
            $catalog->url = $item['attributes']['catalog.url'];
            $catalogArray[] = $catalog;
        }
        return $catalogArray;
    }
    public static function getCatagories(): array
    {
        $data = self::convertCategories(self::queryCatalog(1));
        $array = [];
        foreach ($data as $item){
            if($item->type == 'menu'){
                $array[] = $item;
            }
        }
        return $array;
    }
    public static function getOtherCatagories(): array
    {
        $data = self::convertCategories(self::queryCatalog(20));
        $dataArray = array();
        foreach ($data as $item){
            $dataArray[] = self::convertProduct(self::queryProductByCatalog($item->id));
        }
        return $dataArray;
    }

    private static function convertProduct($response): array
    {
        $included = $response['included'];
        $data = $response['data'];
        $resultData = [];
        foreach ($data as $item) {
            $product = new ProductDetail();
            $relationship = $item['relationships'];
            $IDArray = $item['relationships']['media']['data'];
            $attributes = $item['attributes'];
            $product->id = $item['id'];
            $product->url = $attributes['product.url'];
            $product->label = $attributes['product.label'];
            $product->mediaId = $relationship['media']['data'][0]['id'];
            foreach ($IDArray as $itemId){
                $product->otherMediaId[] = $itemId['id'];
            }
            $product->priceId = $relationship['price']['data'][0]['id'];
            $resultData[] = $product;
        }

        foreach ($resultData as $obj) {
            $arrayMedia = array();
            foreach ($included as $var) {
                if ($var['id'] == $obj->mediaId && $var['type'] == 'media') {
                    $obj->imageLabel = $var['attributes']['media.label'];
                    $obj->image =self::getUrl().'/aimeos/'.$var['attributes']['media.url'];
                }
            }
            $arrayPrice = array();
            foreach ($included as $var) {
                if ($var['id'] == $obj->priceId && $var['type'] == 'price') {
                    $obj->realPrice = $var['attributes']['price.value'];
                    $obj->price = $var['attributes']['price.rebate'];

                }
            }

        }

        return $resultData;
    }
    private static function includeProduct($response): array
    {
        $included = $response['included'];
        return $included;
    }
    public static function getProductByCategory($id): array
    {
        return self::convertProduct(self::queryProductByCatalog($id));
    }

    public static function getProductBySearch($url): array
    {
        return self::convertProduct(self::querrySearch($url));
    }

    public static function getProductByUrl($url)
    {
        $data = self::convertProduct(self::queryProductByUrl($url));
        $dataInclude = self::includeProduct(self::queryProductByUrl($url));
        foreach ($dataInclude as $item){
            foreach ($data[0]->otherMediaId as $itemID){
                if($item['type']=='media' && $itemID == $item['id'] ){
                    $data[0]->otherImages[] = self::getUrl().'/aimeos/' . $item['attributes']['media.url'];
                }
            }
        }
        return $data[0];
    }


}
