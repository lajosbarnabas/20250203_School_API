<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('students', StudentController::class);

Route::get('/groups/{group}/students', [GroupController::class, 'studentsOfGroup']);

Route::get('/groups/{group}/teachers', [GroupController::class, 'teachersOfGroup']);

Route::get('/teachers/{teacher}/groups', [TeacherController::class, 'groupsOfTeacher']);

Route::post('/teachers/{teacher}/add-group', [TeacherController::class, 'addGroup']);