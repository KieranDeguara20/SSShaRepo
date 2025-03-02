<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

// College routes
Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index');
Route::post('/colleges', [CollegeController::class, 'store'])->name('colleges.store'); // store a new college
Route::get('/colleges/create', [CollegeController::class, 'create'])->name('colleges.create');
Route::get('/colleges/{id}/edit', [CollegeController::class, 'edit'])->name('colleges.edit');
Route::post('/colleges/{id}', [CollegeController::class, 'editColleges'])->name('colleges.editColleges'); // update a college
Route::get('/colleges/{id}/view', [CollegeController::class, 'view'])->name('colleges.view'); // view a college
Route::get('/colleges/{id}', [CollegeController::class, 'destroy'])->name('colleges.destroy'); // delete a college

// Student routes
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::post('/students', [StudentController::class, 'store'])->name('students.store'); // store a new student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::post('/students/{id}', [StudentController::class, 'editStudents'])->name('students.editStudents'); // update a student
Route::get('/students/{id}/view', [StudentController::class, 'view'])->name('students.view'); // view a student
Route::get('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy'); // delete a student