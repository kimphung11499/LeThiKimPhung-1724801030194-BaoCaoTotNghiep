<?php

// namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Customer;
use Symfony\Component\VarDumper\Cloner\Data;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Comments;
use App\Models\Order;
use App\Models\Product;
use Laravel\Ui\Presets\React;

class AdminController extends BaseController
{
    public function Index()
    {
       $customers = Customer::get();
       $count_customer = count($customers);

       $orders = Order::get();
       $count_order = count($orders);

       $products = Product::where('product_status',1)->get();
       $count_pro = count($products);

       $comments = Comments::get();
       $count_cmt = count($comments);
       return view('Admin.AdminIndex')->with(compact('count_customer','count_order','count_pro','count_cmt'));
    }

    public function Login(Request $request)
    {
       
        if($request->isMethod('post'))
        {
            $data = $request->all();
            // dd($data);die();
            if(Auth::guard('admin')
                ->attempt(['email'=>$data['admin_email'],'password'=>$data['admin_password']])){
                    $admin = Admin::where('email',$data['admin_email'])->first();
                    Session::put('admin_id',$admin['id']);
                    return redirect('admin/index');
                }else{
                    return redirect()->back();
                }

        }else if($request->isMethod('get'))
        {
            return view('Admin.AdminLogin');
        }
        

    }
    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    public function listAdmin(){
        $data = Admin::get();
        return view('Admin.list_admin')->with(compact('data'));
    }

    public function createAdmin(Request $request)
    {
        if($request->isMethod('get')){
            return view('Admin.create_admin');
        }else if($request->isMethod('post')){
            $data = $request->all();

            

            if($data['password'] == $data['confirm_password']){
                $target_dir = "uploads/admins/";
                    $target_file = $target_dir . basename($_FILES["admin_img"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    if(isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["admin_img"]["tmp_name"]);
                        if($check !== false) {
                            $uploadOk = 1;
                        } else {
                            $uploadOk = 0;
                        }
                    }
                    if ($uploadOk == 0) {
                    } else {
                        if (move_uploaded_file($_FILES["admin_img"]["tmp_name"], $target_file) ) {
                            $imageName =basename( $_FILES["admin_img"]["name"]) ;
                            
                        } else {
                            $imageName = " ";
                        
                        }
                    }

                    $admin = new Admin();
                    $admin->admin_name = $data['name'];
                    $admin->email = $data['email'];
                    $admin->phone = $data['phone'];
                    $admin->password = Hash::make($data['password']);
                    $admin->admin_img = $imageName;
                    $admin->status = $data['status'];

                    $admin->save();
                    $message = 'Thành công!';
                    Session::flash('success_message',$message);
                    return redirect('admin/list-admin');
            }else{
                $message = 'Xác nhận mật khẩu không trùng khớp!';
                Session::flash('error_message',$message);
                return redirect()->back();
            }
            

        }
    }
    public function Setting()
    {
        $admin = Admin::where('id',Session::get('admin_id'))->first();
        return view('Admin.profile_admin')->with(compact('admin'));
    }
    
    public function Edit(Request $request, $id)
    {

        if($request->isMethod('get'))
        {
            $admin = Admin::where('id',$id)->first();
            return view('Admin.edit_admin')->with(compact('admin'));

        }else if($request->isMethod('post')){
            $data = $request->all();

            $target_dir = "uploads/admins/";
            $target_file = $target_dir . basename($_FILES["admin_img"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["admin_img"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
            }
            if ($uploadOk == 0) {
            } else {
                if (move_uploaded_file($_FILES["admin_img"]["tmp_name"], $target_file) ) {
                    $imageName =basename( $_FILES["admin_img"]["name"]) ;
                    
                } else {
                    $imageName = $data['admin_img_old'];
                
                }
            }
    
            Admin::where('email',$data['email'])->update([
                'admin_name' => $data['name'],
                'admin_img' => $imageName,
                'phone' => $data['phone']
            ]);
    
            $message = 'Thành công!';
            Session::flash('success_message',$message);
            return redirect('admin/list-admin');
        }
        
    }

    public function Delete(Request $request)
    {
        $data = $request->all();
        $list_id = $data['admin_id'];
        foreach($list_id as $item){
            Admin::where('id',$item)->delete();
        }
        $message = 'Thành công!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }

    public function forgotPassword(Request $request)
    {
        if($request->isMethod('get')){
            return view('Admin.forgot_Password');
        }else if($request->isMethod('post'))
        {
            $data = $request->all();
        
        $newpass = rand(100000,999999);
        Session::flash('newpass',$newpass);

        
        $a = DB::table('admins')->where('email',$data['email'])->update([
            'password' => bcrypt($newpass)
        ]);
                
        $mail_c = $data['email'];
        $details = [
            'title' => 'Mail from HomeService',
            'body' => 'Mật khẩu mới '
        ];

        Mail::to($mail_c)->send(new SendMail($details));

        return redirect('/admin');
        }
    }
    public function changPassword(Request $request)
    {
        $data = $request->all();
        $admin = Admin::where('id',$data['admin_id'])->get();
        dd($admin);die();
        if($data['password'] == $admin->password){
            if($data['password_new'] == $data['password_confirm'] ){
                Admin::where('id',$data['admin_id'])->update([
                    'password' => $data['password_new']
                ]);
                $message = 'Thành công!';
                Session::flash('success_message',$message);
                return redirect()->back();
            }else{
                $message = 'Xác nhận mật khẩu không đúng !';
                Session::flash('error_message_conf',$message);
                return redirect()->back();
            }
        }else{
            $message = 'Sai mật khẩu !';
            Session::flash('error_message',$message);
            return redirect()->back();
        }
    }
    
}
