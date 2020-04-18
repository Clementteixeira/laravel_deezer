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

Route::get('/landing/{id}', function($id) {
    echo('Bonjour utilisateur numéro ');
    echo($id);
});

Route::get('/artist', 'ArtistController@artist');

Route::get('/topfrance', 'TopfranceController@artist');
Route::get('/topfrance', 'Topfrance@topfrance');
Route::get('/topalbum', 'AlbumController@topalbum');
Route::get('/artistv2', 'TopFiveController@topfive');


Route::get('/album','AlbumsController@index')->name('albums');
Route::post('/album-insert','AlbumsController@insert')->name('albums-insert');
Route::get('/album-update','AlbumsController@update')->name('albums-update');
Route::get('/album-delete','AlbumsController@delete')->name('albums-delete');


Route::get('/track', 'FavSongController@index')->name('favtracks');
Route::get('/track-delete', 'FavSongController@delete')->name('favtracks-delete');
Route::post('/track-insert', 'FavSongController@insert')->name('favtracks-insert');
Route::get('/track-update', 'FavSongController@insert')->name('favtracks-update');


//return view('artistv2');