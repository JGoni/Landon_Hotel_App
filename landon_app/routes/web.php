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

//Here, We're telling our application route handler that any request to the root URL should be responded with a welcome view.
Route::get('/', 'ContentsController@home');
Route::get('/clients', 'ContentsController@index');
Route::get('/clients/new', 'ContentsController@newClient');
Route::post('/', 'ContentsController@create');
Route::get('/clients/{client_id}', 'ContentsController@show');
Route::post('/clients/{client_id}', 'ContentsController@modify');

Route::get('/reservationss/{client_id}', 'RoomsController@checkAvailableRooms');
Route::post('/reservationss/{client_id}', 'RoomsController@checkAvailableRooms');

Route::post('book/room/{client_id}{room_id}{date_in}{date_out}', 'ReservationsController@bookRoom');

//printing JSON 
Route::get('/about', function () {
    $reponse_arr=[];
    $response_arr['author']='BP';
    $response_arr['version']='0.1.1';
    return $response_arr;
});
    
Route::get('/home', function () {
    $data = [];
    $data['version']='0.1.1';
    return view('Welcome', $data);
});

Route::get('/di', 'ClientController@di');

Route::get('/facades/db', function () {
    return DB::select('SELECT * from table');
});

Route::get('/facades/encrypt', function () {
    return Crypt::encrypt('123456');
    //eyJpdiI6ImFHNUR3ajUrUVFlMG1rSng3R2NGQkE9PSIsInZhbHVlIjoiQzBcL21pU0ZTM0NMaHlnVkxETFRaOHc9PSIsIm1hYyI6ImQ4ZGIwODgzNzNlMzYxNTVlMjczNTEyMzgwNTkwZGUzMzU2NDBlM2IzNmUyOTljZTRlNzY5ZDMzNTQwNTljMmUifQ==
});