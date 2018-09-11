<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
| @author  Gustavo Ocanto <gustavoocanto@gmail.com>
|
*/



Route::get('test/tickt/{id}', ['as' => 'test', 'uses' => 'TestController@tickt']);


