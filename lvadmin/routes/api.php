<?php

 

 

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
Route::get('details', 'API\UserController@details');

Route::get('logout', 'API\UserController@logoutApi');
Route::get('getAllUsers', 'API\UserController@getAllUsers');

});
 