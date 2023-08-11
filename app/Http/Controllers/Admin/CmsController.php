<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CmsModel;


class CmsController extends Controller
{
    public function cmsform()
    {

        return view('admin/user/CmsForm');

    }
    public function postcmsform(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $addproduct=new CmsModel();

         $addproduct->title=$request->get('title');
         $addproduct->description=$request->get('description');
         
         // $addproduct->price=$request->get('price');
         
         
         $addproduct->save();
         
         return redirect('CmsFormlist ');
    //
}
public function CmsFormlist(){

    $list=CmsModel::all();
    return view('admin/user/Cmslist',compact('list'));

  }

}
