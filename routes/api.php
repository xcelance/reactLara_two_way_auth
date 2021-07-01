<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group.
|
*/

// Auth Endpoints
Route::group([ 'prefix' => 'v1/auth' ], function ($router) {
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LogoutController@logout');
});

// Resource Endpoints
Route::group([ 'prefix' => 'v1' ], function ($router) {
    Route::get('/basic', 'UserController@basicSettings');
    // all admin routes.
    Route::group(['middleware' => 'admin'], function ($router) {
    	// menu routes
    	Route::prefix('menu')->group(function () {
    		Route::prefix('menu')->group(function () {
	            Route::get('/',         'MenuEditController@index')->name('menu.menu.index');
	            Route::get('/create',   'MenuEditController@create')->name('menu.menu.create');
	            Route::post('/store',   'MenuEditController@store')->name('menu.menu.store');
	            Route::get('/edit',     'MenuEditController@edit')->name('menu.menu.edit');
	            Route::post('/update',  'MenuEditController@update')->name('menu.menu.update');
	            Route::get('/delete',   'MenuEditController@delete')->name('menu.menu.delete');
	        });

	        Route::prefix('element')->group(function () {
	        	Route::get('/',             'MenuElementController@index')->name('menu.index');
	            Route::get('/move-up',      'MenuElementController@moveUp')->name('menu.up');
	            Route::get('/move-down',    'MenuElementController@moveDown')->name('menu.down');
	            Route::get('/create',       'MenuElementController@create')->name('menu.create');
	            Route::post('/store',       'MenuElementController@store')->name('menu.store');
	            Route::get('/get-parents',  'MenuElementController@getParents');
	            Route::get('/edit',         'MenuElementController@edit')->name('menu.edit');
	            Route::post('/update',      'MenuElementController@update')->name('menu.update');
	            Route::get('/show',         'MenuElementController@show')->name('menu.show');
	            Route::get('/delete',       'MenuElementController@delete')->name('menu.delete');
	        });
        });

        Route::get('/roles/move/move-up',      'RolesController@moveUp')->name('roles.up');
        Route::get('/roles/move/move-down',    'RolesController@moveDown')->name('roles.down');

        // routes for all the processes
        Route::namespace('processes')->group(base_path('routes/admin.php'));
    });

    // users authentication routes.
    Route::group(['middleware' => 'auth:api'], function ($router) {
    	Route::get('menu', 'MenuController@index');
    	// user related routes.
    	Route::prefix('user')->group(function () {
    		Route::get('profile', 'UserController@profile');
    		Route::post('profile', 'UserController@updateProfile');
    	});
        // global search url.
        Route::post('/global-search', 'GlobalSearchController@index');
        // routes for all the processes
        Route::namespace('processes')->group(base_path('routes/authenticated.php'));
    });
});

// Not Found
Route::fallback(function(){
    return response()->json(['message' => 'Resource not found.'], 404);
});
