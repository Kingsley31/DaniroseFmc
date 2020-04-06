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

Route::get('/adddoctor/create','AddDoctorController@create')->middleware('auth');

Route::post('/adddoctor', 'AddDoctorController@store')->middleware('auth');


Route::get('/appointment/home/create', 'AppointBookingController@homeCreate');

Route::post('/appointment/home/book','AppointBookingController@homeBook');

Route::get('/admin/view/appointments','ViewAppointmentsController@adminViewAppointments')->middleware('auth');


Route::get('/reset-password/{code}/{email}','ChangePasswordController@showChangePasswordForm');
Route::post('/reset-password','ChangePasswordController@changePassword');

Route::get('/login','LoginController@showUserForm')->name('login');
Route::post('/login-user','LoginController@loginUser');
Route::get('/register','RegisterationController@showRegForm')->name('register');
Route::post('/register-user','RegisterationController@registerUser');
Route::get('/logout','LoginController@logoutUser');


Route::get('/patientdashboard', 'PatientDashboardController@index')->middleware('auth');
Route::get('/admindashboard', 'AdminDashboardController@index')->middleware('auth');


