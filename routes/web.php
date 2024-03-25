<?php

use App\Http\Controllers\PostController;
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
Route::get('/', function () {return view('welcome');});
Route::get('/barlag_1', function () {return view('barlag_1');});
Route::get('/posts', [PostController::class, "index"])-> name('posts') ;
Route::get('/posts/create', [PostController::class, "create"])-> name('create') ;
Route::get('/posts/update', [PostController::class, "update"])-> name('update') ;
Route::get('/posts/delete', [PostController::class, "delete"])-> name('delete') ;
Route::get('/posts/firstOrCreate', [PostController::class, "firstOrCreate"])-> name('firstOrCreate') ;
Route::get('/posts/updateOrCreate', [PostController::class, "updateOrCreate"])-> name('updateOrCreate') ;

