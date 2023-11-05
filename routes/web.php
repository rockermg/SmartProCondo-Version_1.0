<?php

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    
    

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/', 'CommonController@login')->name('login');
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');



    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
        */
        Route::group(['prefix' => 'staff'], function() {
            Route::get('/', 'StaffController@index')->name('users.index');
            Route::get('/create', 'StaffController@create')->name('users.create');
            Route::post('/create', 'StaffController@store')->name('users.store');
            Route::get('/{user}/show', 'StaffController@show')->name('users.show');
            Route::get('/{user}/edit', 'StaffController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'StaffController@update')->name('users.update');
            Route::delete('/{user}/delete', 'StaffController@destroy')->name('users.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);

        /**
         * Task Routes
         */
        Route::group(['prefix' => 'task'], function() {
            Route::get('/', 'TaskController@index')->name('task.index');
            Route::get('/create', 'TaskController@create')->name('task.create');
            Route::post('/create', 'TaskController@store')->name('task.store');
            Route::get('/{task}/show', 'TaskController@show')->name('task.show');
            Route::get('/{task}/edit', 'TaskController@edit')->name('task.edit');
            Route::patch('/{task}/update', 'TaskController@update')->name('task.update');
            Route::delete('/{task}/delete', 'TaskController@destroy')->name('task.destroy');
        });

        Route::get('/dashboard', 'CommonController@home')->name('index');

        Route::get('/profile', 'CommonController@profile')->name('profile');

        

        
    });
});
