<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// Gestion des filieres
//
Route::get('filieres','FiliereController@index');
Route::get('filieres/create','FiliereController@create');
Route::get('filieres/show/{id}','FiliereController@show');
Route::get('filieres/edit/{id}','FiliereController@edit');
Route::post('/filieres','FiliereController@store');
Route::get('filieres/enable/{id}','FiliereController@enable');
Route::get('filieres/disable/{id}','FiliereController@disable');
Route::get('/filieres_','FiliereController@fifi');
//Fin gestion des filieres

route::get('/deconnexion','Auth\CustomLogController@deconnecter');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


/*route user
Route::get('/users','Admin\UserController@index')->middleware('auth','admin');
Route::get('/users/create','Admin\UserController@create')->middleware('auth','admin');
Route::post('/users','Admin\UserController@store')->middleware('auth','admin');
Route::get('/users/{id}/open','Admin\UserController@open')->middleware('auth','admin');
Route::get('/users/{id}/close','Admin\UserController@close')->middleware('auth','admin');
Route::get('users/{id}/edit','Admin\UserController@edit')->middleware('auth','admin');
Route::post('users/edit','Admin\UserController@save')->middleware('auth','admin');
//fin user

//Route des pages d'acceuils
Route::get('admin/acceuil','Admin\AcceuilController@index')->middleware('auth','admin');
Route::get('local/acceuil','Admin\AcceuilController@index')->middleware('auth','local');
Route::get('etudiant/acceuil','Admin\AcceuilController@index')->middleware('auth','etudiant');
Fin*/

//Route de la gestion des étudiants
Route::get('/etudiant','Local\LocalController@index');
Route::post('/etudiant','Local\LocalController@store');
Route::get('/etudiant/create','Local\LocalController@create');
Route::get('/etudiant/edit/{id}','Local\LocalController@edit');
Route::get('/etudiant/open/{id}','Local\LocalController@open');
Route::get('/etudiant/close/{id}','Local\LocalController@close');
Route::get('/etudiant/edit','Local\LocalController@save');
//
//route user
Route::get('/users','Admin\UserController@index')->middleware('auth','admin');
Route::get('/users/create','Admin\UserController@create')->middleware('auth');
Route::post('/users','Admin\UserController@store')->middleware('auth');
Route::get('/users/{id}/open','Admin\UserController@open')->middleware('auth');
Route::get('/users/{id}/close','Admin\UserController@close')->middleware('auth');
Route::get('users/{id}/edit','Admin\UserController@edit')->middleware('auth');
Route::post('users/edit','Admin\UserController@save')->middleware('auth');
//fin user

//Route des pages d'acceuils
Route::get('admin/acceuil','Admin\AcceuilController@index')->middleware('auth','admin');
Route::get('local/acceuil','Admin\AcceuilController@index')->middleware('auth','local');
Route::get('etudiant/acceuil','Admin\AcceuilController@index')->middleware('auth','etudiant');
//Fin

// Gestion des sites
//
Route::get('sites','SiteController@index');
Route::get('sites/create','SiteController@create');
Route::get('sites/show/{id}','SiteController@show');
Route::get('sites/edit/{id}','SiteController@edit');
Route::post('/sites','SiteController@store');
Route::get('sites/enable/{id}','SiteController@enable');
Route::get('sites/disable/{id}','SiteController@disable');
//Fin gestion des filieres
