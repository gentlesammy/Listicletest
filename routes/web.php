<?php

use Illuminate\Support\Facades\Route;
//temporary binding of ListiclesRepositoryInterface
// App::bind('Repositories\ListiclesRepositoryInterface', 'Repositories\ListiclesRepository');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home Page
Route::get('/', 'DefaultController@homePage')->name('homePage');

//Tags crud route
Route::name('Tags.')->prefix('tags')->group(function(){
    Route::get('/', 'TagsController@index')->name('Index');
    Route::get('/create', 'TagsController@create')->name('Create');
    Route::post('/create', 'TagsController@store')->name('Store');
    Route::get('/{tag}/show', 'TagsController@show')->name('Show');
    Route::get('/{tag}/edit', 'TagsController@edit')->name('Edit');
    Route::put('/{tag}/edit', 'TagsController@update')->name('Update');
    Route::delete('/{tag}/delete', 'TagsController@destroy')->name('Delete');
  });

//Listicles crud route
Route::name('Listicles.')->prefix('listicles')->group(function(){
    Route::get('/', 'ListiclesController@index')->name('Index');
    Route::get('/create', 'ListiclesController@create')->name('Create');
    Route::post('/create', 'ListiclesController@store')->name('Store');
    Route::get('/{listicle}/show', 'ListiclesController@show')->name('Show');
    Route::get('/{listicle}/edit', 'ListiclesController@edit')->name('Edit');
    Route::put('/{listicle}/edit', 'ListiclesController@update')->name('Update');
    Route::delete('/{listicle}/delete', 'ListiclesController@destroy')->name('Delete');
  });


  //demo users route for testing Repository
  Route::get('/users', 'UsersController@index')->name('Index');
  Route::get('/user/{user}', 'UsersController@show')->name('Show');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


