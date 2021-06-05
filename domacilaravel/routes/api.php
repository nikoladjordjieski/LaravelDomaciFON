<?php

use App\Models\Post;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\IspitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/students', [StudentController::class, 'getAllStudents']);

Route::post('/students', [StudentController::class, 'addStudent']);

Route::put('/students/{student}', [StudentController::class, 'editStudent']);

Route::delete('/students/{student}', [StudentController::class, 'deleteStudent']);

Route::get('/ispits', [IspitController::class, 'getAllIspits']);

Route::post('/ispits', [IspitController::class, 'addIspit']);

