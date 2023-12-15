<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\Category\CategoryController;
use App\Http\Controllers\Api\Product\ProductController;
use App\Http\Controllers\Api\SubCategory\SubCategoryController;
use App\Http\Controllers\Api\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DirectoryController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/create-device-token',  [ApiController::class, 'DeviceToken']);

Route::prefix('user')->group(function () {
    Route::post('/login', [DirectoryController::class, 'login']); // not 
    Route::post('/registerapi', [DirectoryController::class, 'register']); // not
    Route::post('/logout', [DirectoryController::class, 'logout']); // not
    Route::post('/alllogin', [DirectoryController::class, 'search']); // not
    Route::get('/lang/{id}', [DirectoryController::class, 'language']); // not
    Route::post('/changepassword/{user_id}', [UserController::class, 'change_password']);
    Route::post('/send-reset-password-email', [PasswordResetController::class, 'send_reset_password_email']);
    Route::post('/reset-password/{token}', [PasswordResetController::class, 'reset']);
    Route::post('/deleteUser/{user_id}', [UserController::class, 'deleteUser']);
    Route::post('/updateuser/{user_id}', [UserController::class, 'updateuser']);
    Route::get('/edituser/{user_id}', [UserController::class, 'edituser']);
});



Route::post('/contactmailapi', [UserController::class, 'contactmailapi']);
Route::get('/loggeduser', [UserController::class, 'logged_user']);

Route::get('/userprofile/{user_id}', [UserController::class, 'userprofile']);

Route::get('/search/{keyword}', [CategoryController::class, 'cat_search']);
Route::get('/search', [CategoryController::class, 'cat_search']);
Route::get('/home', [CategoryController::class, 'apicall']);
Route::get('/allcategory', [CategoryController::class, 'allcategoryapi']);
Route::get('/cat_search', [CategoryController::class, 'cat_search']);

Route::get('/SubCat_search_api', [SubCategoryController::class, 'SubCat_search_api']);
Route::get('/allsubcategoryapi/{slug}', [SubCategoryController::class, 'allsubcategoryapi']);

Route::get('/allproduct', [ProductController::class, 'allproduct_slug']);
Route::get('/product-detail/{slug}', [ProductController::class, 'product_detail']);
Route::get('/product-lishting/{slug}', [ProductController::class, 'lishting']);
Route::get('/product-lishting',  [ProductController::class, 'lishting']);
Route::get('/cms/{slug}', [ProductController::class, 'cms_contant']);
Route::get('/wishlistapi/{id}', [ProductController::class, 'wishlistapi']);
Route::post('/wishlistapi', [ProductController::class, 'wishlistpostapi']);
Route::post('/removewishlist', [ProductController::class, 'removewishlistpostapi']);
Route::get('/search_filter/{keybord}', [ProductController::class, 'search_filter']);
Route::get('/highlight/{highlight_type}', [ProductController::class, 'filter_highlight_type']);
Route::post('/postreview', [ProductController::class, 'postreview']);
Route::get('/search_api', [ProductController::class, 'search_api']);
Route::get('/search_api/{slug}', [ProductController::class, 'search_api']);
Route::get('/filterallproduct', [ProductController::class, 'filterallproduct']);
Route::get('/highlight_type', [ProductController::class, 'filterallproduct']);
Route::get('/appaddsdata', [ProductController::class, 'appaddsdata']);
