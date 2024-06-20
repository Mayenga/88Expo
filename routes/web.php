<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\ExhibitorController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\VenueController;

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

Route::post('/register', 'App\Http\Controllers\DashboardController@save_user')->name('register');

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for users
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/events', 'App\Http\Controllers\EventController@index')->name('getevents');
    Route::get('/createvent', 'App\Http\Controllers\EventController@create')->name('createvent');

    Route::get('/getschedule', 'App\Http\Controllers\ScheduleController@index')->name('getschedule');
    Route::get('/creatschedule', 'App\Http\Controllers\ScheduleController@create')->name('creatschedule');

    Route::get('/getexhibitors', 'App\Http\Controllers\ExhibitorController@index')->name('getexhibitors');
    Route::get('/createxhibitor', 'App\Http\Controllers\ExhibitorController@create')->name('createxhibitor');

    Route::get('/getspeakers', 'App\Http\Controllers\SpeakerController@index')->name('getspeakers');
    Route::get('/creatspeaker', 'App\Http\Controllers\SpeakerController@create')->name('creatspeaker');

    Route::get('/getattendees', 'App\Http\Controllers\AttendeeController@index')->name('getattendees');

    Route::get('/getsponsors', 'App\Http\Controllers\SponsorController@index')->name('getsponsors');
    Route::get('/creatsponsor', 'App\Http\Controllers\SponsorController@create')->name('creatsponsor');

    Route::get('/getvenues', 'App\Http\Controllers\VenueController@index')->name('getvenues');
    Route::get('/creatvenue', 'App\Http\Controllers\VenueController@create')->name('creatvenue');
});

// for blogwriters
Route::group(['middleware' => ['auth', 'role:superadmin']], function() { 
    
});

require __DIR__.'/auth.php';
