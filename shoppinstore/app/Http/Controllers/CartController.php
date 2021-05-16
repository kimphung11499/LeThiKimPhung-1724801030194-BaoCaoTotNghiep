<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        if($request->isMethod('post')){
            // if(Session::has('id_customer')){
                $data = $request->all();
            
                $cart = new Cart();
                $getProduct = Product::where(['product_id'=>$data['product_id']])->first()->toArray();
                if($getProduct['product_qty'] < $data['quantity']){
                    $message = 'Require Quantity Is Not available !';
                    Session::flash('error_message',$message);
                    return redirect()->back();
                }
                
                if(Session::has('id_customer')){
                    $customer_id = Session::get('id_customer');
                    $itemInCartsCustomer = Cart::where('customer_id',$customer_id)->get()->toArray();
                    
                    $session_id = " ";
                   
                }else{
                    $session_id = Session::get('section_id');
                    if(empty($session_id)){
                        $session_id = Session::getId();
                        Session::put('session_id',$session_id);
                    }
                    $itemInCartsCustomer = Cart::where('session_id',$session_id)->get()->toArray();
                    $customer_id = null;
                }
                
                $cart->session_id = $session_id;
                $cart->customer_id = $customer_id;
                $cart->product_id = $data['product_id'];
                
                foreach($itemInCartsCustomer as $item){

                    if($data['product_id'] == $item['product_id'] && $item['cart_status'] == 1){
                        $quantity_update = $data['quantity'] + $item['quantity'];
                        if(!empty($customer_id)){
                            Cart::where('customer_id',$customer_id)
                            ->where('product_id',$item['product_id'])
                            ->where('cart_status',1)
                            ->update([
                                'quantity' => $quantity_update
                            ]);
                            $message ="product has been added in Cart";
                            Session::flash('success_message',$message);
                            return Redirect()->back();
                            die();
                        }else if (!empty($session_id)){
                            Cart::where('session_id',$session_id)
                                ->where('product_id',$item['product_id'])
                                ->where('cart_status',1)
                            ->update([
                                'quantity' => $quantity_update
                            ]);
                            $message ="product has been added in Cart";
                            Session::flash('success_message',$message);
                            return Redirect()->back();
                            die();
                        }
                    }
                }
                $cart->quantity = $data['quantity'];
                $cart->cart_status = '1';
                $cart->save();
                $message ="product has been added in Cart";
                Session::flash('success_message',$message);
                return Redirect()->back();
        }
    }

    public function showCart(){

        if(Session::has('id_customer')){
            $customer  = Customer::where('customer_id',Session::get('id_customer'))->first();
            $userCartItems = DB::table('carts')->where('customer_id',Session::get('id_customer'))->where('cart_status',1)
                ->join('products','carts.product_id','=','products.product_id')
                ->orderBy('id','DESC')->get()->toArray();
            $total = 0;
            $totalItem = 0;
            foreach($userCartItems as $item){
                $total = $total + ($item->product_price * $item->quantity); 
                $totalItem  = $totalItem + $item->quantity; 
            }

            return view('Carts.cartnew')->with(compact('userCartItems','total','customer','totalItem'));

        }else{
            $userCartItems = DB::table('carts')->where('session_id',Session::get('session_id'))
                ->join('products','carts.product_id','=','products.product_id')
                ->orderBy('id','DESC')->get()->toArray();
                $total = 0;
                foreach($userCartItems as $item){
                    $total = $total + ($item->product_price * $item->quantity); 
                }

            return view('Carts.cartnew')->with(compact('userCartItems','total'));
        }
        
    }

   
    public function UpdateCartItemQuantity(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            Cart::where('id',$data['cartid'])->update([
                'quantity'=>$data['quantity']
            ]);
            $userCartItems = DB::table('carts')->where('customer_id',Session::get('id_customer'))
            ->join('products','carts.product_id','=','products.product_id')
            ->orderBy('id','DESC')->get();
            $total = 0;

            foreach($userCartItems as $item){
                $total = $total + ($item->product_price * $item->quantity); 
            }
            return response()->with(compact('total'));
        }
    }
    
    public function deleteCartItem(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            Cart::where('id',$data['cartid'])->delete();
            // return response();
        }
    }
 
    public function Checkout(Request $request)
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
            $customer = Customer::where('customer_id',Session::get('id_customer'))->first();
            return view('Carts.checkout')->with(compact('itemInCart','total','customer'));
        }else if($request->isMethod('post')){
            $data = $request->all();
            
            
            $order = new Order();
            $order->customer_id = Session::get('id_customer');
            $order->session_id = Session::get('session_id');
            $order->name = $data['name'];
            $order->address = $data['address'];
            $order->province = $data['province'];
            $order->phone = $data['phone'];
            $order->email = $data['email'];
            $order->product = implode(',',$data['product']);
            $order->quantity = implode(',',$data['quantity']);
            $order->price = implode(',',$data['price']);
            $order->id_cart = implode(',',$data['id_cart']);
            $order->note = $data['note'];
            $order->payment = $data['payment'];
            // $order->code_discount = $data['code_discount'];

            $quantity = $data['quantity'];
            $price = $data['price'];
            
            $total_order = 0;
            for($i=0; $i<count($quantity); $i++){
                $total_order = $total_order + $quantity[$i] * $price[$i];
            }
            $order->price_order =  $total_order;
            

            $order->status = '1';

            $cart = new Cart();
            $itemInCart = $cart->showCart();
            foreach($itemInCart as $item){
                Cart::where('id',$item->id)->update([
                    'cart_status' => '2'
                ]);
            }
            
            $productId = $data['product'];
            $quantity = $data['quantity'];
            
            for($i=0; $i<count($productId); $i++) {
                $product = Product::where('product_id',$productId[$i])->first()->toArray();
                $qty = $product['product_qty'];

                $quantityUpdate = $qty - $quantity[$i];
                Product::where('product_id',$productId[$i])->update([
                    'product_stock'=> $quantityUpdate,
                    'product_sale'=> $qty - $quantityUpdate
                ]);
            }

            $mail = $data['email'];
            

            $order->save();

            $details = [
                'title' => 'Mail from Shopping store',
                'body' => 'Cam on ban da ma hang tai shopping store'
            ];

            Mail::to($mail)->send(new SendMail($details));

            return redirect('store/checkout/order-received');
        }
        
    }
}
