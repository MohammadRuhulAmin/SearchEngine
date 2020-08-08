<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('searchPage');
});
Route::post('/search','SearchController@searchUserInfo');
