<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
class CourseController extends Controller
{
    public function viewStudentList($id){
        $course = Course::find($id);
        $studentsList = $course->students;
        return view('Course.perCourseStudentList',compact('studentsList'));
    }
}
