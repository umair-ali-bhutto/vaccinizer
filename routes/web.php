<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\UserController;


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
    return view('selection_page');
});




// admin
Route::get('/admin', [AdminController::class, 'login']);
Route::post('adminlogin', [AdminController::class, 'dologin']);
Route::get('/admindashboard', [AdminController::class, 'dashboard']);
Route::get('/adminlogout', [AdminController::class,"logout"]);

Route::get('/showuser', [AdminController::class, 'showuser']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

Route::get('/showhospital', [AdminController::class, 'showhospital']);
Route::get('/deletehospital/{id}', [AdminController::class, 'deletehospital']);

Route::get('/showrequests', [AdminController::class, 'showrequest']);
Route::get('/deleterequest/{id}', [AdminController::class, 'deleterequest']);
// admin


// user route start

Route::get('/patient_register', [UserController::class, 'register']);
Route::post('/doregister', [UserController::class, 'doregister']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/dologin', [UserController::class, 'dologin']);
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::post('/request',[UserController::class,'request']);
Route::get('/showprofile/{id}', [UserController::class, 'showprofile']);
Route::get('/showprofile/editprofile/{id}', [UserController::class, 'edit']);
Route::put('/update/{id}', [UserController::class, 'update']);
Route::get('/logout', [UserController::class,"logout"]);

// user route end



// hospital routes

Route::get('/hospital_register', [HospitalController::class, 'register']);
Route::post('/hospitalregister', [HospitalController::class, 'doregister']);
Route::get('/hospitallogin', [HospitalController::class, 'login']);
Route::post('/dologinhospital', [HospitalController::class, 'dologin']);
Route::get('/hospitaldashboard', [HospitalController::class, 'dashboard']);
Route::get('/hospitallogout', [HospitalController::class,"logout"]);







