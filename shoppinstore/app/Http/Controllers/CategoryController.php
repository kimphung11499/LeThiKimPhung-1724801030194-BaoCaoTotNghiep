<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
    public function Categories(){
        $data = Category::get();
        return view('Categories.show_Category')->with(compact('data'));
    }

    public function updateCategoryStatus(Request $request, $id)
    {
        $data = DB::table('categories')->where('id',$id)->first();
        if($data->status == 1 ){
            Category::where('id',$id)->update([
                'status' => '0'
            ]);
        }else if($data->status == 0 ){
            Category::where('id',$id)->update([
                'status' => '1'
            ]);
        }
        return redirect()->back();
        
    }

    // public function add_editCategory(Request $request, $id=null)
    // {
    //     if($id==""){
    //         $title = "Add Category";
    //     }else{
    //         $title = "Edit Category";
    //     }
    //     return view();
    // }


    public function addCategory(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $categories = new Category();
            $categories->category_name = $data['category_name'];
            $categories->category_discount = $data['category_discount'];
            $categories->status = $data['status'];
            $categories->save();
            $message = 'Thành công!';
            Session::flash('success_message',$message);
            return redirect()->back();
        }else if($request->isMethod('get')){
            $data = Category::where('status',1)->get();
            return view('Categories.add_Category')->with(compact('data'));
        }
    }

    public function editCategory(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            Category::where('id',$id)
                ->update([
                    'category_name' => $data['category_name'],
                    'category_discount' => $data['category_discount'],
                    'status' => $data['status'], 
                ]);
                $message = 'Thành công!';
                Session::flash('success_message',$message);
            return redirect('admin/category/add');
        }else if($request->isMethod('get')){
            $data = Category::where('id',$id)->first();
            
            return view('Categories.edit_Category')->with(compact('data'));
        }

    }

    public function deleteCategory($id)
    {
        Category::where('id',$id)->update([
            'status' => '0'
        ]);
        $message = 'Thành công!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }

    public function deleteMany(Request $request)
    {
        $data = $request->all();
        $list_id = $data['category_id'];
        foreach($list_id as $item){
            Category::where('id',$item)->update([
                'status' => '0'
            ]);
        }
        $message = 'Thành công!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }

}
