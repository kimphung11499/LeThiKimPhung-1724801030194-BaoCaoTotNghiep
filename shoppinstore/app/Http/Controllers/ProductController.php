<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
// use Symfony\Component\HttpFoundation\Session\Session;
use App\Exports\ProductExport;
use Excel;

class ProductController extends Controller
{
    public function show()
    {
        $data = DB::table('products')->where('product_status',1)
            ->join('brands','products.brand_id','=','brands.id')
            ->join('categories','products.category_id','=','categories.id')
            ->get();
       
        return view('Products.show')->with(compact('data'));
    }
    public function Statistical()
    {
        $data = DB::table('products')->get();
        return view('Products.statistical')->with(compact('data'));
    }
    public function add(Request $request)
    {
        if($request->isMethod('post')){
                                                                                                                                        
            $data = $request->all();

            $target_dir = "uploads/products/";
            $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
            $target_file1 = $target_dir . basename($_FILES["product_img_1"]["name"]);
            $target_file2 = $target_dir . basename($_FILES["product_img_2"]["name"]);
            $target_file3 = $target_dir . basename($_FILES["product_img_3"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
            $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["product_img"]["tmp_name"]);
                
                $check1 = getimagesize($_FILES["product_img_1"]["tmp_name"]);
                $check2 = getimagesize($_FILES["product_img_2"]["tmp_name"]);
                $check3 = getimagesize($_FILES["product_img_3"]["tmp_name"]);
                if($check !== false && $check1 !== false && $check2 !== false && $check3 !== false) {
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
            } else {
                if (
                    move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file) 
                    && move_uploaded_file($_FILES["product_img_1"]["tmp_name"], $target_file1)
                    && move_uploaded_file($_FILES["product_img_2"]["tmp_name"], $target_file2)
                    && move_uploaded_file($_FILES["product_img_3"]["tmp_name"], $target_file3)
                    ) {
                    $imageName =basename( $_FILES["product_img"]["name"]) ;
                    $imageName1 =basename( $_FILES["product_img_1"]["name"]) ;
                    $imageName2 =basename( $_FILES["product_img_2"]["name"]) ;
                    $imageName3 =basename( $_FILES["product_img_3"]["name"]) ;
                } else {
                    $imageName = " ";
                    $imageName1 = " ";
                    $imageName2 = " ";
                    $imageName3 = " ";
                }
            }

            $product = new Product();

            $product->category_id = $data['category_id'];
            $product->brand_id = $data['brand_id'];
            $product->product_name = $data['product_name'];
            $product->product_img = $imageName;
            $product->product_img_1 = $imageName1;
            $product->product_img_2 = $imageName2;
            $product->product_img_3 = $imageName3;
            $product->product_price = $data['product_price'];
            $product->product_discount = $data['product_discount'];
            $product->product_qty = $data['product_qty'];
            $product->product_sale = '0';
            $product->product_desc = $data['product_desc'];
            $product->product_status = $data['product_status'];
            $product->save();

            $message = 'Thành công!';
            Session::flash('success_message',$message);
            return redirect()->back();

        }else if($request->isMethod('get')){
            $brands = Brand::where('brand_status',1)->get();
            $categoris = Category::where('status',1)->get();
            return view('Products.add')->with(compact('brands'))->with(compact('categoris'));
        }
    }

    public function edit(Request $request,$id)
    {
        if($request->isMethod('post')){

            $data = $request->all();

            $target_dir = "uploads/products/";
            $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
            $target_file1 = $target_dir . basename($_FILES["product_img_1"]["name"]);
            $target_file2 = $target_dir . basename($_FILES["product_img_2"]["name"]);
            $target_file3 = $target_dir . basename($_FILES["product_img_3"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
            $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
            $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

            if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["product_img"]["tmp_name"]);
            $check1 = getimagesize($_FILES["product_img_1"]["tmp_name"]);
            $check2 = getimagesize($_FILES["product_img_2"]["tmp_name"]);
            $check3 = getimagesize($_FILES["product_img_3"]["tmp_name"]);
                if($check !== false && $check1 !== false && $check2 !== false && $check3 !== false) {
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
            } else {
                if (
                    move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file) 
                    && move_uploaded_file($_FILES["product_img_1"]["tmp_name"], $target_file1)
                    && move_uploaded_file($_FILES["product_img_2"]["tmp_name"], $target_file2)
                    && move_uploaded_file($_FILES["product_img_3"]["tmp_name"], $target_file3)
                    ) {
                    $imageName =basename( $_FILES["product_img"]["name"]) ;
                    $imageName1 =basename( $_FILES["product_img_1"]["name"]) ;
                    $imageName2 =basename( $_FILES["product_img_2"]["name"]) ;
                    $imageName3 =basename( $_FILES["product_img_3"]["name"]) ;
                } else {
                    $imageName = $request->product_img_old;
                    $imageName1 = $request->product_img_1_old;
                    $imageName2 = $request->product_img_2_old;
                    $imageName3 = $request->product_img_3_old;
                }
            }

            
            Product::where('product_id',$id)
                ->update([
                    'category_id' => $data['category_id'],
                    'brand_id' => $data['brand_id'],
                    'product_name' => $data['product_name'],
                    'product_img' => $imageName,
                    'product_img_1' => $imageName1,
                    'product_img_2' => $imageName2,
                    'product_img_3' => $imageName3,
                    'product_price' => $data['product_price'],
                    'product_discount' => $data['product_discount'],
                    'product_qty' => $data['product_qty'],
                    'product_desc' => $data['product_desc'],
                    'product_status' => $data['product_status'],
                ]);
            
                $message = 'Thành công!';
                Session::flash('success_message',$message);
            return redirect('admin/product/show');


        }else if($request->isMethod('get'))
        {
            $brands = Brand::get();
            $categoris = Category::get();
            $product = Product::where('product_id',$id)->first();
            return view('Products.edit')->with(compact('brands'))->with(compact('categoris'))->with(compact('product'));
        }
    }
    public function delete($product_id)
    {
        Product::where('product_id',$product_id)->update([
            'product_status' => '0'
        ]);
        $message = 'Thành công!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }
    public function manyDelete(Request $request){
        $data = $request->all();
        $list_id = $data['product_id'];
        foreach($list_id as $item){
            Product::where('product_id',$item)->update([
                'product_status' => '0'
            ]);
        }

        $message = 'Thành công!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }   

    public function exportInToExcel()
    {
        return Excel::download(new ProductExport,'productlist.xlsx');
    }
}
