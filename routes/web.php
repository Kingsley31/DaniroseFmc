<?php
use App\SystemModels\Specialization;
use App\SystemModels\City;
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
    $specializations=Specialization::all();
    $cities=City::all();
    return view('welcome',['specializations'=>$specializations,'cities'=>$cities]);
});

Route::get('/adddoctor/create','AddDoctorController@create');

Route::post('/adddoctor', 'AddDoctorController@store');


Route::get('/appointment/home/create', 'AppointBookingController@homeCreate');

Route::post('/appointment/home/book','AppointBookingController@homeBook');

Route::get('/admin/view/appointments','ViewAppointmentsController@adminViewAppointments');


Route::get('/reset-password/{code}/{email}','ChangePasswordController@showChangePasswordForm');

