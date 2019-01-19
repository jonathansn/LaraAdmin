<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application- These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group- Now create something great!
|
*/

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.home.index');
    Route::resource('dashboard', 'AdminDashboardController', ['names' =>
        [
            'index' => 'admin.dashboard.index',
        ]]);
    Route::resource('modules', 'ModuleController', ['names' =>
        [
            'index' => 'admin.modules.index',
            'create' => 'admin.modules.create',
            'store' => 'admin.modules.store',
            'show' => 'admin.modules.show',
            'edit' => 'admin.modules.edit',
            'update' => 'admin.modules.update',
            'destroy' => 'admin.modules.destroy',
        ]]);
    Route::resource('groups', 'GroupController', ['names' =>
        [
            'index' => 'admin.groups.index',
            'create' => 'admin.groups.create',
            'store' => 'admin.groups.store',
            'show' => 'admin.groups.show',
            'edit' => 'admin.groups.edit',
            'update' => 'admin.groups.update',
            'destroy' => 'admin.groups.destroy',
        ]]);
    Route::resource('unities', 'UnityController', ['names' =>
        [
            'index' => 'admin.unities.index',
            'create' => 'admin.unities.create',
            'store' => 'admin.unities.store',
            'show' => 'admin.unities.show',
            'edit' => 'admin.unities.edit',
            'update' => 'admin.unities.update',
            'destroy' => 'admin.unities.destroy',
        ]]);
    Route::resource('access_log', 'AccessLogController', ['names' =>
        [
            'index' => 'admin.access_log.index',
            'create' => 'admin.access_log.create',
            'store' => 'admin.access_log.store',
            'show' => 'admin.access_log.show',
            'edit' => 'admin.access_log.edit',
            'update' => 'admin.access_log.update',
            'destroy' => 'admin.access_log.destroy',
        ]]);
    Route::resource('users', 'UserController', ['names' =>
        [
            'index' => 'admin.users.index',
            'create' => 'admin.users.create',
            'store' => 'admin.users.store',
            'show' => 'admin.users.show',
            'edit' => 'admin.users.edit',
            'update' => 'admin.users.update',
            'destroy' => 'admin.users.destroy',
        ]]);
});

Route::group(['middleware' => ['auth'], 'namespace' => 'Settings', 'prefix' => 'settings'], function(){
    Route::get('/', 'SettingsController@index')->name('settings.home.index');
    Route::resource('panel', 'SettingsPanelController', ['names' =>
        [
            'index' => 'settings.panel.index',
            'create' => 'settings.panel.create',
            'store' => 'settings.panel.store',
            'show' => 'settings.panel.show',
            'edit' => 'settings.panel.edit',
            'update' => 'settings.panel.update',
            'destroy' => 'settings.panel.destroy',
        ]]);
    Route::resource('widgets', 'WidgetController', ['names' =>
        [
            'index' => 'settings.widgets.index',
            'create' => 'settings.widgets.create',
            'store' => 'settings.widgets.store',
            'show' => 'settings.widgets.show',
            'edit' => 'settings.widgets.edit',
            'update' => 'settings.widgets.update',
            'destroy' => 'settings.widgets.destroy',
        ]]);
});

Route::group(['namespace' => 'Site'], function(){
    Route::get('/', 'SiteController@index')->name('site.home');
});

Auth::routes();
