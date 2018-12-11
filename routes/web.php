<?php

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware'=>'auth'], function(){
//    Route::get('dashboard', function() {
//        return view('backend.dashboard');
//    });


    //User Management
    Route::resource('users', 'UserController');
    //Site Configurations
    Route::get('settings', 'SiteConfigurationController@index');
    Route::post('settings/save', 'SiteConfigurationController@store');
    Route::post('settings/update', 'SiteConfigurationController@update');
    //Features Management
    Route::resource('features', 'FeatureController');
    Route::resource('blogs', 'BlogController');
    //Contact Config
    Route::get('contact/config', 'ContactController@configContact');
    Route::get('contact/save', 'ContactController@store');
    Route::get('contact/update', 'ContactController@update');





});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainPageController@index');