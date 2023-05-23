<?php

use App\Http\Controllers\StoreName;
use App\Http\Controllers\UserAgent;
use App\Http\Controllers\PageQuery;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;




Route::get('/', function () {
    return view('welcome');
});

//Question no 01
Route::post("/store",[StoreName::class,"storeName"]);
//Question no 02
Route::get("/userAgent",[UserAgent::class,"userAgent"]);
//Question no 03
// the answer of 3rd question is in api.php
//Question no 04
Route::get('/json-response', function () {
    $data = [
        'name' => 'John Doe',
        'age' => 25
    ];

    $response = [
        'message' => 'Success',
        'data' => $data
    ];

    return response()->json($response);
});

//Question no 05
Route::post('/upload-avatar', [UploadController::class, 'uploadAvatar'])->name('upload.avatar');

//Question no 06
Route::get('/retrieve-remember-token', function (Request $request) {
    $rememberToken = $request->cookie('token', null);

    // Use the $rememberToken value as needed

    return $rememberToken;
});

//Question no 07
Route::post('/submit', function (Request $request) {
    $email = $request->input('email');
    
    // Additional logic or processing here
    
    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});