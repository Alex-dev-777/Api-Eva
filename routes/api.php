<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\RegisterController;
use App\Http\Controllers\v1\LoginController;
use App\Http\Controllers\v1\LogoutController;
use App\Http\Controllers\v1\UserController;
use App\Http\Controllers\v1\ForgotPasswordController;
use App\Http\Controllers\v1\ResetPasswordController;
use App\Http\Controllers\v1\ListController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login'])->middleware('throttle:login');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.reset');
Route::middleware(['auth:sanctum'])->post('/logout', [LogoutController::class, 'logout']);
Route::middleware(['auth:sanctum'])->get('/users', [UserController::class, 'index']);
Route::middleware(['auth:sanctum'])->get('/questions', [ListController::class, 'getQuestions']);
Route::middleware(['auth:sanctum'])->post('/answers', [ListController::class, 'storeAnswers']);
