<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

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

Auth::routes();

Route::group([  'middleware' => 'Language'], function () {

    Route::get('/',"\App\Http\Controllers\FrontController@index");
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/change-language/{lang}',"\App\Http\Controllers\FrontController@changeLang");

    Route::get('/settings', 'App\Http\Controllers\Admin\SettingController@index')->name('settings')->middleware('can:onle_admin');
    Route::post('/settings', 'App\Http\Controllers\Admin\SettingController@store')->name('settings.store')->middleware('can:onle_admin');


});
