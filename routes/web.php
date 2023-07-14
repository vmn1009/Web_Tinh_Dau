<?php

use App\Http\Controllers\Api\APIBasketController;
use App\Http\Controllers\Api\APISearchController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrderSuccessController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ready', function() {
    return "Hello World!";
});

$params = [];
$conf = ['prefix' => '', 'where' => []];

if( env( 'SHOP_MULTILOCALE' ) )
{
    $conf['prefix'] .= '{locale}';
    $conf['where']['locale'] = '[a-z]{2}(\_[A-Z]{2})?';
    $params = ['locale' => app()->getLocale()];
}

if( env( 'SHOP_MULTISHOP' ) )
{
    $conf['prefix'] .= '/{site}';
    $conf['where']['site'] = '[A-Za-z0-9\.\-]+';
}

if( $conf['prefix'] )
{
    Route::get('/', function() use ($params) {
        return redirect(airoute('aimeos_home', $params));
    });
}

Route::group($conf ?? [], function() {
    require __DIR__.'/auth.php';
});


Route::get('/home', [HomeController::class, 'show']);
Route::get('/product', [ProductController::class, 'show']);
Route::get('/product-detail/{url}', [ProductController::class, 'index']);
Route::get('/product-search/{inputValue}', [APISearchController::class, 'show']);
Route::get('/api/search/{inputValue}',[APISearchController::class, 'index']);
Route::get('/category/{url}', [CategoriesController::class, 'show']);
Route::get('/api-post/basket', [APIBasketController:: class, 'index']);
Route::get('/order-success', [OrderSuccessController:: class, 'show']);
Route::get('/cart', [APIBasketController:: class, 'index']);
Route::get('/popup', [APISearchController::class, 'show']);
Route::get('/search', [HomeController::class, 'index']);


Route::get('/slider', [HomeController::class, 'slider']);
Route::get('/upload', function () {
    return view('upload-image');
});
