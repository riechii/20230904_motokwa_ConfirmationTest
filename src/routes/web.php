<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

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


//フォーム入力画面
Route::get('/', [InquiryController::class, 'index']);
//入力確認ページ
Route::post('/inquiries/confirm', [InquiryController::class, 'confirm']);
//問合せ完了ページ
Route::post('/inquiries', [InquiryController::class, 'store']);
//管理画面
Route::get('/management', [InquiryController::class, 'search']);
//削除
Route::delete('/management/delete', [InquiryController::class, 'destroy']);
//検索
