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
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [ 'uses' => "Site\HomeController@home"]);
// Route::get('/', "Site\HomeController@home");
Route::get('cadastro', "Site\HomeController@cadastro");
Route::get('noticia',['middleware'=> 'auth',   'uses'=> "Site\HomeController@noticia"]);
Route::post('cadastrar/usuario', ['as' =>'user.create', 'uses' => 'Site\HomeController@cadastrar']);


Route::post('auth/login', 'Auth\AuthController@postLogin');





Route::get('/auth/logout', function(){
	Auth::logout();
	return redirect()->to('/');

} );


