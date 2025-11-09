<?php

use App\Http\Controllers\MailingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/mailing', [MailingController::class, 'catch']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

