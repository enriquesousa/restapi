<?php

use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;

Route::ApiResource('/class', SclassController::class);
Route::ApiResource('/subject', SubjectController::class);
