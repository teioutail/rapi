<?php
// API
Route::apiResource('/class', \App\Http\Controllers\Api\SclassController::class);
Route::apiResource('/subject', \App\Http\Controllers\Api\SubjectController::class);
Route::apiResource('/section', \App\Http\Controllers\Api\SectionController::class);
Route::apiResource('/student', \App\Http\Controllers\Api\StudentController::class);


// jwt authentication
Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\AuthController::class, 'refresh']);
    Route::post('me', [\App\Http\Controllers\AuthController::class, 'me']);
    
    Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);


    
    // laravel v5 below
    // Route::post('login', 'AuthController@login');
    // Route::post('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');
});


// Route::post('/class/abc', [\App\Http\Controllers\Api\SclassController::class, 'abc']);