<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Cookie;

class BaseController extends Controller
{
    public function setCookie(Request $request){
        $minutes = 1;
        $response = new Response('hello Cookie');
        $response->withCookie(cookie('name', 'khanh', $minutes));
        return $response;
     }

    public function getCookie(Request $request){
        $value = $request->cookie('name');
        echo $value;
    }
}
