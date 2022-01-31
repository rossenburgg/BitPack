<?php

use App\Http\Controllers\PaymentPage;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pay', [PaymentPage::class, 'index']);
Route::get('settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');

Route::get('verify-payment/{reference}', [PaymentPage::class, 'verify']);

Route::get('docs', [App\Http\Controllers\DocsController::class, 'index'])->name('docs');


Route::get('success', [App\Http\Controllers\SuccessController::class, 'index'])->name('success');
Route::any('phone', [App\Http\Controllers\VerifyPhone::class, 'index'])->name('phone');




Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'2fa'], function(){
    Route::get('/','App\Http\Controllers\LoginSecurityController@show2faForm');
    Route::post('/generateSecret','App\Http\Controllers\LoginSecurityController@generate2faSecret')->name('generate2faSecret');
    Route::post('/enable2fa','App\Http\Controllers\LoginSecurityController@enable2fa')->name('enable2fa');
    Route::post('/disable2fa','App\Http\Controllers\LoginSecurityController@disable2fa')->name('disable2fa');

    Route::get('/page', 'App\Http\Controllers\PageController@index');

    // 2fa middleware
    Route::post('/2faVerify', function () {
        return redirect(URL()->previous());
    })->name('2faVerify')->middleware('2fa');
});

// test middleware
Route::get('/test_middleware', function () {
    return "2FA middleware work!";
})->middleware(['auth', '2fa']);
