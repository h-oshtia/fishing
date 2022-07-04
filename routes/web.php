<?php

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

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\PostController@show')->name('posts');

Route::get('/toppage', 'App\Http\Controllers\PostController@Topshow')->middleware(['auth'])->name('Toppage');

Route::get('/topranking', 'App\Http\Controllers\PostController@Toprankingshow')->middleware(['auth'])->name('Toprankingpage');

Route::get('/indexranking', 'App\Http\Controllers\PostController@indexrankingshow')->name('indexrankingpage');

Route::get('/post/create', 'App\Http\Controllers\PostController@showCreate')->name('create');


Route::post('/post/delete/{id}', 'App\Http\Controllers\PostController@exeDelete')->name('delete');

// Route::resource('/destroy', 'App\Http\Controllers\PostControlle@destroy')->name('destroy');

Route::post('/post/store', 'App\Http\Controllers\PostController@exeStore')->name('store');

Route::get('/mypage', 'App\Http\Controllers\PostController@Myshow')->middleware(['auth'])->name('mypage');

// Route::get('/dashboard', function () {
    // return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// php artisan cache:clear
// php artisan route:clear
// php artisan view:clear
// php artisan config:clear
// npm run dev
