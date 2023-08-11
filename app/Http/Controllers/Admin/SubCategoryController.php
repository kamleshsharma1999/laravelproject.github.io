<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategoryModel;
use App\Models\CategoryModel;

class SubCategoryController extends Controller
{

    public function cagetorylistss(){

        $listsss=CategoryModel::get();
        return view('admin/SubCategory/subCategoryform',compact('listsss'));
    
      }
      public function subcategoryAdd(Request $request){
        $request->validate([
            'name' => 'required',
            'categoryId' => 'required',
          ]);
          $addproduct=new SubCategoryModel();

         $addproduct->name=$request->get('name');
         $addproduct->categoryId=$request->get('categoryId');
         $addproduct->save();
         
         return redirect('dfdfdlists');
    //

      }
      public function jointable(){
        $data=SubCategoryModel::select('sub_category_models.*','category_models.name as names')->join('category_models','sub_category_models.categoryId','=','category_models.id')->get();
        return  view('admin/SubCategory/subCategorylist',compact('data'));
      }
      public function statusupdate($id){
        $data=SubCategoryModel::select('status')->where('id',$id)->first();
        if($data->status=='1'){
          $status='0';
        }
        else{
          $status='1';
        }
        $values=array('status'=>$status);
        SubCategoryModel::where('id',$id)->update($values);
return redirect()->back();
      }
      
   
}