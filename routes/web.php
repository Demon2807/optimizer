<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/campaigns', function(){
    return 'Hello world';
})->name('campaigns');
Route::get('/import', 'Import\WizardController@index')->name('import');
Route::get('/import/step_two', 'Import\WizardController@sourcing')->name('import_step_two');
Route::post('/import/file', 'Import\WizardController@processFile')->name('import_file');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
