<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CountryController;
use App\Http\Controllers\Web\GuaranteeController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PersonalController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('/');

Route::group(['as' => 'auth.'], function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('postLogin', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('verifyLogin/{userId}', [AuthController::class, 'verifyLogin'])->name('verifyLogin');
    Route::post('post.verifyLogin', [AuthController::class, 'postVerifyLogin'])->name('post.verifyLogin');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('postRegister', [AuthController::class, 'postRegister'])->name('postRegister');
});

Route::get('ajax-getCountryCities/{countryId}', [CountryController::class, 'ajaxGetCountryCities'])->name('ajax-getCountryCities');


Route::group(['middleware' => ['auth:web']], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('guarantees', [GuaranteeController::class, 'guarantees'])->name('guarantees');
    Route::get('add-guarantee', [GuaranteeController::class, 'addGuarantee'])->name('add-guarantee');
    Route::post('store-guarantee', [GuaranteeController::class, 'storeGuarantee'])->name('store-guarantee');
    Route::get('personal-information', [PersonalController::class, 'personalInformation'])->name('personal-information');
    Route::post('update-personal-information', [PersonalController::class, 'updatePersonalInformation'])->name('update-personal-information');
    Route::get('ajax-sendVerificationCode', [PersonalController::class, 'ajaxSendVerificationCode'])->name('ajax-sendVerificationCode');


});


?>

