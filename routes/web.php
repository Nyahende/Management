<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\rejectsController;
use App\Http\Controllers\chartsController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\forumController;
use App\Http\Controllers\announcementsController;
use App\Http\Controllers\demoreportController;

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

Route::get('index',[indexController::class,'index'])->name('index');
Route::get('released-products',[productsController::class,'products'])->name('products');
Route::get('rejects',[rejectsController::class,'rejects'])->name('rejects');
Route::get('charts',[chartsController::class,'charts'])->name('charts');
Route::post('charts',[chartsController::class,'charts'])->name('chartsinput');
Route::get('report',[reportController::class,'report'])->name('report');
Route::post('addannounce',[announcementsController::class,'addannounce'])->name('addannounce');
Route::get('forum',[forumController::class,'forum'])->name('forum');

Route::post('addproduct1',[productsController::class,'addproduct1'])->name('addproduct1');
Route::post('addproduct2',[productsController::class,'addproduct2'])->name('addproduct2');
Route::post('addproduct3',[productsController::class,'addproduct3'])->name('addproduct3');
Route::post('addproduct4',[productsController::class,'addproduct4'])->name('addproduct4');
Route::post('addproduct5',[productsController::class,'addproduct5'])->name('addproduct5');
Route::post('addproduct6',[productsController::class,'addproduct6'])->name('addproduct6');
Route::post('addproduct7',[productsController::class,'addproduct7'])->name('addproduct7');
Route::post('addproduct8',[productsController::class,'addproduct8'])->name('addproduct8');
Route::post('addproduct9',[productsController::class,'addproduct9'])->name('addproduct9');
Route::post('addproduct10',[productsController::class,'addproduct10'])->name('addproduct10');

Route::post('addrej1',[rejectsController::class,'addrej1'])->name('addrej1');
Route::post('addrej2',[rejectsController::class,'addrej2'])->name('addrej2');
Route::post('addrej3',[rejectsController::class,'addrej3'])->name('addrej3');
Route::post('addrej4',[rejectsController::class,'addrej4'])->name('addrej4');
Route::post('addrej5',[rejectsController::class,'addrej5'])->name('addrej5');
Route::post('addrej6',[rejectsController::class,'addrej6'])->name('addrej6');
Route::post('addrej7',[rejectsController::class,'addrej7'])->name('addrej7');
Route::post('addrej8',[rejectsController::class,'addrej8'])->name('addrej8');
Route::post('addrej9',[rejectsController::class,'addrej9'])->name('addrej9');
Route::post('addrej10',[rejectsController::class,'addrej10'])->name('addrej10');

Route::get('deleteproduct/{id}',[productsController::class,'deleteproduct']);
Route::get('deletereject/{id}',[rejectsController::class,'deletereject']);

Route::get('editproduct/{id}',[productsController::class,'editproduct']);
Route::post('updateproduct',[productsController::class,'updateproduct'])->name('updateproduct');
Route::get('editproduct2/{id}',[productsController::class,'editproduct2']);
Route::get('editproduct3/{id}',[productsController::class,'editproduct3']);
Route::get('editproduct4/{id}',[productsController::class,'editproduct4']);
Route::get('editproduct5/{id}',[productsController::class,'editproduct5']);
Route::get('editproduct6/{id}',[productsController::class,'editproduct6']);
Route::get('editproduct7/{id}',[productsController::class,'editproduct7']);
Route::get('editproduct8/{id}',[productsController::class,'editproduct8']);
Route::get('editproduct9/{id}',[productsController::class,'editproduct9']);
Route::get('editproduct10/{id}',[productsController::class,'editproduct10']);

Route::post('yearly-report-view',[reportController::class,'yearlyreportview'])->name('yearlyreportview');
Route::post('yearly-report-download',[reportController::class,'yearlyreportdownload'])->name('yearlyreportdownload');


Route::get('demoreport',[demoreportController::class,'demoreport']);
Route::post('send-text',[forumController::class,'addtext']);
Route::get('fetch-texts',[forumController::class,'fetchtexts']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
