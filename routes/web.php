<?php

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware'=>'auth'], function(){
    Route::get('dashboard', function() {
        return view('backend.dashboard');
    });


    //Site Configurations
    Route::get('settings', 'SiteConfigurationController@index');
    Route::post('settings/save', 'SiteConfigurationController@store');
    Route::post('settings/update', 'SiteConfigurationController@update');
    //Contact Config
    Route::get('contact/config', 'ContactConfigController@configContact');
    Route::post('contact/save', 'ContactConfigController@store');
    Route::post('contact/update', 'ContactConfigController@update');
    Route::get('messages', 'ContactController@index');
    Route::delete('message/{message}', 'ContactController@destroy')->name('message.destroy');

    //User Management
    Route::resource('users', 'UserController');
    //Slider Management
    Route::resource('sliders', 'SliderController');
    //Features Management
    Route::resource('features', 'FeatureController');
    //Blog Management
    Route::resource('blogs', 'BlogController');
    //Portfolio
    Route::resource('portfolio-items', 'PortfolioController');
    //Feedback From Clients
    Route::resource('feedbacks', 'TestimonialController');






});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainPageController@index');
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store')->name('message.send');