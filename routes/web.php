<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Controller::class, 'index'])->name('index');

Route::get('/about', [Controller::class, 'about'])->name('about');

Route::get('/services', [Controller::class, 'services'])->name('services');

Route::get('/portfolio', [Controller::class, 'portfolio'])->name('portfolio');

Route::get('/contact', [Controller::class, 'contact'])->name('contact');

Route::post('/send_email', [Controller::class, 'send_email'])->name('send_email');

Route::get('/category/{slug}', [Controller::class, 'category'])->name('category');

Route::get('/product/{url_key}', [Controller::class, 'product'])->name('product');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
