<?php

use Illuminate\Support\Facades\Route;


Route::get('/studentsList','StudentController@viewStudent');
Route::get('/student-Course-List/{id}','StudentController@studentCourseView');
Route::get('/Course-taken-student-list/{id}','CourseController@viewStudentList');
Route::get('/student-Profile-view/{id}','ProfileController@studentProfileView');



