<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class InvoiceController extends Controller
{
    public function saveInvoice(Request $request)
    {
        $data = $request->all();

        $invoice = new Invoice();
        $invoice->customer_name = $data['name'];
        $invoice->phone = $data['phone'];
        $invoice->email = $data['email'];
        $invoice->address = $data['address'];
        $invoice->product_id = implode(',',$data['product_id']);
        $invoice->quantity = implode(',',$data['quantity']);
        $invoice->price = implode(',',$data['price']);

        $quantity = $data['quantity'];
        $price = $data['price'];
        
        $total_invoice = 0;
        for($i=0; $i<count($quantity); $i++){
            $total_invoice = $total_invoice + $quantity[$i] * $price[$i];
        }
        $invoice->invoice_price =  $total_invoice;

        $invoice->payment = $data['payment'];
        $invoice->status_payment = $data['status_payment'];
        $invoice->status_ship = $data['status_ship'];
        $invoice->dataExpired = $data['dataExpired'];
        $invoice->admin_id = Session::get('admin_id');
        $invoice->save();

        if($data['status_payment'] == 1 && $data['status_ship'] == 1){
            Order::where('id',$data['order_id'])->update([
                'status' => '3'
            ]);
        }else if($data['status_payment'] == 2 || $data['status_ship'] == 2 || $data['status_ship'] == 3){
            Order::where('id',$data['order_id'])->update([
                'status' => '2'
            ]);
        }
        return redirect('admin/order/list-order');

    }

    public function listInvoice()
    {
        $invoices = Invoice::get();
        $products = Product::get();
        return view('Invoice.list_invoice')->with(compact('invoices','products'));
    }

    public function Delete(Request $request)
    {
        $data = $request->all();
        $list_id = $data['invoice_id'];
        foreach($list_id as $item){
            Invoice::where('id',$item)->delete();
        }
        $message = 'delete admib successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }

    public function Detail($id)
    {
        $invoice = Invoice::where('id',$id)->first();
        $admin = Admin::where('id',$invoice['admin_id'])->first();
        $products = Product::get();
        return view('Invoice.detail_invoice')->with(compact('invoice','admin','products'));
    }
}
