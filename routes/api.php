<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RatingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/account/{id}/avatar', [AccountController::class, 'avatar']);

Route::post('/studio/{slug}', [StudioController::class, 'studio']);
Route::post('/studios', [StudioController::class, 'studios']);
Route::post('/studio/{id}/games', [StudioController::class, 'games']);

Route::post('/categories', [CategoryController::class, 'categories']);

Route::post('/games', [GameController::class, 'games']);
Route::post('/game/{slug}', [GameController::class, 'game']);
Route::post('/game/{slug}/images', [GameController::class, 'images']);

Route::post('/comments/{slug}', [CommentController::class, 'comments']);
Route::post('/comments/{slug}/add', [CommentController::class, 'add']);

Route::post('/rating/common/{slug}', [RatingController::class, 'common']);
Route::post('/rating/{slug}/person/{id}', [RatingController::class, 'person']);
Route::post('/rating/{slug}/add', [RatingController::class, 'add']);
Route::patch('/rating/{slug}/update', [RatingController::class, 'update']);
Route::post('/rating/{id}/delete', [RatingController::class, 'delete']);