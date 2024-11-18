<?php

use App\Http\Controllers\AppointmentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('calendar-event', [AppointmentsController::class, 'index']);
Route::post('calendar-crud-ajax', [AppointmentsController::class, 'calendarEvents']);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();
Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', function() {
        return view('home');
    })->name('home');
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/pdpa', function() {
        return view('auth.pdpa');
    })->name('pdpa');

    // หน้าแรกของ admin
    Route::get('/admin', function() {
        return view('admin.admin');
    })->name('admin');

    // หน้าแรก calendar
    Route::get('/calendar', function() {
        return view('admin.calendar.index');
    })->name('car_index');
    // สร้าง calendar
    Route::get('/calendar_create', function() {
        return view('admin.calendar.create');
    })->name('car_create');
    // แก้ไข calendar
    Route::get('/calendar_edit', function() {
        return view('admin.calendar.edit');
    })->name('car_edit');
    // impost csv
    Route::get('/calendar_import', function() {
        return view('admin.calendar.import');
    })->name('car_import');

    // หน้าแรก project
    Route::get('/project', function() {
        return view('admin.project.index');
    })->name('project_index');
    // ดูข้อมูล project
    Route::get('/project_show', function() {
        return view('admin.project.show');
    })->name('project_show');
    //update file form
    Route::get('/update_form', function() {
        return view('admin.updateform');
    })->name('update_form');


    // Route::get('/text', function() {
    //     return view('text');
    // })->name('text');
    Route::post('/check_privacy', 'App\Http\Controllers\CheckController@check_privacy')->name('check_privacy');
    Route::get('/step_one', 'App\Http\Controllers\CheckController@step_one')->name('step_one');
    Route::get('/step_two', 'App\Http\Controllers\CheckController@step_two')->name('step_two');
    Route::get('/step_three', 'App\Http\Controllers\CheckController@step_three')->name('step_three');
    Route::get('/step_four', 'App\Http\Controllers\CheckController@step_four')->name('step_four');
    Route::get('/step_five', 'App\Http\Controllers\CheckController@step_five')->name('step_five');
    Route::get('/editor', 'App\Http\Controllers\CheckController@editor')->name('editor');


    Route::post('/upload', 'App\Http\Controllers\UploadController@store')->name('upload');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    // Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');

    // Route::post('/check_privacy', 'check_privacy')->name('check_privacy');
});

Route::get('check-time', function() {
	$currentTime = Carbon::now();
    return "Current datetime is: " . $currentTime;
});
