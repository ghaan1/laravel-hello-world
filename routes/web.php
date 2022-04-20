<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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
Route::resource('articles', ArticleController::class);

Route::get('/',[PostController::class, 'index']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf'])->name('cetak_pdf');

// Route::get('/about', function () {
//     echo "2041720178 <br> Muhammad Ghaniyu Haq Haryanto <br> TI - 2G";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman Artikel dengan ID : $id";
// });

// //prak2
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

//prak3 
// Route::get('/', function () {
//     echo "Ini contoh dari 'Home'";
// });

// Route::get('/category', function () {
//     echo "Ini contoh dari 'Category'";
//     echo "Marbel Edu Game<br>";
//     echo "Marbel and Friend Kids Games<br>";
//     echo "Riri Story Books<br>";
//     echo "Kolak Kids Songs<br>";
// });

//     Route::prefix('category') -> group(function(){
//         Route::get("/marbel-edu-games", function(){
//             echo "Ini contoh dari 'Marbel Edu Game'";
//         });
//         Route::get("/marbel-and-friends-kids-games", function(){
//             echo "Ini contoh dari 'Marbel and Friend Kids Games'";
//         });
//         Route::get("/riri-story-books", function(){
//             echo "Ini contoh dari 'Riri Story Books'";
//         });
//         Route::get("/kolak-kids-songs", function(){
//             echo "Ini contoh dari 'Kolak Kids Songs'";
//         });
//     });

// Route::get('/news', function(){
//     echo "Ini contoh dari 'News'";
// });

//     Route::prefix('news') -> group(function(){
//         Route::get("/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19", function(){
//             echo "Ini contoh dari EducaStudio berbagi untuk warga sekitar terdampak Covid-19";
//         });
//     });

// Route::get('/program', function(){
//     echo "Ini contoh dari 'Program'";
// });

//     Route::prefix('program') -> group(function(){
//         Route::get("/karir" , function(){
//             echo "Ini contoh dari SubMenu Karir";
//         });
//         Route::get("/magang" , function(){
//             echo "Ini contoh dari SubMenu Magang";
//         });
//         Route::get("/kunjungan-industri" , function(){
//             echo "Ini contoh dari SubMenu Industri";
//         });
//     });

// Route::get("/about-us" , function(){
//     echo " Ini contoh dari 'About Us' <br> Muhammad Ghaniyu Haq Haryanto <br> 2041720178 <br> TI - 2G";
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
