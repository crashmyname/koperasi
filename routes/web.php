<?php

use Helpers\Route;
use Helpers\View;

Route::get('/', function(){
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