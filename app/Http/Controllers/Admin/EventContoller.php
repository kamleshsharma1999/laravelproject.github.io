<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\eventModel;

class EventContoller extends Controller
{
    public function EventForm()
    {

        return view('admin/Event/eventform')->withSuccess('insat successfully');;

    }
    public function PostEventForm(Request $request)
    {
        $request->validate([
           'image' => 'required',
           'Title' => 'required',
           'description' => 'required',

        ]);
        $addproduct = new eventModel();
  
       
        $addproduct->Title = $request->get('Title');
        $addproduct->description = $request->get('description');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $photo = rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('Event-imagess'), $photo);
        }
            $addproduct->image = $photo;

   
        
        $addproduct->save();

        return redirect('EventFormlist');

    //
}

public function EventFormlist(){

    $list=eventModel::all();
    return view('admin/Event/list',compact('list'));

  }
  public function edits($id){
    $editdata=eventModel::where('id',$id)->first(); 
    return view('admin/Event/edit',compact('editdata'));
  }
  public function editdata(Request $request, $id)
    {
        $request->validate([
           'image' => 'required',
           'Title' => 'required',
           'description' => 'required',
           

        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $photo = rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('Event-imagess'), $photo);
        }
        eventModel::where('id',$id)->update([
  
        'Title' => $request->get('Title'),
        'description'=> $request->get('description'),
        'image' => $photo,
      
        ]);
        return redirect('EventFormlist')->withSuccess('updated successfully');
}
public function deleted($id){
    $deletee=eventModel::where('id',$id)->first();
    $deletee->delete();
    return redirect('EventFormlist')->withSuccess('deleted successfully');
  }
}