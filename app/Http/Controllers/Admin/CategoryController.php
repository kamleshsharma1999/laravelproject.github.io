<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;


class CategoryController extends Controller
{
    //
    public function Categoryform()
    {

        return view('admin/Category/categoryform');

    }
    public function addform(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $addproduct = new CategoryModel();

        $addproduct->name = $request->get('name');


        // $addproduct->price=$request->get('price');


        $addproduct->save();

        return redirect('Categorylist');
        //
    }
    public function Categorylist()
    {

        $list = CategoryModel::all();
        return view('admin/Category/listcategory', compact('list'));

    }
    public function editss($id)
    {
        $editdat = CategoryModel::where('id', $id)->first();
        return view('admin/Category/editcategory', compact('editdat'));
    }
    public function editdata(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',


        ]);
        $addproduct = CategoryModel::where('id', $id)->first();

        $addproduct->name = $request->get('name');


        // $addproduct->price=$request->get('price');


        $addproduct->save();

        return redirect('Categorylist ')->withSuccess('updated successfully');
    }
    public function deleted($id)
    {
        $deletee = CategoryModel::where('id', $id)->first();
        $deletee->delete();
        return redirect('Categorylist')->withSuccess('deleted successfully');
    }


    public function statuss($id)
    {
        $product = CategoryModel::select('status')->where('id', $id)->first();
        if ($product->status == '1') {
            $status = '0';
        } else {
            $status = '1';
        }
        $value = array('status' => $status);
        CategoryModel::where('id', $id)->update($value);

        return redirect()->back();
    }
}