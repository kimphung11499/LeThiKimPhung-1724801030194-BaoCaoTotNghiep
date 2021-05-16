<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public static function getProduct()
    {
        $records = DB::table('products')->select('product_id','product_name','product_price','product_qty','product_sale','product_stock')->get()->toArray();
        return $records;
    }
}
