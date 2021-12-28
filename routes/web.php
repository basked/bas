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
})->middleware('throttle:1,1');


Route::prefix('service')->group(function () {
    Route::get('/bas', [\App\Http\Controllers\BasController::class, 'index']);
    Route::get('/video', [\App\Http\Controllers\VideoController::class, 'index']);
});

Route::get('categories/notfound', function () {
    return view('categories.notfound');
})->name('categories.notfound');

Route::get('categories/{category}/export', [\App\Http\Controllers\CategoryController::class, 'export'])->missing(
    function () {
        return Redirect::route('categories.notfound');
    }
);
Route::resource('categories', \App\Http\Controllers\CategoryController::class)->missing(
    function () {
        return response()->redirectToRoute('categories.notfound');
    }
);
