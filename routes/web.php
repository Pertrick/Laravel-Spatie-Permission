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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['permission:write post']], function(){
    Route::get('post/create', [\App\Http\Controllers\PostController::class, 'create'])
        ->name('post.create');

});

Route::group(['middleware' => ['permission:edit post']], function(){
    Route::get('post/{id}/edit', [\App\Http\Controllers\PostController::class, 'edit'])
        ->name('post.edit');
});


