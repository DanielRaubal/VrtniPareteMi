<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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
    $data = [
        'message' => 'Hello, this is the index page!'
    ];

    return view('index', $data);
});
Route::get('/test', [HelloWorldController::class,'index']);

//Route::get('/controlpanel', [UserController::class, 'index']);

