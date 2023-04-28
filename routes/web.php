<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MenuItemsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DataTypesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\LogsController;

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

Route::get('/id/{id}', [UsersController::class, 'returnID']);
Route::get('/id', [UsersController::class, 'noID']);
Route::get('/form', [UsersController::class, 'form']);
Route::post('/form', [UsersController::class, 'formConfirm']);

Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/logs', [LogsController::class, 'index']);

Route::get('/export-categories', [CategoriesController::class, 'export']);
Route::get('/export-data-types', [DataTypesController::class, 'export']);

Route::get('/import-pages', [PagesController::class, 'import']);
Route::get('/import-roles', [RolesController::class, 'import']);

// Отримуємо предмети із таблиці
Route::get('/get-subjects', [SubjectsController::class, 'index']);

    
// додаємо статтю
Route::get('article', [ArticlesController::class, 'article']);
// зберігаємо статтю
Route::get('/article-add', [ArticlesController::class, 'store'])->name('store');

Route::get('export-posts/', [PostController::class, 'export']);

// с помощью Laravel Excel выгружаем данные в файл users.xlsx
Route::get('export-users/', [BooksController::class, 'exportUsers']);
Route::get('export-menus/', [BooksController::class, 'exportMenus']);
Route::get('export-menu-items/', [MenuItemsController::class, 'export']);
Route::get('export-settings/', [SettingsController::class, 'export']);

// Import
Route::get('import-users', [UsersController::class, 'import']);
Route::get('import-posts', [PostController::class, 'import']);

Route::get('/user/{id}/{user2id}', function ($id, $user2) {
    echo '/user/{id}/{user2id}<br>';
    echo $id.'<br>';
    echo $user2;
});

Route::get('/books', [BooksController::class, 'show']);

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user2', [UsersController::class, 'returnFunc']);

Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    return 'posts '.$postId. ' comments '.$commentId;
});

Route::get('/username/{name?}', function (string $name = 'John') {
    return $name;
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


