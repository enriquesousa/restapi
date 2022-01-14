<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\SubjectController;

Route::ApiResource('/class', SclassController::class);
Route::ApiResource('/subject', SubjectController::class);
Route::ApiResource('/section', SectionController::class);
Route::ApiResource('/student', StudentController::class);

Route::group([
    'prefix' => 'auth'
], function () {

    Route::post('/login', [AuthController::class, 'login']);
    // Route::post('login', 'AuthController@login');
    // Route::post('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');

});
