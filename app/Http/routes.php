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
Route::get('professors', 'ProfessorsController@dashboard');

//Route for dashboard of professors
Route::get('professors/dashboard', 'ProfessorsController@dashboard');

//Route for profile of professors
Route::get('professors/profile', 'ProfessorsController@profile');

//Route for password of professors
Route::get('professors/password', 'ProfessorsController@password');

//Route for edit convenant intership of professors
Route::get('professors/edit-covenant-intership', 'ProfessorsController@editConvenantIntership');

//Route for edit a summary of intership
Route::get('professors/summary-intership', 'ProfessorsController@summaryIntership');

//Route to manage database
Route::get('professors/management-database', 'ProfessorsController@managementDatabase');




/*
|--------------------------------------------------------------------------
| Administration Routes
|--------------------------------------------------------------------------
*/

//Route for management of Professors
Route::get('professors/professors-management', 'AdministrationController@managementProfessors');

//Route for modify a professors
Route::get('professors/modify-professors-{login}', 'AdministrationController@modifyProfessors');

//Route for create a professors
Route::get('professors/create-professors', 'AdministrationController@createProfessors');

//Route for management of students
Route::get('professors/students-management', 'AdministrationController@managementStudents');

//Route for management of students
Route::get('professors/modify-students-list', 'AdministrationController@studentsList');

//Route for edit the template convenant
Route::get('professors/edit-template-convenant', 'AdministrationController@editTemplateConvenant');
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