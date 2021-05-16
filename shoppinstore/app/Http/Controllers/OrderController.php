<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    
    public function orderReceived()
    {
        if(Session::has('id_customer')){
            $order = Order::where('customer_id',Session::get('id_customer'))->orderBy('id','DESC')->first();
            $itemInCart = DB::table('carts')->where('customer_id',Session::get('id_customer'))
                ->where('cart_status','0')->join('products','products.product_id','=','carts.product_id')->where('cart_status',2)
                ->get()->toArray();
        }else if(Session::has('session_id')){
            $order = Order::where('session_id',Session::get('session_id'))->orderBy('id','DESC')->first();
            $itemInCart = DB::table('carts')->where('session_id',Session::get('session_id'))
                ->where('cart_status','0')->join('products','products.product_id','=','carts.product_id')
                ->get()->toArray();
        }
        $quantity = explode(',',$order->quantity);
        $price = explode(',',$order->price);
        $products = Product::get();
        $total = 0;
        $total_order = 0;
        for($i=0; $i<count($quantity); $i++){
            $total_order = $total_order + $quantity[$i] * $price[$i];
        }
        
       
        return view('Carts.order_received')->with(compact('order','itemInCart','total','products','total_order'));
    }
    public function listOrder()
    {
        $order = Order::get();
        return view('Order.list_order')->with(compact('order'));
    }

    public function createInvoice(Request $request, $id)  
    {
        $order = Order::where('id',$id)->first();
        $products = Product::get(); 

        $arrayPrice = explode(',',$order->price);
        $quantity = explode(',',$order->quantity);
        $total =0;
       
            for($i=0; $i<count($quantity); $i++){
                $total = $total + ($arrayPrice[$i] * $quantity[$i]);
            }
    
            
        
        return view('Invoice.create')->with(compact('order','products','total'));
    }

    public function orderDelete(Request $request)
    {
        $data = $request->all();
        $list_id = $data['order_id'];
        foreach($list_id as $item){
            Order::where('id',$item)->delete();
        }
        $message = 'delete admib successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }
    
}
