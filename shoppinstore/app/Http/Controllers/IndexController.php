<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Comments;

class IndexController extends Controller
{
    public function Index()
    {
        $cart = new Cart();
            $itemInCart = $cart->showCart();
            $total = 0;
            $totalItem = 0;
            foreach($itemInCart as $item){
                $total = $total + ($item->product_price * $item->quantity); 
                $totalItem  = $totalItem + $item->quantity; 
            }

        $data = Product::get()->take(6);
        $dataa = Product::get()->whereBetween('product_id',[6,15])->take(6);
        // dd($dataa);
        // die();
        $comments = Comments::join('customers','comments.cus_id','=','customers.customer_id')
            ->join('products','comments.pro_id','=','products.product_id')
            ->get()->take(2);
        return view('Customer.customerIndex')->with(compact('data','itemInCart','total'))->with(compact('dataa','comments'));
    }
    public function Shop(Request $request)
    {
        if($request->isMethod('get')){
            
            $cart = new Cart();
            $itemInCart = $cart->showCart();
            $total = 0;
            $totalItem = 0;
            foreach($itemInCart as $item){
                $total = $total + ($item->product_price * $item->quantity); 
                $totalItem  = $totalItem + $item->quantity; 
            }

            
            $data = Product::get();

            $categories = Category::get();
            
           
            return view('Customer.shop')->with(compact('data','itemInCart','total','categories'));

        }else if($request->isMethod('post')){
            
            $data = $request->cate;
            $categories = Category::get();
            $products = Product::get();
            return view('Customer.CustomerProductByCate')->with(compact('data'))->with(compact('products'))->with(compact('categories'));
            
        }
    }

    public function productDetail($id)
    {
    
        $cart = new Cart();
            $itemInCart = $cart->showCart();
            $total = 0;
            $totalItem = 0;
            foreach($itemInCart as $item){
                $total = $total + ($item->product_price * $item->quantity); 
                $totalItem  = $totalItem + $item->quantity; 
            }

        $product = DB::table('products')->where('product_id',$id)
            ->join('categories','products.category_id','=','categories.id')
            ->join('brands','products.brand_id','=','brands.id')
            ->get();
            
        $comments = Comments::where('pro_id',$id)->join('customers','comments.cus_id','=','customers.customer_id')->get();
        return view('Customer.product_detail')->with(compact('product','itemInCart','total','comments'));
    }

    public function productByCategory($id)
    {
        
        
            $cart = new Cart();
            $itemInCart = $cart->showCart();
            $total = 0;
            $totalItem = 0;
            foreach($itemInCart as $item){
                $total = $total + ($item->product_price * $item->quantity); 
                $totalItem  = $totalItem + $item->quantity; 
            }

            
            $data = Product::where('category_id',$id)->get();

            $categories = Category::get();
            
           
            return view('Customer.shop')->with(compact('data','itemInCart','total','categories'));
    }

    public function productByDiscount($discount)
    {
        $cart = new Cart();
        $itemInCart = $cart->showCart();
        $total = 0;
        $totalItem = 0;
        foreach($itemInCart as $item){
            $total = $total + ($item->product_price * $item->quantity); 
            $totalItem  = $totalItem + $item->quantity; 
        }

        $data = Product::where('product_discount',$discount)->get();

        $categories = Category::get();
            
           
        return view('Customer.shop')->with(compact('data','itemInCart','total','categories'));

    }
}

