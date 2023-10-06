<?php

use App\Http\Controllers\advertise\advertise;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePage\CartController;
use App\Http\Controllers\HomePage\IndexController;
use App\Http\Controllers\Introduce\IntroduceController;
use App\Http\Controllers\KnowledgeController\Knowledge2Controller;
use App\Http\Controllers\KnowledgeController\Knowledge3Controller;
use App\Http\Controllers\KnowledgeController\KnowledgeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MediaProductController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\NgaMin\NgaMinController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesAgent\SalesAgentController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', [IndexController::class, 'index'])->name('homepage.index');
//Route::get('/lien-he', [ContactController::class, 'index'])->name('lien-he.index');
//Route::get('/kien-thuc', [KnowledgeController::class, 'index'])->name('kien-thuc.index');
//Route::get('/kien-thuc/me-sau-sinh', [Knowledge2Controller::class, 'index'])->name('kien-thuc.me-sau-sinh.index');
//Route::get('/kien-thuc/dinh-duong-cho-con', [Knowledge3Controller::class, 'index'])->name('kien-thuc.dinh-duong-cho-con.index');
//Route::get('/gioi-thieu', [IntroduceController::class, 'index'])->name('gioi-thieu.index');
Route::get('/', [NgaMinController::class, 'index'])->name('Nga-min.index');
//Route::get('/dai-ly', [SalesAgentController::class,'index'])->name('dai-ly.index');
Route::get('/tin-tuc', [NewsController::class, 'index'])->name('tin-tuc.index');
Route::get('/tin-tuc/{slug}', [NewsController::class, 'show'])->name('tin-tuc.show');
//Route::get('/kien-thuc/{slug}', [App\Http\Controllers\KnowledgeController\KnowledgeController::class, 'show'])->name('kien-thuc.show');
//Route::get('/kien-thuc/me-sau-sinh/{slug}', [App\Http\Controllers\KnowledgeController\Knowledge2Controller::class, 'show'])->name('kien-thuc.me-sau-sinh.show');
//Route::get('/kien-thuc/dinh-duong-cho-con/{slug}', [App\Http\Controllers\KnowledgeController\Knowledge3Controller::class, 'show'])->name('kien-thuc.dinh-duong-cho-con.show');
//Route::get('/san-pham-ngu-coc', [\App\Http\Controllers\HomePage\ProductController::class, 'index1'])->name('homepage.product.index');
//Route::get('/san-pham-sua-hat', [\App\Http\Controllers\HomePage\ProductController::class, 'index2'])->name('homepage.product.index2');
//Route::get('/san-pham-hat', [\App\Http\Controllers\HomePage\ProductController::class, 'index3'])->name('homepage.product.index3');
//Route::get('/san-pham/{slug}', [\App\Http\Controllers\HomePage\ProductController::class, 'show'])->name('homepage.product.show');
//Route::get('/advertise', [advertise::class, 'index'])->name('advertise.index');
//Route::post('/buy-action', [CartController::class, 'buy_action'])->name('homepage.cart.buy_action');
//Route::post('/plus', [CartController::class, 'plus'])->name('homepage.cart.plus');
//Route::post('/subtraction', [CartController::class, 'subtraction'])->name('homepage.cart.subtraction');
//Route::post('/delete_cart', [CartController::class, 'delete_cart'])->name('homepage.cart.delete');
//Route::middleware('throttle:10,60')->group(function (Router $router) {
//    Route::post("/send", [CartController::class, 'send'])->name('homepage.cart.send');
//});
Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('images', 'ImageController');
    Route::resource('products', 'ProductController');
    Route::resource('articles', 'ArticleController')->except(['index']);
    Route::get('index/{conditionView}', [ArticleController::class, 'index'])->name('articles.index');
    Route::delete('articles/forceDel/{article} ', [ArticleController::class, 'forceDestroy'])->name('articles.forceDestroy');
    Route::post('articles/trash/{article} ', [ArticleController::class, 'restore'])->name('articles.restore');
    Route::post('/order-number', [ArticleController::class, 'OrderNumber'])->name('admin.updateOrderNumber');
    Route::get('/media', [MediaController::class, 'index'])->name('admin.media.index');
    Route::post('/upload', [MediaController::class, 'upload'])->name('admin.media.upload');
    Route::post('/uploadMediaProduct', [MediaProductController::class, 'store'])->name('admin.mediaProduct.upload');
    Route::get('/fixMediaProduct', [MediaProductController::class, 'fix'])->name('admin.mediaProduct.fix');
    Route::post('/updateMediaProduct', [MediaProductController::class, 'update'])->name('admin.mediaProduct.update');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/trash', [ArticleController::class, 'trashBin'])->name('admin.trashBin');
    Route::get('/about', function () {
        return view('admin/about');
    })->name('about');
});



