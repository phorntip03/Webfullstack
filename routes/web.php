<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/backend', function () {
//     return view('backend');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //เส้นทางไปหน้า  dashboard
    Route::get('/dashboard', function () {
        return view('backend');
    })->name('dashboard');

    //เส้นทางไปหน้า  profile
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    //เส้นทางไปหน้า  User
    Route::get('/userdata', function () {
        return view('userdata');
    })->name('userdata');
    //เส้นทางไปหน้า  adduser
    Route::get('/adduser', function () {
        return view('adduser');
    })->name('adduser');

    Route::get('/edituser/{id}', function ($id) {
        return view('edituser',compact('id'));
    })->name('edituser');
});
