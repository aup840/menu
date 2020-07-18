<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;
/* -------------------------------------------------------------------------
|  Web Routes
| --------------------------------------------------------------------------
| Here is where you can register web routes for your application. These 
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! */

Route::get('/', function () {
    return view('page.home');
});

Route::get('/becas', function () {
    return view('page.becas');
});


// Render in view
Route::get('/contact', ['uses' => 'ContactUsFormController@createForm']);

// Post form data
Route::post('/contact', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);

Route::get('/investigacion', function () {
    return view('page.investigacion');
});

Route::group(['prefix'=>'proyectos'], function(){
	Route::get('/dpage1', function(){
 	return view('page.dropdown1');
	})-> name('dpage1');

	Route::get('/dpage2', function(){
		return view('page.dropdown2');
		})-> name('dpage2');

	Route::get('/dpage3', function(){
		return view('page.dropdown3');
		})-> name('dpage3');
	});

Route::group(['prefix'=>'estudiantes'], function(){
	Route::get('/auriarte', function(){
 	return view('page.auriarte');
	})-> name('auriarte');
	
	Route::get('/hcardenas', function(){
 	return view('page.hcardenas');
	})-> name('hcardenas');

	Route::get('/mrios', function(){
 	return view('page.mrios');
	})-> name('mrios');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');