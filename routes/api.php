<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('students', StudentController::class);
Route::get('/groups/{group}/students', [GroupController::class, 'studentsOfGroup']);