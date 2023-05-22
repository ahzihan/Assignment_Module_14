<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;



Route::post('/user', [AssignmentController::class, 'StoreUser']);
Route::get('/UserAgent', [AssignmentController::class, 'UserAgent']);
Route::get('/page', [AssignmentController::class, 'getPage']);
Route::get('/jsonData', [AssignmentController::class, 'JsonData']);
Route::post('/fileUpload', [AssignmentController::class, 'FileUpload']);
Route::get('/token', [AssignmentController::class, 'getToken']);
Route::post('/submit', [AssignmentController::class, 'FormData']);


