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

Route::get('/', function () {
    return view('index');
});

// Route::get('/home', function () {
//     return redirect()->route('admin.home');
// });


// Admin

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('admin/login','App\Http\Controllers\Admin\UsersController@showloginAdmin')->name('admin.showlogin');
Route::post('admin/login','App\Http\Controllers\Admin\UsersController@loginAdmin')->name('admin.login');
Route::get('admin/logout','App\Http\Controllers\Admin\UsersController@logoutAdmin')->name('admin.logout');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['check.admin.user'] ], function () {
    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'App\Http\Controllers\Admin\PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'App\Http\Controllers\Admin\PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'App\Http\Controllers\Admin\RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'App\Http\Controllers\Admin\RolesController');

    // Users
    Route::delete('users/destroy', 'App\Http\Controllers\Admin\UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'App\Http\Controllers\Admin\UsersController');

    // Hotels
    Route::delete('hotels/destroy', 'App\Http\Controllers\Admin\HotelsController@massDestroy')->name('hotels.massDestroy');
    Route::resource('hotels', 'App\Http\Controllers\Admin\HotelsController');

    // Room Types
    Route::delete('room-types/destroy', 'App\Http\Controllers\Admin\RoomTypesController@massDestroy')->name('room-types.massDestroy');
    Route::resource('room-types', 'App\Http\Controllers\Admin\RoomTypesController');

    // Rooms
    Route::delete('rooms/destroy', 'App\Http\Controllers\Admin\RoomsController@massDestroy')->name('rooms.massDestroy');
    Route::resource('rooms', 'App\Http\Controllers\Admin\RoomsController');

    // Bookings
    Route::delete('bookings/destroy', 'App\Http\Controllers\Admin\BookingsController@massDestroy')->name('bookings.massDestroy');
    Route::resource('bookings', 'App\Http\Controllers\Admin\BookingsController');

    
});

// home
Route::get('/login','App\Http\Controllers\Home\UserController@showlogin')->name('home.showlogin');
Route::post('/login','App\Http\Controllers\Home\UserController@login')->name('home.login');

Route::get('/logout','App\Http\Controllers\Home\UserController@logout')->name('home.logout');

Route::get('/register','App\Http\Controllers\Home\UserController@showregister')->name('home.register');
Route::post('/register','App\Http\Controllers\Home\UserController@register')->name('home.register');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
