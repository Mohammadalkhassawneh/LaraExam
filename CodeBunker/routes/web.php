<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ResultsController;
use Illuminate\Support\Facades\Auth;

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
    return view('admin.index');
})->name('admin');

Route::resource('/user', UserController::class);
Route::resource('/exam', ExamController::class);
Route::resource('/question', QuestionController::class);
Route::resource('/answer', OptionController::class);
Route::resource('/results', ResultsController::class);
Route::get('/', [HomeController::class , 'index']);
Route::get('/exams', [ExamController::class , 'showExam'])->name("ShowExam");
Route::get('/questions.{id}', [ExamController::class , 'showQuestions'])->name("ShowQuestions");




Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/admin', [HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');

Route::get('/admin', function () {

    return view('admin.index');
})->name('admin')->middleware('admin');

Route::resource('/result', ResultController::class);
Route::get('/showScore', [ResultController::class, 'showScore'])->name('showScore');