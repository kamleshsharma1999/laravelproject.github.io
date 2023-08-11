<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerModel;

class BannerControlle extends Controller
{
    public function bannerForm()
    {

        return view('admin/user/BannerForm');

    }
    public function postbannerForm(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',

        ]);
        $addproduct = new BannerModel();

        $addproduct->title = $request->get('title');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $photo = rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('imagess'), $photo);

        }

        $addproduct->image = $photo;

        $addproduct->save();

        return redirect('BannerFormlist');
    }
    public function BannerFormlist(){

        $list=BannerModel::all();
        return view('admin/user/BannerFormlist',compact('list'));

      }


    //
}