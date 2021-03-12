<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CurrentEventController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::group(['middleware'=>['auth']], function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});

// Route::get('/home', function(){
// 	return view('home');
// });
Route::get('/contact',[ContactController::class,'create']);
Route::post('/msg_submit',[ContactController::class,'store']);
Route::get('/view_message',[ContactController::class,'index']);

// for registration
Route::get('registration',[RegistrationController::class,'create']);
Route::post('new_register',[RegistrationController::class,'store']);
//for adding courses
Route::get('add_course',[CourseController::class,'create']);
Route::post('/submit',[CourseController::class,'store']);
Route::get('/home',[AdminController::class,'index']);

//for adding team member
Route::get('add_team',[TeamController::class,'create']);
Route::post('/send',[TeamController::class,'store']);

//for Services
Route::get('/add_services',[ServiceController::class,'create']);
Route::post('/services_update',[ServiceController::class,'store']);
Route::get('/services',[AdminController::class,'services']);

// For about
Route::get('/add_about',[AboutController::class,'create']);
Route::post('/about_content',[AboutController::class,'store']);
Route::get('/about',[AdminController::class,'abouts']);

//for Menu
Route::get('/add_menu',[MenuController::class,'create']);
Route::post('/add_menu',[MenuController::class,'store']);
Route::get('/menu',[AdminController::class,'menuss']);

//for event
Route::get('/add_event',[EventController::class,'create']);
Route::post('/add_events',[EventController::class,'store']);
Route::get('/upcoming_event',[AdminController::class,'events']);

//for current event
Route::get('/add_currentEvent',[CurrentEventController::class,'create']);
Route::post('/add_current',[CurrentEventController::class,'store']);
Route::get('current_event',[AdminController::class,'curent']);