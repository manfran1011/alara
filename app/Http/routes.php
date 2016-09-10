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
use App\Note;


Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', function () {
	$notes=\App\Note::all();
	// dd($notes);
    return view('notes',compact('notes'));
});
Route::post('notes', function () {
	return 'creating a note';
});

Route::get('notes/create', function(){

	return '[Create notes]';

});

Route::get('notes/{note}/{slon?}', function ($note,$slon=null){

	dd($note,$slon);

})->where('note','[0-9]+');
