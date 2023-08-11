<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;


class Users extends Controller
{
    //
    public function usersform(){
        
        return view('admin/user/Usersform');

      }
      
      public function postusersform(Request $request){
        $request->validate([
            'name'=>'required',  
          'email' => 'required|regex:/(.+)@(.+)\.(.+)/i', 
          'mobile'=>'required',  
          'address'=>'required',  
         ]);
         $addproduct=new UserModel();

         $addproduct->name=$request->get('name');
         $addproduct->email=$request->get('email');
         $addproduct->mobile=$request->get('mobile');
         $addproduct->address=$request->get('address');
         // $addproduct->price=$request->get('price');
         
         
         $addproduct->save();
         
         return redirect('usersformlist');
      
      }
      public function usersformlist(){

        $list=UserModel::all();
        return view('admin/user/Usersformlist',compact('list'));

      }

      // edit data

      public function edits($id){
        $editdata=UserModel::where('id',$id)->first(); 
        return view('admin/user/userformedit',compact('editdata'));
      }

      public function editdata(Request $request,$id){

        $request->validate([
          'name'=>'required',  
        'email' => 'required|regex:/(.+)@(.+)\.(.+)/i', 
        'mobile'=>'required',  
        'address'=>'required',  
       ]);
       $addproduct=UserModel::where('id',$id)->first(); 
       $addproduct->name=$request->get('name');
       $addproduct->email=$request->get('email');
       $addproduct->mobile=$request->get('mobile');
       $addproduct->address=$request->get('address');
       
       
       $addproduct->save();
       
       return redirect('usersformlist')->withSuccess('updated successfully');
      
    
      }

      public function deleted($id){
        $deletee=UserModel::where('id',$id)->first();
        $deletee->delete();
        return redirect('usersformlist')->withSuccess('deleted successfully');
      }
}
