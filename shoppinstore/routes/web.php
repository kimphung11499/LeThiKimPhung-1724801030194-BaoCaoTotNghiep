<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
// use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleCodeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->namespace('Admin')->group(function(){
    Route::match(['get','post'],'/',[AdminController::class,'Login'])->name('admin.login');
    Route::match(['get','post'],'/forgot-password',[AdminController::class,'forgotPassword'])->name('admin.forgot');

    Route::group(['middleware'=>['admin']], function(){

        Route::get('/index',[AdminController::class,'Index']);
        Route::get('/list-admin',[AdminController::class,'listAdmin'])->name('list.admin');
        Route::get('/logout',[AdminController::class,'Logout'])->name('admin.logout');

        Route::match(['get','post'],'/setting',[AdminController::class,'Setting'])->name('admin.setting');

        Route::match(['get','post'],'/edit/{id}',[AdminController::class,'Edit'])->name('admin.edit');

        Route::post('delete',[AdminController::class,'Delete'])->name('admin.delete');

        Route::post('/changepassword',[AdminController::class,'changPassword'])->name('admin.changePassword');

        Route::match(['get','post'],'/create',[AdminController::class,'createAdmin'])->name('admin.create');
    });

    Route::prefix('/brand')->namespace('Brand')->group(function(){
        Route::match(['get','post'],'/add',[BrandController::class,'Add'])->name('brand.add');
        Route::match(['get','post'],'/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
        Route::get('/delete/{id}',[BrandController::class,'delete']);
        Route::post('/delete-many',[BrandController::class,'deleteMany'])->name('brand.deletemany');
    });

    Route::prefix('/comment')->namespace('Comment')->group(function(){
        Route::match(['get','post'],'/browse',[CommentController::class,'browseComment'])->name('browse.comment');
        Route::get('/update/{id}',[CommentController::class,'updateStatus'])->name('update.comment');
    });
     
    Route::prefix('/category')->namespace('Category')->group(function(){
        Route::get('list-categories',[CategoryController::class,'Categories']);
        Route::get('/update-category-status/{id}',[CategoryController::class,'updateCategoryStatus']);
        Route::match(['get', 'post'], 'add',[CategoryController::class,'addCategory'])->name('category.add');
        Route::match(['get', 'post'], 'edit/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
        Route::get('delete-category/{id}',[CategoryController::class,'deleteCategory']);

        Route::post('delete-cate-many',[CategoryController::class,'deleteMany'])->name('category.deletemany');
    });

    Route::prefix('/product')->namespace('Product')->group(function(){
        Route::get('/show',[ProductController::class,'show'])->name('product.show');
        Route::get('/statistical',[ProductController::class,'Statistical'])->name('product.statistical');
        Route::match(['get','post'],'/add', [ProductController::class,'add'])->name('product.add');
        Route::match(['get','post'],'/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
        Route::get('/delete/{product_id}',[ProductController::class,'delete']);

        Route::post('/delete-many',[ProductController::class,'manyDelete'])->name('product.delete_many');

        Route::get('/export-excel',[ProductController::class,'exportInToExcel'])->name('excel');
    });

    Route::prefix('/order')->namespace('Order')->group(function(){
        Route::get('/list-order',[OrderController::class,'listOrder'])->name('order.list');
        Route::post('/order-delete',[OrderController::class,'orderDelete'])->name('order.delete');
    });
    Route::prefix('/invoice')->namespace('Invoice')->group(function(){
        Route::get('/create/{id}',[OrderController::class,'createInvoice'])->name('create.invoice');
        Route::post('/save',[InvoiceController::class,'saveInvoice'])->name('save.invoice');

        Route::post('/delete',[InvoiceController::class,'Delete'])->name('invoice.delete');
        Route::get('/list-invoice',[InvoiceController::class,'listInvoice'])->name('list.invoice');

        Route::get('/detail/{id}',[InvoiceController::class,'Detail']);
    });
});


Route::prefix('/store')->namespace('Store')->group(function(){
    Route::get('/',[IndexController::class,'Index'])->name('store');
    Route::get('/shop',[IndexController::class,'Shop'])->name('shop');
    Route::post('/shop',[IndexController::class,'Shop'])->name('prowithcate');
    Route::get('product-detail/{id}',[IndexController::class,'productDetail']);
    Route::get('product-by-category/{id}',[IndexController::class,'productByCategory']);
    Route::get('product-discount/{discount}',[IndexController::class,'productByDiscount']);


    Route::post('/register', [CustomerController::class,'Register'])->name('customer.register');
    Route::post('/login', [CustomerController::class,'Login'])->name('customer.login');

    Route::get('/logout', function () {
        Session::forget('name_customer');
        Session::forget('id_customer');
        return redirect('/store/shop');
    }); 

    Route::prefix('/cart')->namespace('Cart')->group(function(){
        Route::post('/add-to-cart',[CartController::class,'addToCart'])->name('cart.addToCart'); 
        Route::get('/show',[CartController::class,'showCart']);   
        Route::post('/update-cart-item-qty',[CartController::class,'updateCartItemQty'])->name('update-cart-item-qty');
        Route::get('/delete/{id}',[CartController::class,'deleteItemInCart']);
        Route::get('/check-code',[SaleCodeController::class,'checkCode'])->name('check_code');
        
    });
    Route::prefix('/checkout')->namespace('Checkout')->group(function(){
        Route::match(['get', 'post'],'/',[CartController::class,'Checkout'])->name('checkout');
        Route::get('/order-received',[OrderController::class,'orderReceived'])->name('order.received');
    });
    
});

Route::prefix('/customer')->namespace('')->group(function(){
    // Route::match(['get', 'post'],'/',[CartController::class,'Checkout'])->name('checkout');
    Route::get('/my-account',[CustomerController::class,'Myaccount'])->name('myaccount');
    Route::get('/my-info',[CustomerController::class,'MyInfo'])->name('myinfo');
    Route::get('/track-order',[CustomerController::class,'trackOrder'])->name('trackorder');
    Route::post('/change-info',[CustomerController::class,'ChangePassword'])->name('change_info');
    
    Route::get('/confirm-order/{id}',[CustomerController::class,'confirmOrder']);
    Route::post('/forgotpass',[CustomerController::class,'forgotPassword'])->name('customer.forgot');

    Route::post('/comment',[CommentController::class,'addComment'])->name('customer.cmt');


});

Route::post('update-cart-item-quantity',[CartController::class,'UpdateCartItemQuantity']);
Route::post('/delete-cart-item',[CartController::class,'deleteCartItem']);

Route::get('test',[TestController::class,'Test']);

Route::get('/chart',[AdminController::class,'Index']);




