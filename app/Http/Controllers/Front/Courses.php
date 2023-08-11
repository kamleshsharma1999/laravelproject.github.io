<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourserrModel;

class Courses extends Controller
{

    
    public function coursess(){
        $userss=CourserrModel::select('*')->get();
        return view('Front/Courses',compact('userss'));
    }
    
}
