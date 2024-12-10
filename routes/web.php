<?php

use App\Http\Controllers\PostController; 
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



 
//student protal
Route::get('studentprotals', [PostController::class, 'showlist'])->name('show.list');
Route::get('createstudent', [PostController::class,'createstudentlist'])->name('create.student');
Route::post('newstudent', [PostController::class, 'storenow'])->name('student.store');
Route::delete('studentprotals/{id}', [PostController::class,'deletes'])->name('delete.list');


//teacher protal
Route::get('teacher',[TeacherController::class, 'allteachers'])->name('teacher.list');
Route::get('Newteacher', [TeacherController::class,'create'])->name('newteacher.list');
Route::post('Teacherstore', [TeacherController::class, 'store'])->name('teacher.store');
Route::delete('TeachelistDelete/{id}', [TeacherController::class, 'destroy'])->name('teacher.delete');



