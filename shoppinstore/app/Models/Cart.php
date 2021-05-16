<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    public function showCart(){

        if(Session::has('id_customer')){
            $customer  = Customer::where('customer_id',Session::get('id_customer'))->first();
            $userCartItems = DB::table('carts')->where('customer_id',Session::get('id_customer'))->where('cart_status','1')
                ->join('products','carts.product_id','=','products.product_id')
                ->orderBy('id','DESC')->get()->toArray();
            $total = 0;
            $totalItem = 0;
            foreach($userCartItems as $item){
                $total = $total + ($item->product_price * $item->quantity); 
                $totalItem  = $totalItem + $item->quantity; 
            }

            return $userCartItems;
            

        }else{
            $userCartItems = DB::table('carts')->where('session_id',Session::get('session_id'))
                ->join('products','carts.product_id','=','products.product_id')
                ->orderBy('id','DESC')->get()->toArray();
                $total = 0;
                foreach($userCartItems as $item){
                    $total = $total + ($item->product_price * $item->quantity); 
                }
            return $userCartItems;
        }
        
    }
}
