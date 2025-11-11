<?php

use App\Http\Controllers\Api\MailinglistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/mailing', [MailinglistController::class, 'catch']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

