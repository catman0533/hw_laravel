<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', [App\Http\Controllers\SimpleController::class, 'test']);

Route::get('/test', [\App\Http\Controllers\TestController::class, 'index']);


Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
Route::post('/store-user', [App\Http\Controllers\UserController::class, 'store'])->name('store-user');

Route::get('/upload', [\App\Http\Controllers\FileUploadController::class, 'index']);

Route::post('/upload', [\App\Http\Controllers\FileUploadController::class, 'upload'])->name('upload_file');

Route::get('/library_user/{id}', [\App\Http\Controllers\LibraryUserController::class, 'show'])->where(['id' => '[0-9]+']);



