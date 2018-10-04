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
    $data = [];
    $data['version'] = '1.1';
    return view('welcome',$data);
});

Route::get('/about', function () {
    $response_arr = [];
    $response_arr['author'] = 'BP';
    $response_arr['version'] = '1.1';
    return $response_arr;
});


Route::get('/di','test@di');


//Route::get('/facades/db', function () {
     //return DB::select('SELECT * from table');
//});

Route::get('/facades/encrypt', function () {
     return Crypt::encrypt('123456789');
});

Route::get('/facades/decrypt', function () {
     return Crypt::decrypt('eyJpdiI6ImxaSTluTTFsclYyMUtMNGhiWnFvMVE9PSIsInZhbHVlIjoieVF5Z3lnekpMYkVFaEV4eWdXMFBCTVlxTGxpV3lGbFZ0VWZxZFBcL1JzbTA9IiwibWFjIjoiOTE3Njk5OTM5ZTNmNmQyNTcyZjg2MWI2MDJlOTc4ZWM2YWVlNTQ4OWFhM2FmNTAyY2I0YTJlNWQ3MTM2MmYyMyJ9');
});

