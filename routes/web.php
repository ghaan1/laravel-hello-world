<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    echo "Hi! Selamat Datang di Website Laravel " ;
});

Route::get('/about', function () {
    echo "2041720178 <br> Muhammad Ghaniyu Haq Haryanto <br> TI - 2G";
});

Route::get('/articles/{id}', function ($id) {
    echo "Ini adalah halaman Artikel dengan ID : $id";
});

//prak2
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);