<?php

use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\SectionController;

Route::ApiResource('/class', SclassController::class);
Route::ApiResource('/subject', SubjectController::class);
Route::ApiResource('/section', SectionController::class);
