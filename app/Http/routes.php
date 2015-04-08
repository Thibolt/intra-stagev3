<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);




/*
|--------------------------------------------------------------------------
| Professors Routes
|--------------------------------------------------------------------------
*/

//Route for dashboard of professors
Route::get('professors/dashboard', 'ProfessorsController@dashboard');

//Route for profile of professors
Route::get('professors/profile', 'ProfessorsController@profile');



/*
|--------------------------------------------------------------------------
| Students Routes
|--------------------------------------------------------------------------
*/

//Route for dashboard of students
Route::get('students/dashboard', 'StudentsController@dashboard');

//Route for research intership
Route::get('students/research-internship', 'StudentsController@researchInternship');

//Route for submit internship
Route::get('students/submit-internship', 'StudentsController@submitInternship');

//Route for evaluate internship
Route::get('students/evaluate-internship', 'StudentsController@evaluateInternship');