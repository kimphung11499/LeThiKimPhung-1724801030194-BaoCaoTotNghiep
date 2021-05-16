<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Basket</title>
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/cart-show.css')}}">
  <link href="{{asset('/frontend/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
  <meta name="csrf-token" content="{{ csrf_token() }}">

   <link href="{{asset('/frontend/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
   <link href="{{asset('/frontend/css/emptycart.css')}}" rel='stylesheet' type='text/css' media="all">
   <!--stylesheets-->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

<div class="header-bar">
    <div class="info-top-grid">
       <div class="info-contact-agile">
          <ul>
             <li>
                <span class="fas fa-phone-volume"></span>
                <p>+(84)582023920</p>
             </li>
             <li>
                <span class="fas fa-envelope"></span>
                <p><a href="mailto:info@example.com">kimphung11499@gmail.com</a></p>
             </li>
             <li>
             </li>
          </ul>
       </div>
    </div>
    <div class="container-fluid">
       <div class="hedder-up row">
          <div class="col-lg-3 col-md-3 logo-head">
             <h1><a class="navbar-brand" href="index.html">Shoppin-Store</a></h1>
          </div>
          <div class="col-lg-5 col-md-6 search-right">
             <form class="form-inline my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm">
                <button class="btn" type="submit">Tìm kiếm</button>
             </form>
          </div>
          <div class="col-lg-4 col-md-3 right-side-cart">
             <div class="cart-icons" style="margin-top: -9px">
                <ul>
                  
                        @if (Session::has('name_customer'))
                        <li>
                           <a href="{{route('myinfo')}}" type="button" onclick="showProfile()" > <span class="far fa-user"></span></a>
                        </li>
                        <li id="li-name"> 
                           
                           <h6 style="color: #ea1d5d"> {{ Session::get('name_customer')}} </h6>
                        </li>
                        <li id="li-logout">
                           <a href="{{URL::to('/store/logout')}}" type="button" style="color: #ea1d5d"><span class="fas fa-sign-out-alt"></span></a>
                        </li>
                     @else
                        <li>
                           <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                        </li>
                     @endif
                     

                   <li class="toyscart toyscart2 cart cart box_1">   
                        {{-- <a href="{{URL::to('store/cart/show')}}" class="top_toys_cart"><span class="fas fa-cart-arrow-down"></a> --}}
                        <a class="top_toys_cart" onclick="showCartSmall()"><span class="fas fa-cart-arrow-down"></a>
                           
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" >
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style="color:#ff3b9f">
          <ul class="navbar-nav ">
             <li class="nav-item active">
                <a class="nav-link" href="{{route('store')}}">Trang chủ <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                <a href="{{route('shop')}}" class="nav-link">Sản phẩm</a>
             </li>
             <li class="nav-item">
                <a href="service.html" class="nav-link">Service</a>
             </li>
             <li class="nav-item">
                <a href="shop.html" class="nav-link">Shop Now</a>
             </li>
             <li class="nav-item">
                <a href="contact.html" class="nav-link">Liên hệ</a>
             </li>
          </ul>
       </div>
    </nav>
 </div>

    {{-- @include('Customer.customer_header') --}}
    <div class="inner_page-banner one-img">
      </div>
      {{-- @php
          echo "<pre>";
            var_dump($userCartItems);
          echo "</pre>";
      @endphp --}}
         @if(empty($userCartItems))
         <div class="container-fluid mt-30">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-body cart">
                            <div class="col-sm-12 empty-cart-cls text-center"> 
                                 <img src="{{asset('uploads/dCdflKN.png')}}" id="logoEmptyCart" width="50px" height="50px" class="img-fluid mb-4 mr-3">
                                <h3><strong>Giỏ hàng trống</strong></h3>
                                <h4>Thêm một cái gì đó để làm tôi hạn phúc :)</h4>
                                <a href="{{URL::to('/store/shop')}}" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         @else
         <section >
            <main>
               <div class="basket">
                  
                  <div class="basket-labels">
                     <ul>
                     <li class="item item-heading">Hình sản phẩm</li>
                     <li class="price">Giá</li>
                     <li class="quantity">Số lượng</li>
                     <li class="subtotal">Thành tiền</li>
                     </ul>
                  </div>
                  @foreach ($userCartItems as $item)
                  <div class="basket-product">
                     <div class="item">
                     <div class="product-image">
                        <img src="{{asset('uploads/products/'.$item->product_img)}}" alt="Placholder Image 2" class="product-frame">
                     </div>
                     <div class="product-details">
                        <h1 class="h1-cart-new"><strong><span class="item-quantity">{{$item->quantity}}</span> x </strong>{{$item->product_name}}</h1>
            
                        {{-- <p>Product Code - 232321939</p> --}}
                     </div>
                     </div>
                     <div class="price">{{number_format($item->product_price)}}</div>
                     <div class="quantity">
                     <input type="number" value="{{$item->quantity}}" min="1" class="quantity-field" data-cartid="{{$item->id}}">
                     </div>
                     <div class="subtotal">{{number_format($item->product_price * $item->quantity)}}</div>
                     <div class="remove">
                     <button type="button" class="btnItemDelete" data-cartid="{{$item->id}}">Xóa</button>
                     </div>
                  </div>  
                  @endforeach

               </div>
               <aside>
                  
                  <div class="summary">
                     <div class="summary-total-items"><span class="total-items"></span> Sản phẩm trong giỏ hàng</div>
                     <div class="summary-subtotal">
                        <div class="subtotal-title">Subtotal</div>
                        <div class="subtotal-value final-value" id="basket-subtotal"> {{number_format($total)}}</div>
                        
                        <div class="summary-promo hide">
                           <div class="promo-title">Promotion</div>
                           <div class="promo-value final-value" id="basket-promo"></div>
                        </div>
                     </div>
                     {{-- <div class="summary-delivery">
                        <select name="delivery-collection" class="summary-delivery-selection">
                              <option value="0" selected="selected">Select Collection or Delivery</option>
                              <option value="collection">Collection</option>
                              <option value="first-class">Royal Mail 1st Class</option>
                              <option value="second-class">Royal Mail 2nd Class</option>
                              <option value="signed-for">Royal Mail Special Delivery</option>
                        </select>
                     </div> --}}
                     <div class="summary-total">
                        <div class="total-title">Total</div>
                        <div class="total-value final-value" id="basket-total">{{number_format($total)}}</div>
                     </div>
                     <div class="summary-checkout">
                        <a class="checkout-cta btn btn-secondary" href="{{route('checkout')}}">Thanh Toán</a>
                     </div>
                  </div>
                  
                  
               </aside>
               </main>
         </section>
         @endif
        
   @include('Customer.customer_contact')
   @include('Customer.customer_Footer')
   {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
   
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
   <script src="{{asset('frontend/js/cart-new.js')}}"></script>
   <script src="{{asset('backend/admin_script.js')}}"></script>


</body>

</html>

<style>
  #li-name {
    padding-top: 5%;
    position: absolute;
}
   #li-logout {
      margin-left: 24%;
   }
   .nav-link{
      color: #ea1d5d !important;
   }
  
</style> 
