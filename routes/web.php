<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/hello/{name}', 'hello')->whereAlpha('name');;