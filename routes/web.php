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
    return view('welcome');
});

Auth::routes();


Route::get('/contact', function () {
    return view('contact');
});

Route::post('/svcontact','ContactController@contact');

Route::get('/home', 'HomeController@index');

Route::get('/changepw', function () {
    return view('changepw');
});

/*Admin */
Route::get('/condetails','ContactController@contactdetails');
Route::get('/condelete/{id}','ContactController@condelete');

Route::get('/markasreplied/{id}','ContactController@reply');
Route::get('/markasnotreplied/{id}','ContactController@notreply');

Route::get('/regdetails', 'HomeController@regdetails');
Route::get('/regdelete/{id}','HomeController@delete');
Route::get('/regupdate/{id}','HomeController@update');
Route::post('/updateregistration','HomeController@updatereg');

/*pharmacists*/
Route::get('/appoinments', function () {
    return view('appoinments');
});

Route::get('/prescriptions', function () {
    return view('prescriptions');
});

/*doctor*/
Route::get('/addpatient', function () {
    return view('addpatient');
});

Route::post('/svpatient','PatientController@patient');

Route::get('/viewpatients','PatientController@patientsdetails');
Route::get('/viewpatient/{id}','PatientController@patientdetail');
Route::post('/updatepatient','PatientController@updatepatient');
Route::get('/deletepatient/{id}','PatientController@delete');

Route::get('/addpharma', function () {
    return view('addpharma');
});

Route::post('/svpharma','PharmacistController@pharmacist');
Route::get('/viewpharma', 'PharmacistController@pharmadetails');
Route::get('/updatepharma/{id}', 'PharmacistController@updatepharma');
Route::post('/updatepharmacist','PharmacistController@updatepharmacist');
Route::get('/deletepharma/{id}','PharmacistController@delete');
