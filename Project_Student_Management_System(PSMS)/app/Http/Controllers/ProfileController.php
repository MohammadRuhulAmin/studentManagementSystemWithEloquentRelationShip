<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Student;
use App\course;
class ProfileController extends Controller
{
    public function studentProfileView($id){
        $student = Student::find($id);
        $profile =  $student->profile;
        return view('Profile.studentProfile',compact('profile'));
    }

}
