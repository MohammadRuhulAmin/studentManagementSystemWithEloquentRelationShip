<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use App\Profile;
class Student extends Model
{
    public function courses(){
        return  $this->belongsToMany(Course::class);
    }
    public function profile(){
        return $this->hasOne(Profile::class);
    }
}
