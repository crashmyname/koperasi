<?php

use App\Controllers\AuthController;
use Helpers\Route;
use Helpers\View;

Route::get('/',function(){
    return view('auth/login');
});
Route::get('/login',function(){
    return view('auth/login');
});
Route::post('/login',[AuthController::class, 'login']);
Route::get('/home', function(){
    if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
        return view('home/home');
    }
    return view('home/home',[],'layout/app');
});
Route::get('/notif', function(){
    if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
        return view('notification/notif');
    }
    return view('notification/notif',[],'layout/app');
});
Route::get('/setting', function(){
    if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
        return view('settings/setting');
    }
    return view('settings/setting',[],'layout/app');
});
Route::get('/profile', function(){
    if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
        return view('profile/profile');
    }
    return view('profile/profile',[],'layout/app');
});
Route::get('/saldo', function(){
    if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
        return view('saldo/saldo');
    }
    return view('saldo/saldo',[],'layout/app');
});
Route::get('/pinjaman', function(){
    if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
        return view('pinjaman/pinjaman');
    }
    return view('pinjaman/pinjaman',[],'layout/app');
});
Route::get('/shu', function(){
    if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
        return view('shu/shu');
    }
    return view('shu/shu',[],'layout/app');
});
Route::get('/laporan', function(){
    if (!empty($_SERVER['HTTP_HX_REQUEST'])) {
        return view('laporan/laporan');
    }
    return view('laporan/laporan',[],'layout/app');
});