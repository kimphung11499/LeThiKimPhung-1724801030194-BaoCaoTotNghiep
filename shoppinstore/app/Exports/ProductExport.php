<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use MaatWebsite\Excel\Concerns\WithHeadings;


class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'product_id',
            'product_name',
            'product_price',
            'product_qty',
            'product_sale',
            'product_stock'
        ];
    }

    public function collection()
    {
        // return Product::all();
        return collect(Product::getProduct());
    }
}
