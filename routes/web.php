<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Authentication controller
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

//    client controller
Route::get('/', [ClientController::class, 'home']);
Route::get('/advance', [ClientController::class, 'advance']);
Route::get('/jobcompany', [ClientController::class, 'jobcompany']);
Route::get('/jobfunction', [ClientController::class, 'jobfunction']);
Route::get('/jobtitle', [ClientController::class, 'jobtitle']);
Route::get('/jobcategorie/{name}', [ClientController::class, 'jobcategorie']);
Route::get('/company', [ClientController::class, 'company']);
Route::get('/hiring', [ClientController::class, 'hiring']);
Route::get('/abouts', [ClientController::class, 'abouts']);
Route::get('/contact', [ClientController::class, 'contact']);
Route::get('/applynow/{id}', [ClientController::class, 'applynow']);
Route::get('/hiringcompany/{name}', [ClientController::class, 'hiringcompany']);
Route::get('/jobdetails/{id}', [ClientController::class, 'jobdetails']);
Route::get('/register', [ClientController::class, 'register']);
Route::post('/createaccount', [ClientController::class, 'createaccount']);
// Route::post('/login', [ClientController::class, 'login']);
// Route::get('/logout', [ClientController::class, 'logout']);
Route::get('/profile', [ClientController::class, 'profile']);
Route::get('/profile/message', [ClientController::class, 'message']);
Route::get('/profile/readmessage/{id}', [ClientController::class, 'readmessage']);
Route::get('/profile/jobapplied', [ClientController::class, 'jobapplied']);
Route::post('/submit', [ClientController::class, 'submit']);
Route::get('/succes', [ClientController::class, 'succes']);
Route::post('/profile/uploadimage', [ClientController::class, 'uploadimage']);



// Admin controller
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/company', [AdminController::class, 'company']);
Route::get('/admin/vacancy', [AdminController::class, 'vacancy']);
Route::get('/admin/employe', [AdminController::class, 'employe']);
Route::get('/admin/applicants', [AdminController::class, 'applicants']);
Route::get('/admin/categorie', [AdminController::class, 'categorie']);
Route::get('/admin/users', [AdminController::class, 'users']);
Route::get('/admin/addcompany', [AdminController::class, 'addcompany']);
Route::get('/admin/addvacancy', [AdminController::class, 'addvacancy']);
Route::get('/admin/addemploye', [AdminController::class, 'addemploye']);
Route::get('/admin/addcategorie', [AdminController::class, 'addcategorie']);
Route::get('/admin/addusers', [AdminController::class, 'addusers']);
Route::get('/admin/userprofile', [AdminController::class, 'userprofile']);
Route::post('/admin/savecompany', [AdminController::class, 'savecompany']);
Route::get('/admin/deletecompany/{id}', [AdminController::class, 'deletecompany']);
Route::get('/admin/editecompany/{id}', [AdminController::class, 'editecompany']);
Route::post('/admin/updatecompany', [AdminController::class, 'updatecompany']);
Route::post('/admin/saveemployee', [AdminController::class, 'saveemployee']);
Route::get('/admin/deleteemployee/{id}', [AdminController::class, 'deleteemployee']);
Route::get('/admin/editemployee/{id}', [AdminController::class, 'editemployee']);
Route::post('/admin/updateemployee', [AdminController::class, 'updateemployee']);
Route::post('/admin/savecategory', [AdminController::class, 'savecategory']);
Route::get('/admin/deletecategory/{id}', [AdminController::class, 'deletecategory']);
Route::get('/admin/editcategory/{id}', [AdminController::class, 'editcategory']);
Route::post('/admin/updatecategory', [AdminController::class, 'updatecategory']);
Route::post('/admin/createvacancy', [AdminController::class, 'createvacancy']);
Route::get('/admin/deletevacancy/{id}', [AdminController::class, 'deletevacancy']);
Route::get('/admin/editvacancy/{id}', [AdminController::class, 'editvacancy']);
Route::post('/admin/updatevacancy', [AdminController::class, 'updatevacancy']);
Route::get('/admin/viewapplicant/{clientid}/{vacancyid}/{resume}', [AdminController::class, 'viewapplicant']);
Route::get('/admin/deleteapplicant/{id}', [AdminController::class, 'deleteapplicant']);
Route::post('/admin/sendfeedback', [AdminController::class, 'sendfeedback']);
Route::post('/admin/saveusers', [AdminController::class, 'saveusers']);
// Route::get('/admin/logout', [AdminController::class, 'logout']);
// Route::post('/admin/login', [Controller::class, 'login']);
  // authentification








