<?php

Route::get('/', 'HomeController@index');

Route::get('contact', 'ContactController@index');

Route::get('cookies', 'PagesController@cookies');

Route::get('resources', ['as' => 'resources_route', 'uses' => 'ResourcesController@index']);
Route::get('resources/create', ['as' => 'create_route', 'uses' => 'ResourcesController@create']);
Route::get('resources/{id}', ['as' => 'show_route', 'uses' => 'ResourcesController@show']);

// Authentication, registering 2 controllers
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);