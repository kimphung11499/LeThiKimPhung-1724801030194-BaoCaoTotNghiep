<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test()
    {
        $cart = new Cart();
        $data = $cart->showCart();
        dd($data);
        die();
    }
}
