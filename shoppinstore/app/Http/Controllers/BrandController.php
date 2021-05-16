<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    public function Add(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $brand = new Brand();
            $brand->brand_name = $data['brand_name'];
            $brand->brand_desc = $data['brand_desc'];
            $brand->brand_status = $data['brand_status'];
            $brand->save();
            Session::flash('message','dum dang yeu');
            return redirect()->back();
        }else if($request->isMethod('get')){
            $data = Brand::where('brand_status',1)->get();
            return view('Brands.add')->with(compact('data'));
        }
    }

    public function edit(Request $request, $id)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            Brand::where('id',$id)
                ->update([
                    'brand_name' => $data['brand_name'],
                    'brand_desc' => $data['brand_desc'],
                    'brand_status' => $data['brand_status'], 
                ]);
                $message = 'Thành công!';
                Session::flash('success_message',$message);
            return redirect('admin/brand/add');
        }else if($request->isMethod('get')){
            $data = Brand::where('id',$id)->get();
            return view('Brands.edit')->with(compact('data'));
        }
       
    }

    public function delete($id)
    {
        Brand::where('id',$id)->update([
            'brand_status' => '0'
        ]);
        $message = 'Thành công!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }
    public function deleteMany(Request $request)
    {
        $data = $request->all();
        $list_id = $data['brand_id'];
        foreach($list_id as $item){
            Brand::where('id',$item)->update([
                'brand_status' => '0'
            ]);
        }
        $message = 'Thành công!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }

}
