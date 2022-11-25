<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api as PathApiController;

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
// Route::post('login', [PathApiController\AuthController::class, 'login'])->name("login");
// Route::post('register', [PathApiController\AuthController::class, 'register'])->name("register");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('spa/category', [PathApiController\CategorySpaController::class, 'index'])->name('loadCategorySpa');
// Route::get('spa/category/{id}', [PathApiController\CategorySpaController::class, 'show'])->name('loadDetailCategorySpa');
// Route::get('spa/favorite', [PathApiController\SpaController::class, 'loadFavorite'])->name('loadFavoriteSpa')
//     ->middleware('auth:sanctum');
// Route::post('spa/rekomendasi', [PathApiController\SpaController::class, 'loadRekomendasi'])->name('loadRekomendasiSpa');
// Route::get('spa/pilihan', [PathApiController\SpaController::class, 'loadPilihan'])->name('loadPilihanSpa');
// Route::get('spa', [PathApiController\SpaController::class, 'index'])->name('loadSpa');
// Route::get('spa/{id}', [PathApiController\SpaController::class, 'show'])->name('loadDetailSpa');

// Route::get('franchise', [PathApiController\FranchiseController::class, 'index'])->name('loadFranchise');
// Route::get('franchise/{id}', [PathApiController\FranchiseController::class, 'show'])->name('loadDetailFranchise');
// Route::get('tips', [PathApiController\TipController::class, 'index'])->name('loadTips');
// Route::get('tips/{id}', [PathApiController\TipController::class, 'show'])->name('loadDetailTips');
// Route::get('coupon/active', [PathApiController\CouponController::class, 'active'])->name('loadCouponActive');
// Route::get('coupon/{id}', [PathApiController\CouponController::class, 'show'])->name('loadDetailCoupon');

Route::get('/users', [App\Http\Controllers\Api\UsersController::class, 'index']);
Route::get('/places', [App\Http\Controllers\Api\PlacesController::class, 'index']);
Route::get('/franchise', [App\Http\Controllers\Api\PagesController::class, 'index']);
Route::get('/config', [App\Http\Controllers\Api\ConfigController::class, 'index']);
Route::get('/contact_msgs', [App\Http\Controllers\Api\Contact_msgsController::class, 'index']);
Route::get('/email_templates', [App\Http\Controllers\Api\EmailTemplateController::class, 'index']);
Route::get('/language', [App\Http\Controllers\Api\LanguageController::class, 'index']);
Route::get('/loggedin', [App\Http\Controllers\Api\LoggedinController::class, 'index']);
Route::get('/photo', [App\Http\Controllers\Api\PhotoController::class, 'index']);
