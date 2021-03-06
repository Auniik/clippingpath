<?php

//Route::get('/order', function () {
//    return view('frontend.order.order');
//});



Route::group(['middleware'=>'auth'], function(){
    Route::get('dashboard', 'OrderController@index');


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
    Route::post('sliders/save', 'SliderController@save');
    //Features Management
    Route::resource('features', 'FeatureController');

    Route::resource('menus', 'MenuController');
    //Submenu management
    Route::get('submenus', 'SubmenuController@index')->name('sunmenus');
    Route::get('submenus/{menu_id}/create', 'SubmenuController@create')->name('submenus.create');
    Route::post('submenus/store', 'SubmenuController@store')->name('submenus.store');
    Route::get('submenus/{submenu}/edit', 'SubmenuController@edit')->name('submenus.edit');
    Route::patch('submenus/{submenu}', 'SubmenuController@update')->name('submenus.update');
    Route::DELETE('submenus/{submenu}', 'SubmenuController@destroy')->name('submenus.destroy');
    //Blog Management
    Route::resource('blogs', 'BlogController');
    Route::resource('orders', 'OrderController');

    Route::resource('pages', 'PageController');
    Route::get('pages/{submenu_id}/add', 'PageController@add')->name('pages.add');
    Route::get('pages/{id}', 'PageController@update')->name('page.update');
    //Portfolio
    Route::resource('portfolio-items', 'PortfolioController');
    //Feedback From Clients
    Route::resource('feedbacks', 'TestimonialController');

    //Social
    Route::resource('socials', 'SocialController');

    Route::get('newsletters', 'NewsletterController@index');
    Route::DELETE('newsletters/{newsletter}', 'NewsletterController@destroy')->name('newsletters.destroy');






});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainPageController@index');


Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store')->name('message.send');
Route::post('newsletters/send', 'NewsletterController@store');
Route::get('order', 'OrderController@create');
//blog
Route::get('blog', 'BlogController@allBlog');
Route::get('features/{feature}', 'FeatureController@feature')->name('feature.show');
Route::get('article/{blog}', 'BlogController@article')->name('article.show');
Route::get('portfolio', 'PortfolioController@portfolio')->name('portfolio');
Route::get('work/{portfolio_item}', 'PortfolioController@portfolioItem')->name('work.show');

Route::get('/{menu}/{slug}', 'MainPageController@show');