<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoadExcelFileController;

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

// с помощью Laravel Excel выгружаем данные в файл users.xlsx
Route::get('export-users/', [BooksController::class, 'exportUsers']);
Route::get('export-menus/', [BooksController::class, 'exportMenus']);
// Import
Route::get('import-users', [UsersController::class, 'import']);

Route::get('/user/{id}/{user2id}', function ($id, $user2) {
    echo '/user/{id}/{user2id}<br>';
    echo $id.'<br>';
    echo $user2;
});
Route::get('/books', [BooksController::class, 'show']);
Route::get('/load-excel-file', [LoadExcelFileController::class, 'show']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


