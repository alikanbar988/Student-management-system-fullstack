<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\batchcontroller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return view('layout');
});


//ROUTES FOR STUDENTS PAGE
Route::get('/students',[StudentController::class, 'index'])->name('students.index');
Route::post('/students',[StudentController::class, 'store'])->name('students.create');
Route::get('/students/create',[StudentController::class, 'create'])->name('students.create');
Route::delete('/students/{id}',[StudentController::class, 'destroy']);
Route::get('/students/{id}',[StudentController::class, 'show'])->name('students.show');
Route::get('/students/{students}/edit',[StudentController::class, 'edit'])->name('students.edit');
Route::patch('/students/{id}', [StudentController::class, 'update'])->name('students.index');

//ROUTES FOR TAECHERS PAGE

Route::get('/teachers',[TeacherController::class, 'index'])->name('teachers.index');
Route::post('/teachers',[TeacherController::class, 'store'])->name('teachers.create');
Route::get('/teachers/create',[TeacherController::class, 'create'])->name('teachers.create');
Route::delete('/teachers/{id}',[TeacherController::class, 'destroy']);
Route::get('/teachers/{id}',[TeacherController::class, 'show'])->name('teachers.show');
Route::get('/teachers/{teachers}/edit',[TeacherController::class, 'edit'])->name('teachers.edit');
Route::patch('/teachers/{id}', [TeacherController::class, 'update'])->name('teachers.index');



//routes for courses page 
Route::get('/courses',[CourseController::class, 'index'])->name('courses.index');
Route::post('/courses',[CourseController::class, 'store'])->name('courses.create');
Route::get('/courses/create',[CourseController::class, 'create'])->name('courses.create');
Route::delete('/courses/{id}',[CourseController::class, 'destroy']);
Route::get('/courses/{id}',[CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/{courses}/edit',[CourseController::class, 'edit'])->name('courses.edit');
Route::patch('/courses/{id}', [CourseController::class, 'update'])->name('courses.index');




//ROUTES FOR BATCHS PAGE
Route::get('/batchs',[batchcontroller::class, 'index'])->name('batchs.index');
Route::post('/batchs',[batchcontroller::class, 'store'])->name('batchs.create');
Route::get('/batchs/create',[batchcontroller::class, 'create'])->name('batchs.create');
Route::delete('/batchs/{id}',[batchcontroller::class, 'destroy']);
Route::get('/batchs/{id}',[batchcontroller::class, 'show'])->name('batchs.show');
Route::get('/batchs/{batchs}/edit',[batchcontroller::class, 'edit'])->name('batchs.edit');
Route::patch('/batchs/{id}', [batchcontroller::class, 'update'])->name('batchs.index');


//ROUTES FOE Enrollments
Route::get('/enrollments',[EnrollmentController::class, 'index'])->name('enrollments.index');
Route::post('/enrollments',[EnrollmentController::class, 'store'])->name('enrollments.create');
Route::get('/enrollments/create',[EnrollmentController::class, 'create'])->name('enrollments.create');
Route::delete('/enrollments/{id}',[EnrollmentController::class, 'destroy']);
Route::get('/enrollments/{id}',[EnrollmentController::class, 'show'])->name('enrollments.show');
Route::get('/enrollments/{enrollments}/edit',[EnrollmentController::class, 'edit'])->name('enrollments.edit');
Route::patch('/enrollments/{id}', [EnrollmentController::class, 'update'])->name('enrollments.index');




//routes for payment page 

Route::get('/payments',[PaymentController::class, 'index'])->name('payments.index');
Route::post('/payments',[PaymentController::class, 'store'])->name('payments.create');
Route::get('/payments/create',[PaymentController::class, 'create'])->name('payments.create');
Route::delete('/payments/{id}',[PaymentController::class, 'destroy']);
Route::get('/payments/{id}',[PaymentController::class, 'show'])->name('payments.show');
Route::get('/payments/{payments}/edit',[PaymentController::class, 'edit'])->name('payments.edit');
Route::patch('/payments/{id}', [PaymentController::class, 'update'])->name('payments.index');



//Route for report page

Route::get('/report/report1/{pid}',[reportController::class,'report1']);



