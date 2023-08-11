<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\eventModel;

class Event extends Controller
{
    public function eventss(){
        $userss=eventModel::select('*')->get();
        return view('Front/Event',compact('userss'));
    }
    //
}
