<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GiftController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskLogController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FavoritePlaceController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});
Route::redirect('/helloworld', 'greeting');

// сказати привіт користувачу з ім'ям з лише буквами
Route::get('/user/{name}', function (string $name) {
    return 'Hello user '.$name;
})->whereAlpha('name');

Route::view('/hello/{name}', 'hello')->whereAlpha('name');


Route::get('/giftform', [GiftController::class, 'show']);
Route::post('/giftform', [GiftController::class, 'response'])->name('gift-response');

Route::view('/tasks', 'tasks');
Route::get('/taskupdate/{id}', [TaskController::class, 'update'])->name('task-update');

Route::view('/tasklogqueue', 'log-queue');
Route::get('/tasklogupdate', [TaskLogController::class, 'update'])->name('tasklog-update');


Route::get('/form', [FormController::class, 'show']);
Route::get('/formresponse', [FormController::class, 'store'])->name('form-response');


Route::view('/places', 'favorite-places.places')->name('show-places');
Route::get('/places/create', [FavoritePlaceController::class, 'create'])->name('create-favorite-place');
Route::post('/places/create', [FavoritePlaceController::class, 'add'])->name('add-favorite-place');
Route::view('places/{id}', 'favorite-places.place-info')->name('show-place-info');
Route::get('places/{id}/photos/add', [FavoritePlaceController::class, 'addPhotoForm'])->name('add-place-photo');
Route::post('places/{id}/photos/add', [FavoritePlaceController::class, 'addPhoto'])->name('add-place-photo');
