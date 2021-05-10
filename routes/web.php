<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

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

//index.php?controller=&action
// / => UserController@index


// WEB FOR COMPANY
Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/companies/create', [CompanyController::class, 'create']);
Route::post('/companies', [CompanyController::class, 'store']);
Route::get('/companies/{company_id}', [CompanyController::class, 'edit']);
Route::put('/companies/{company_id}', [CompanyController::class, 'update']);
Route::delete('/companies/{company_id}', [CompanyController::class, 'destroy']);
Route::get('/companies/show/{company_id}', [CompanyController::class, 'show']);


//WEB FOR USER
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{user_id}', [UserController::class, 'edit']);
Route::put('/users/{user_id}', [UserController::class, 'update']);
Route::delete('/users/{user_id}', [UserController::class, 'destroy']);
Route::get('/users/show/{user_id}', [UserController::class, 'show']);


Route::get('upload', function() {
    return view('upload.index');
});

Route::post('upload', [UploadController::class,'upload']);
// index
Route::get('/', function () {
    return view('index');
});
// news-careeradvices
Route::get('/advices', function () {
    return view('advices.index');
});
Route::get('/advices/article-number-1', function () {
    return view('advices.advice1');
});
Route::get('/advices/article-number-2', function () {
    return view('advices.advice2');
});
Route::get('/advices/article-number-3', function () {
    return view('advices.advice3');
});
Route::get('/advices/article-number-4', function () {
    return view('advices.advice4');
});
//sign-in-up
Route::get('/sign-in', function () {
    return view('sign-in-up.signin');
});
Route::get('/sign-up', function () {
    return view('sign-in-up.signup');
});


