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

