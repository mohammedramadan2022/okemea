<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DeviceController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ClientController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;


Route::group(['as' => 'auth.'], function () {

    Route::get('/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login');
    Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('admin.postLogin');
});


Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('/');
    Route::resource('cities', CityController::class);
    Route::resource('countries', CountryController::class);
    Route::resource('devices', DeviceController::class);
    Route::resource('admins', AdminController::class);
    Route::get('waiting-devices', [DeviceController::class, 'waitingDevices'])->name('waiting-devices');
    Route::get('clients', [ClientController::class, 'clients'])->name('clients');
    Route::get('client-devices/{clientId}', [ClientController::class, 'clientDevices'])->name('client-devices');
    Route::post('client-delete/{clientId}', [ClientController::class, 'clientDelete'])->name('client-delete');


    Route::group(['as' => 'devices.', 'prefix' => 'devices'], function () {

        Route::post('device-active-toggle/{deviceId}',
            [DeviceController::class, 'deviceActiveToggle'])->name('device-active-toggle');
        Route::post('device-accept/{deviceId}',
            [DeviceController::class, 'deviceAccept'])->name('device-accept');
        Route::post('device-refuse/{deviceId}',
            [DeviceController::class, 'deviceRefuse'])->name('device-refuse');

    });


    Route::view('dashboard-02', 'dashboard.dashboard-02')->name('dashboard-02');


//Language Change
    Route::get('lang/{locale}', function ($locale) {
        if (!in_array($locale, ['en', 'de', 'es', 'fr', 'pt', 'cn', 'ae'])) {
            abort(400);
        }
        Session()->put('locale', $locale);
        Session::get('locale');
        return redirect()->back();
    })->name('lang');


    Route::prefix('dashboard')->group(function () {
        Route::view('index', 'dashboard.index')->name('index');
        Route::view('dashboard-02', 'dashboard.dashboard-02')->name('dashboard-02');
    });


    Route::get('/clear-cache', function () {
        Artisan::call('config:cache');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return "Cache is cleared";
    })->name('clear.cache');


});
