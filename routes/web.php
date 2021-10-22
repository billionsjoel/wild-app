<?php

use Illuminate\Support\Facades\Route;
use App\Models\Safari;
use App\Models\Destination;

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

Route::get('/safaris', function () {
    //return all safari's

    $safaris = Safari::all();

    return view('safaris', compact('safaris'));
});

Route::get('/safari', function () {
    // retrieve a single safari

    $safaris = Safari::where('id', request('id'))->get();
    $titles = Safari::paginate(10);
    $destinations = Destination::paginate(10);


    return view('safari', compact('safaris', 'titles', 'destinations'));
});

Route::get('/destinations', function () {
    //return destinations

    $destinations = Destination::all();

    return view('destinations', compact('destinations'));
});

Route::get('/destination', function () {
    //return destination
    $destinations = Destination::where('id', request('id'))->get();
    $titles = Destination::paginate(10);
    $safaris = Safari::paginate(10);

    return view('destination', compact('destinations', 'titles', 'safaris'));
});

Route::get('/hotels-&-lodges', function () {
    return view('hotels');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create-safari', function () {
    $safaris = Safari::paginate(5);
    return view('admin.createSafari', compact('safaris'));
});

Route::post('/create-safari', [App\Http\Controllers\HomeController::class, 'createSafari']);

Route::get('/create-destination', function () {
    $destinations = Destination::paginate(5);

    return view('admin.createDestination', compact('destinations'));
});

Route::post('/create-destination', [App\Http\Controllers\HomeController::class, 'createDestination']);

Route::get('/delete-destination/{id}', [App\Http\Controllers\HomeController::class, 'deleteDestination']);
Route::get('/delete-safari/{id}', [App\Http\Controllers\HomeController::class, 'deleteSafari']);
