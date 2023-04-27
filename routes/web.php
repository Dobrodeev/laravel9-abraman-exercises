<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GiftController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskLogController;

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
Route::post('/giftform', [GiftController::class, 'index'])->name('gift-response');

Route::view('/tasks', 'tasks');
Route::get('/taskupdate/{id}', [TaskController::class, 'update'])->name('task-update');

Route::view('/tasklogqueue', 'log-queue');
Route::get('/tasklogupdate', [TaskLogController::class, 'update'])->name('tasklog-update');