<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourserrModel;

class CoursesController extends Controller
{
    public function CoursesForm()
    {

        return view('admin/courses/courser');

    }
    //
    public function postcoursesform(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $addproduct=new CourserrModel();

        $addproduct->title=$request->get('title');
        $addproduct->description=$request->get('description');
        
   
        
        $addproduct->save();
        
        return redirect('Courserslist ')->withSuccess('Data insert successfully');
    }
    public function Courserslist(){

        $list=CourserrModel::all();
        return view('admin/courses/list',compact('list'));
    
      }
      public function editss($id){
        $editdata=CourserrModel::where('id',$id)->first(); 
        return view('admin/courses/edit',compact('editdata'));
      }
      public function editdata(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $addproduct=CourserrModel::where('id',$id)->first(); 

        $addproduct->title=$request->get('title');
        $addproduct->description=$request->get('description');
        
        // $addproduct->price=$request->get('price');
        
        
        $addproduct->save();
        
        return redirect('Courserslist ') ->withSuccess('updated successfully');
    }
    public function deleted($id){
        $deletee=CourserrModel::where('id',$id)->first();
        $deletee->delete();
        return redirect('Courserslist')->withSuccess('deleted successfully');
      }
    
}
