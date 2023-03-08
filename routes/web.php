<?php

use App\Http\Controllers\Admin\AdminController as AdminAdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


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

Route::redirect("/", "ar");
Route::get('/lang/{lang}', [HomeController::class, 'switch'])->name('lang.switch');

Route::group([
    'prefix' => '{locale?}',
    'middleware' => 'set.locale',
    'where' => ['locale' => '(ar|en|hr)']
], function () {


    Route::get('/', [HomeController::class, 'index']);
});


Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/Admin', [HomeController::class, 'Admin'])->name('Admin');

// AdminReactRoute
// Route::group(['middleware' => ['auth:sanctum']], function () {
// Route::get('admin/home',[AdminAdminController::class, 'index']);

// //categories api
// Route::get('/GetCategories',[CategoryController::class, 'index']);

// });


Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth:sanctum',
], function () {
    Route::get('home', [AdminAdminController::class, 'index']);

    //categories api
    Route::get('/get-categories', [CategoryController::class, 'index']);
    Route::get('/edit-categories', [CategoryController::class, 'edit']);

});
