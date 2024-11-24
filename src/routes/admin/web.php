<?php

use App\Http\Modules\Admin\Controllers\Auth\SignInController;
use App\Modules\Admin\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ログイン
Route::post('/auth/login', [SignInController::class, 'login'])->name('login');
// ログアウト
Route::post('/auth/logout', [SignInController::class, 'logout'])->name('logout');

// SPA用の設定
Route::get('/', function () {
    return view('admin');
})->name('index');
Route::get('{any}', function () {
    return view('admin');
})->where('any', '.*')->name('root');
