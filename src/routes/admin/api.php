<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Http\Controllers\ApiController;

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

Route::middleware('auth:sanctum')->group(function () {
    // ユーザー情報取得
    Route::get('get-user', [ApiController::class, 'getUser'])->name('get-user');
});
