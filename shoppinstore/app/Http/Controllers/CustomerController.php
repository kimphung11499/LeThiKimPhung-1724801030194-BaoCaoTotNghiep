<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class CustomerController extends Controller
{
    public function Register(Request $request){
        if($request->isMethod('get')){
            return view('Customer.customerRegister');
        }else if($request->isMethod('post')){

            $data = $request->all();
           

            $customer = new Customer();

            $customer->customer_name = $data['customer_name'];
            $customer->customer_email = $data['customer_email'];
            $customer->customer_phone = $data['customer_phone'];
            $customer->customer_password = md5($data['customer_password']);
            
            $customer->customer_gender = $data['customer_gender'];
            
            $customer->customer_address = $data['customer_address'];
            $customer->customer_brithday = $data['customer_brithday'];

            if($request->customer_password == $request->customer_password_confirm){
                $customer->save();
               return redirect()->back();
                
            }else{
                echo "password and confirm password not match ";
            }
        }
    }

    public function Login(Request $request)
    {
        $data = $request->all();
        
        $customer = Customer::where('customer_email',$data['customer_email'])->first();
        // dd($customer->customer_password);die();
        if($customer->customer_password == md5($data['customer_password']))
        {
            Session::put('id_customer',$customer->customer_id);
            Session::put('name_customer',$customer->customer_name);
            return redirect()->back();
        }else {
            return redirect()->back();
        }
        
    }

    public function Myaccount(){
        $cart = new Cart();
            $itemInCart = $cart->showCart();
            $total = 0;
            $totalItem = 0;
            foreach($itemInCart as $item){
                $total = $total + ($item->product_price * $item->quantity); 
                $totalItem  = $totalItem + $item->quantity; 
            }
        $carts = DB::table('carts')->where('customer_id',Session::get('id_customer'))->where('cart_status','0')
            ->join('products','carts.product_id','=','products.product_id')->get();
        
        return view('Account.customer_order')->with(compact('itemInCart','total','carts'));
    }

    public function trackOrder()
    {
        if(Session::has('id_customer')){
            $order = Order::where('customer_id',Session::get('id_customer'))->whereBetween('status', [1, 3])->get();
            
        }else{
            $order = null;
        }
        
        $cart = new Cart();
            $itemInCart = $cart->showCart();
            $total = 0;
            $totalItem = 0;
            foreach($itemInCart as $item){
                $total = $total + ($item->product_price * $item->quantity); 
                $totalItem  = $totalItem + $item->quantity; 
            }
        
        $products = Product::get();
           
       
        return view('Account.customer_trackorder')->with(compact('order','itemInCart','total','products'));
    }

    public function MyInfo()
    {
        $cart = new Cart();
            $itemInCart = $cart->showCart();
            $total = 0;
            $totalItem = 0;
            foreach($itemInCart as $item){
                $total = $total + ($item->product_price * $item->quantity); 
                $totalItem  = $totalItem + $item->quantity; 
            }
        
            $customer = Customer::where('customer_id',Session::get('id_customer'))->first();

           
        return view('Account.customer_info')->with(compact('itemInCart','total','customer'));
    }

    public function ChangePassword(Request $request)
    {
        $data = $request->all();
        
        
        if(!empty($data['check_box']))
        {

            $customer = Customer::where('customer_email',$data['email'])->first();
            if($customer->customer_password !=  md5($data['password_current'])){
                Session::flash('confirm_password_message','Mat khau khong dung');
                return redirect()->back();
            }else {
                if($data['password_new'] == $data['confirm_password']){
                    Customer::where('customer_email',$data['email'])->update([
                        'customer_name' => $data['name'],
                        'customer_phone' => $data['phone'],
                        'customer_address' => $data['address'],
                        'customer_password' => md5($data['password_new']),
                        'customer_brithday' => $data['birthday']
                    ]);
                    Session::flash('confirm_password_message','Thay doi thong tin thanh cong');
                    return redirect()->back();
                }else {
                    Session::flash('confirm_password_message','mat xac nhan mat  khau khong dung');
                    return redirect()->back();
                }
            }
        }else {
            Customer::where('customer_email',$data['email'])->update([
                'customer_name' => $data['name'],
                'customer_phone' => $data['phone'],
                'customer_address' => $data['address'],
                'customer_brithday' => $data['birthday'],
            ]);
            Session::flash('confirm_password_message','Thay doi thong tin thanh cong');
            return redirect()->back();
        }
    } 

    public function confirmOrder($id)
    {
        $order = Order::where('id',$id)->first();
        $id_carts = explode(',',$order->id_cart);
        foreach($id_carts as $id_cart){
            Cart::where('id',$id_cart)->update([
                'cart_status'  => '0'
            ]);
        }
        Order::where('id',$id)->update([
            'status' => '0'
        ]);
        return redirect()->back();
    }

    public function forgotPassword(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
        
            $newpass = rand(100000,999999);
            Session::flash('newpass',$newpass);

        
        $a = DB::table('customers')->where('customer_email',$data['customer_email'])->update([
            'customer_password' => md5($newpass)
        ]);
                
        $mail_c = $data['customer_email'];
        $details = [
            'title' => 'Mail from HomeService',
            'body' => 'password new '
        ];

        Mail::to($mail_c)->send(new SendMail($details));

        return redirect('/store');
        }
    }
}
