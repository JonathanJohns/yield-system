<?php

use App\YieldHistory;

use Illuminate\Http\Request;

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

Route::post('/yield', function (Request $request) {

    // return $request->all();

    $yield = new YieldHistory;

    $yield->serial_number = $request->serial_number ;
    $yield->printer_id = $request->printer_id ;
    $yield->printer_name = $request->printer_name ;
    $yield->organization_name = $request->organization_name ;
    $yield->organization_id = $request->organization_id ;
    $yield->ticket_number = $request->ticket_number ;
    $yield->cro_number = $request->cro_number ;
    $yield->initial_reading = $request->initial_reading ;
    $yield->new_reading = $request->new_reading ;
    $yield->yield = $request->yield ;
    $yield->request_date = $request->request_date ;
    $yield->delivery_date = $request->delivery_date ;
    $yield->toner_serial_number = $request->toner_serial_number ;
    $yield->toner_changed = $request->toner_changed ;
    $yield->comments = $request->comments ;
    $yield->save();


    return 'saved';
});


Route::get('/reading/{serial}', function ($serial) {

    $check = YieldHistory::where('serial_number', $serial)
    ->orderBy('created_at', 'desc')
    ->first();

    if ($check == null) {
        return 'empty';
    } else {
        return $check;
    }

})->middleware('auth');


Route::get('/reading/{serial}', function ($serial) {

    $check = YieldHistory::where('serial_number', $serial)
    ->orderBy('created_at', 'desc')
    ->first();

    if ($check == null) {
        return 'empty';
    } else {
        return $check;
    }

})->middleware('auth');

Route::get('/history/{serial}', function ($serial) {

    $check = YieldHistory::where('serial_number', $serial)
    ->orderBy('created_at', 'desc')
    ->get();

    if ($check == null) {
        return 'empty';
    } else {
        return $check;
    }

})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


