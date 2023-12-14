<?php

use App\Http\Controllers\Api\ApiController;
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

Route::post('/login', [DirectoryController::class, 'login']); // not 
Route::get('/edituser/{user_id}', [DirectoryController::class, 'edituser']); 
Route::post('/updateuser/{user_id}', [DirectoryController::class, 'updateuser']);
Route::post('/deleteUser/{user_id}', [DirectoryController::class, 'deleteUser']);
Route::post('/registerapi', [DirectoryController::class, 'register']); // not
Route::post('/send-reset-password-email', [PasswordResetController::class, 'send_reset_password_email']);
Route::post('/reset-password/{token}', [PasswordResetController::class, 'reset']);

// Protected Routes
//Route::middleware(['auth:sanctum'])->group(function(){
Route::post('/logout', [DirectoryController::class, 'logout']); // not
Route::get('/loggeduser', [DirectoryController::class, 'logged_user']);
Route::post('/changepassword/{user_id}', [DirectoryController::class, 'change_password']);
//});



Route::get('/search/{keyword}', [DirectoryController::class, 'cat_search']);
Route::get('/home', [DirectoryController::class, 'apicall']);
Route::get('/allcategory', [DirectoryController::class, 'allcategoryapi']);
Route::get('/allsubcategoryapi/{slug}', [DirectoryController::class, 'allsubcategoryapi']);
Route::get('/allproduct', [DirectoryController::class, 'allproduct_slug']);
//Route::get('/allproduct/{keyword}', [DirectoryController::class, 'allproduct_slug']);
Route::get('/allproduct/{slug}', [DirectoryController::class, 'allproduct_slug']);
Route::get('/product-detail/{slug}', 'Frontend\DirectoryController@product_detail');
Route::get('/product-lishting/{slug}', 'Frontend\DirectoryController@lishting');
Route::get('/product-lishting', 'Frontend\DirectoryController@lishting');
Route::post('/alllogin', [DirectoryController::class, 'search']); // not found
Route::get('/userprofile/{user_id}', 'Frontend\DirectoryController@userprofile');
Route::get('/cms/{slug}', [DirectoryController::class, 'cms_contant']);
Route::post('/contactmailapi', [DirectoryController::class, 'contactmailapi']);
Route::get('/wishlistapi/{id}', [DirectoryController::class, 'wishlistapi']);
Route::post('/wishlistapi', [DirectoryController::class, 'wishlistpostapi']);
Route::post('/removewishlist', [DirectoryController::class, 'removewishlistpostapi']);
Route::get('/search_filter/{keybord}', [DirectoryController::class, 'search_filter']);
Route::get('/highlight/{highlight_type}', [DirectoryController::class, 'filter_highlight_type']);
Route::post('/postreview', [DirectoryController::class, 'postreview']);
// Route::get('/search_api/{slug}', [DirectoryController::class, 'search_api']);
// Route::get('/search_api', [DirectoryController::class, 'search_api']);
Route::get('/search_api', [DirectoryController::class, 'search_api']);
Route::get('/search_api/{slug}', [DirectoryController::class, 'search_api']);
Route::get('/SubCat_search_api', [DirectoryController::class, 'SubCat_search_api']);
Route::get('/filterallproduct', [DirectoryController::class, 'filterallproduct']);
Route::get('/lang/{id}', [DirectoryController::class, 'language']);// not
Route::get('/highlight_type', [DirectoryController::class, 'filterallproduct']);
Route::get('/appaddsdata', [DirectoryController::class, 'appaddsdata']);
Route::get('/cat_search', [DirectoryController::class, 'cat_search']);


Route::post('/create-device-token',  [ApiController::class, 'DeviceToken']);
