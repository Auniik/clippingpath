<?php

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware'=>'auth'], function(){
//    Route::get('dashboard', function() {
//        return view('backend.dashboard');
//    });


    
    Route::resource('users', 'UserController');
    Route::get('settings', 'SiteConfigurationController@index');



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainPageController@index');