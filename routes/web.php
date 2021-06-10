<?php

use App\Http\Controllers\PageController;
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


//PageController per controllare le mie pagine statiche
//Pagina Home
Route::get('/', 'PageController@index')->name('home'); //nome controller creato e @nome del metodo, la logica ora è in PageController

//Pagina Contatti
Route::get('/contatti', 'PageController@contatti')->name('contatti');

//Pagina Movies
Route::get('/movies', 'MovieController@index')->name('movies');