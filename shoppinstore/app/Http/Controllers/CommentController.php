<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $data = $request->all();
        
        $cmt = new Comments();
        $cmt->cus_id = Session::get('id_customer');
        $cmt->pro_id = $data['product_id'];
        $cmt->cmt = $data['cmt'];
        $cmt->status = '0';
        
        $cmt->save();
        $message ="thanh cong";
        Session::flash('success_message',$message);
        return redirect()->back();
    }

    public function browseComment(Request $request)
    {
        if($request->isMethod('get')){
            $data = DB::table('comments')->join('customers','comments.cus_id','=','customers.customer_id')
            ->join('products','comments.pro_id','=','products.product_id')->get(); 
                
            return view('Comment.list_comment')->with(compact('data'));
        }
    }
    public function updateStatus($id)
    {
        Comments::where('id',$id)->update([
            'status' => '1'
        ]);
        return redirect()->back();
    }
}
