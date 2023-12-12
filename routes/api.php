<?php

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

Route::post('/login', [DirectoryController::class, 'login']);
Route::get('/edituser/{user_id}', [DirectoryController::class, 'edituser']);
Route::post('/updateuser/{user_id}', [DirectoryController::class, 'updateuser']);
Route::post('/deleteUser/{user_id}', [DirectoryController::class, 'deleteUser']);
Route::post('/registerapi', [DirectoryController::class, 'register']);
Route::post('/send-reset-password-email', [PasswordResetController::class, 'send_reset_password_email']);
Route::post('/reset-password/{token}', [PasswordResetController::class, 'reset']);

// Protected Routes
//Route::middleware(['auth:sanctum'])->group(function(){
Route::post('/logout', [DirectoryController::class, 'logout']);
Route::get('/loggeduser', [DirectoryController::class, 'logged_user']);
Route::post('/changepassword/{user_id}', [DirectoryController::class, 'change_password']);
//});


Route::get('/api/search/{keyword}', [DirectoryController::class, 'cat_search']);
Route::get('/api/search', [DirectoryController::class, 'cat_search']);
Route::get('/api/home', [DirectoryController::class, 'apicall']);
Route::get('/api/allcategory', [DirectoryController::class, 'allcategoryapi']);
Route::get('/api/allsubcategoryapi/{slug}', [DirectoryController::class, 'allsubcategoryapi']);
Route::get('/api/allproduct', [DirectoryController::class, 'allproduct_slug']);
//Route::get('/api/allproduct/{keyword}', [DirectoryController::class, 'allproduct_slug']);
Route::get('/api/allproduct/{slug}', [DirectoryController::class, 'allproduct_slug']);
Route::get('/api/product-detail/{slug}', 'Frontend\DirectoryController@product_detail');
Route::get('/api/product-lishting/{slug}', 'Frontend\DirectoryController@lishting');
Route::get('/api/product-lishting', 'Frontend\DirectoryController@lishting');
Route::post('/api/alllogin', [DirectoryController::class, 'search']);
Route::get('/api/userprofile/{user_id}', 'Frontend\DirectoryController@userprofile');
Route::get('/api/cms/{slug}', [DirectoryController::class, 'cms_contant']);
Route::post('/api/contactmailapi', [DirectoryController::class, 'contactmailapi']);
Route::get('/api/wishlistapi/{id}', [DirectoryController::class, 'wishlistapi']);
Route::post('/api/wishlistapi', [DirectoryController::class, 'wishlistpostapi']);
Route::post('/api/removewishlist', [DirectoryController::class, 'removewishlistpostapi']);
Route::get('/api/search_filter/{keybord}', [DirectoryController::class, 'search_filter']);
Route::get('/api/highlight/{highlight_type}', [DirectoryController::class, 'filter_highlight_type']);
Route::post('/api/postreview', [DirectoryController::class, 'postreview']);
// Route::get('/api/search_api/{slug}', [DirectoryController::class, 'search_api']);
// Route::get('/api/search_api', [DirectoryController::class, 'search_api']);
Route::get('/api/search_api', [DirectoryController::class, 'search_api']);
Route::get('/api/search_api/{slug}', [DirectoryController::class, 'search_api']);
Route::get('/api/SubCat_search_api', [DirectoryController::class, 'SubCat_search_api']);
Route::get('/api/filterallproduct', [DirectoryController::class, 'filterallproduct']);
Route::get('/api/lang/{id}', [DirectoryController::class, 'language']);
Route::get('/api/highlight_type', [DirectoryController::class, 'filterallproduct']);
Route::get('/api/appaddsdata', [DirectoryController::class, 'appaddsdata']);
Route::get('/api/cat_search', [DirectoryController::class, 'cat_search']);
