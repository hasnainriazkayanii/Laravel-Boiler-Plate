<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

Route::group(['middleware'=>['auth:admin'],'namespace'=>'App\Http\Controllers\Admin'], function()
{

    Route::get('admin/dashboard', 'DashboardController@index' )->name('admin.dashboard');



    Route::group(['prefix' =>'admin/roles'], function () {
        Route::get('',  'RoleController@index')->name('admin.roles');
        Route::get('create', 'RoleController@create')->name('admin.roles.create');
        Route::get('{id}/edit', 'RoleController@edit')->name('admin.roles.edit');
        Route::post('store', 'RoleController@store')->name('admin.roles.save');
        Route::get('delete/{id}', 'RoleController@destroy')->name('admin.roles.delete');
    });

    Route::group(['prefix' =>'admin/users'], function () {
        Route::get('',  'UserController@index')->name('admin.users');
        Route::get('{id}/edit', 'UserController@edit')->name('admin.users.edit');
        Route::post('store', 'UserController@store')->name('admin.users.save');
        Route::get('delete/{id}', 'UserController@destroy')->name('admin.users.delete');
    });
    Route::group(['prefix' =>'admin/settings'], function () {
        Route::get('',  'SettingController@index')->name('admin.settings');
        Route::get('time-table-settings',  'SettingController@timeTable')->name('admin.settings.timetable');
        Route::get('email-settings',  'SettingController@emailConfig')->name('admin.settings.emailconfig');
        Route::get('paypal-settings',  'SettingController@paypalConfig')->name('admin.settings.paypalconfig');
        Route::post('store',  'SettingController@store')->name('admin.settings.save');
        Route::post('save-settings', 'SettingController@saveSettings')->name('admin.settings.store');
        Route::get('credit-settings',  'SettingController@creditConfig')->name('admin.settings.creditconfig');
        Route::get('edit-email-template/{template_key}','SettingController@emailTemplates')->name('admin.settings.email.templates.edit');
        Route::post('save-template','SettingController@saveTemplates')->name('admin.settings.email.store');
    });
    Route::group(['prefix' =>'admin/profile'], function () {
        Route::get('',  'ProfileController@index')->name('admin.profile');
        Route::post('store',  'ProfileController@store')->name('admin.profile.save');
    });
    Route::group(['prefix' =>'admin/email-templates'], function () {
        Route::get('',  'EmailTemplateController@index')->name('admin.email.templates');
        Route::get('{id}/edit', 'EmailTemplateController@edit')->name('admin.email.templates.edit');
        Route::post('store',  'EmailTemplateController@store')->name('admin.email.templates.save');
    });

});

Route::group(['namespace'=>'App\Http\Controllers\Admin\Auth'], function()
{
    Route::get('admin/login', 'AuthenticatedSessionController@create')->name('admin.login');
    Route::get('admin', 'AuthenticatedSessionController@create')->name('admin.login');
    Route::post('admin/login', 'AuthenticatedSessionController@login')->name('admin.login');
    Route::get('admin/logout', 'AuthenticatedSessionController@logout')->name('admin.logout');

});


Route::group(['prefix'=>'artsian-commands'],function(){
    Route::get('clear-cache', function() {
        $exitCode = Artisan::call('cache:clear');
        return '<h1>Cache  cleared</h1>';
    })->name('atisan.commands.clear.cache');
    Route::get('map-media-path', function() {
        $exitCode = Artisan::call('storage:link');
        return '<h1>Storage Linked</h1>';
    })->name('atisan.commands.map.public.path');
    Route::get('migrate', function() {
        $exitCode = Artisan::call('migrate');
        return '<h1>Migrated</h1>';
    })->name('atisan.commands.migrate');
});
Route::group(['prefix'=>'lang','namespace'=>'App\Http\Controllers'],function () {
    Route::get('/{locale}','LocalizationController@index')->name('language');
});
