<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainerModels;

class Trainer extends Controller

{
    public function trainerss(){
        $userss=TrainerModels::select('*')->get();
        return view('Front/Trainers',compact('userss'));
    }
    //
}
