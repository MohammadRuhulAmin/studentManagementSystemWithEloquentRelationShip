<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
class StudentController extends Controller
{
    public function viewStudent(){
        $student = Student::all();
        return view('Student.studentView',compact('student'));
    }
    public function studentCourseView($id){
        $student = Student::find($id);
        $courses = $student->courses;
        return view('Course.courseList',compact('courses'));
    }
}
