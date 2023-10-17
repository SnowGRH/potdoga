<?php

use App\Http\Controllers\TaskController;
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
});
Route::get('/api/task', [TaskController::class, 'index']);
Route::get('/api/task/{id}', [TaskController::class, 'show']);
Route::post('/api/task', [TaskController::class, 'store']);
Route::put('/api/task/{id}', [TaskController::class, 'update']);
Route::delete('/api/task/{id}', [TaskController::class, 'destroy']);

Route::get('/api/users', [TaskController::class, 'userindex']);

Route::get('/task/new', [TaskController::class, 'newView']);
Route::get('/task/edit/{id}', [TaskController::class, 'editView']);
Route::get('/task/list', [TaskController::class, 'listView']);
