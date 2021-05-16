<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <!DOCTYPE html>
   <html lang="zxx">
      <head>
         <title>Toys Shop an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
         <!--meta tags -->
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="csrf-token" content="{{ csrf_token() }}">
         <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
            <meta name="csrf-token" content="{{ csrf_token() }}">
         <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
            
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
         </script>


<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/cart-show.css')}}">


         <!--//meta tags ends here-->
         <!--booststrap-->
         <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
         <!--//booststrap end-->
         <!-- font-awesome icons -->
         <link href="{{asset('frontend/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css" media="all">
         <!-- //font-awesome icons -->
         <!--Shoping cart-->
         <link rel="stylesheet" href="{{asset('frontend/css/shop.css')}}" type="text/css" />
         <!--//Shoping cart-->
         <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery-ui1.css')}}">
         <link href="{{asset('frontend/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
         <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}" type="text/css" media="screen" />

         <link href="{{asset('/frontend/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
         <!--stylesheets-->
         <link href="{{asset('/frontend/css/JiSlider.css')}}" rel="stylesheet">
         
         <link href="{{asset('/frontend/css/button.css')}}" rel="stylesheet">

         <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/checkout.css')}}">

         <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/cart-small.css')}}">
         
         
         <!--//stylesheets-->
         <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
         <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

         <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/order-tracking.css')}}">
      
      </head>
      <body id="bodyyyyy">
         <!--headder-->
        
         @include('Customer.customer_header')
         
         <!--//headder-->
         <!-- banner -->
         <div class="inner_page-banner one-img">
         </div>
         
        @yield('content')

         <!--subscribe-address-->
         @include('Customer.customer_contact')
         
         <!-- footer -->
         @include('Customer.customer_Footer')
         <!-- //footer -->
         
         <!-- Modal 1-->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                   <div class="register-form">
                     <form action="{{route('customer.login')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="fields-grid">
                          
                          <div class="styled-input">
                            <input type="email" placeholder="Email" name="customer_email" required="">
                          </div>
                          <div class="styled-input">
                            <input type="password" placeholder="Mật khẩu" name="customer_password" required="">
                          </div>
                          <button type="submit" class="btn subscrib-btnn">Đăng nhập</button>
                          <button type="button" class="btn subscrib-btnn" data-toggle="modal" data-dismiss="modal" data-target="#RegisterModal"> Đăng ký</button>
                        </div>
                     </form>
                   </div>
                 </div>
                 <div class="modal-footer">
                  <a href="" data-dismiss="modal" data-toggle="modal"  data-target="#ForgotModal" style="color:#000">Quên mật khẩu</a>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                 </div>
               </div>
            </div>
         </div>

		
		 <!-- Modal 2-->
		 <div class="modal fade" id="RegisterModal" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				
						<div class="modal-content fi">
							<div class="modal-header">
							   <h5 class="modal-title" id="exampleModalLabel">Đăng ký</h5>
							   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							   <span aria-hidden="true">&times;</span>
							   </button>
							</div>
							<div class="modal-body">
							   <div class="register-form">
								  <form action="{{route('customer.register')}}" method="post" enctype="multipart/form-data">
									@csrf
									 <div class="fields-grid">
										 <div class="row">
											 <div class="col-md-6">
												<div class="styled-input">
													<input type="text" placeholder="Tên" name="customer_name" required="">
													<input type="email" placeholder="Email" name="customer_email" required="">
													<input type="password" placeholder="Mật khẩu" name="customer_password" required="">
													<input type="password" placeholder="Nhập lại mật khẩu" name="customer_password_confirm" required="">
													
												 </div>
											 </div>
											 <div class="col-md-6">
                                    <div class="row" id="check_birth" style="margin-left: 3%;">
                                       <div class="col-md-4">
                                          <input class="form-check-input" type="radio" name="customer_gender" id="exampleRadios1" value="0" checked>
                                          <label class="" style="color: #5a5656" for="exampleRadios1">Nữ</label>
                                       </div>
                                       <div class="col-md-4">
                                          <input class="form-check-input" type="radio" name="customer_gender" id="exampleRadios1" value="0" checked>
                                          <label class="" style="color: #5a5656" for="exampleRadios1">Nam</label>
                                       </div>
                                    </div>
												<div class="styled-input">
													   <input type="text" placeholder="Số điện thoại" name="customer_phone" required="">
                                          
                                          
                                          <input type="text" placeholder="dd/mm/yy" name="customer_brithday" required >
                                          <input type="text" placeholder="Địa chỉ" name="customer_address" required="">
												 </div>
												
											</div>
										 </div>
										
										<button type="submit" class="btn subscrib-btnn ">Đăng ký</button>
									 </div>
										@if (Session::has('register_message'))
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											{{ Session::get('register_message')}}
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>  
										@endif
								  </form>
							   </div>
							</div>
							<div class="modal-footer">
							   <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
							</div>
						 </div>
		
			</div>
		 </div>

       {{-- moldai 3  --}}
       <div class="modal fade" id="ForgotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			   <div class="modal-content">
				  <div class="modal-header">
					 <h5 class="modal-title" id="exampleModalLabel">Xác nhận Email</h5>
					 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button>
				  </div>
				  <div class="modal-body">
					 <div class="register-form">
						<form action="{{route('customer.forgot')}}" method="post" enctype="multipart/form-data">
							@csrf
						   <div class="fields-grid">
							  
							  <div class="styled-input">
								 <input type="email" placeholder="Email" name="customer_email" required="">
							  </div>
							  
							  <button type="submit" class="btn subscrib-btnn">Gởi mật khẩu mới</button>
							  
						   </div>
						</form>
					 </div>
				  </div>
				  <div class="modal-footer">
					
					 <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
				  </div>
			   </div>
			</div>
		 </div>
  
       {{-- cart small  --}}
       <div id="cart-small" class="col-md-3 cart-small cart-off" style="overflow-y: auto;">
         <div>
           <a onclick="cartSmallOff()" class="float-right "><i class="fas fa-times mt-2" style="font-size: 20px"></i></a>
      
           <hr>
            <section >
               <main>
                  <div class="row">
                     <div class="basket col-sm-12">
                        <div class="basket-product">
                           
                              @foreach ($itemInCart as $item)
                                  
                             
                                 <div class="row">
                                     <div class="item">
                                     <div class="product-image product-image-small">
                                         <img src="{{asset('uploads/products/'.$item->product_img)}}" width="30px" alt="Placholder Image 2" class="product-frame">
                                     </div>
                                     <div class="row">
                                         <div class="product-details">
                                             <h1 class="h1-cart-new"><strong><span class="item-quantity">{{$item->quantity}}</span> x </strong>{{$item->product_name}}</h1>
                                 
                                             <p class="cart-small-product-name">Code : {{$item->product_code}}</p>
                                         </div>
                                     </div>
      
                                     <div class="row">
                                         <div class="price price-cart-small">{{$item->product_price}}</div>
                                         <div class="quantity quantity-cart-small">
                                             <input type="number"  value="{{$item->quantity}}" min="1" class="quantity-field" data-cartid="{{$item->id}}">
                                         </div>
                                         <div class="subtotal subtotal-cart-small">{{$item->product_price * $item->quantity}}</div> <br>
                                         
                                     </div>
                                       <div class="remove remove-cart-small">
                                          <button type="button" class="btnItemDelete" data-cartid="{{$item->id}}">Xóa</button>
                                       </div>
                                     </div>
                                 </div>
                                 <br> <br>
                                 @endforeach
                           
                        </div>  
                     </div>
                  </div>
                  
                  <div class="row">
                     <aside class="col-sm-12">
                     
                        <div class="summary">
                           <div class="summary-total-items"><span class="total-items"></span> Sản phẩm trong giỏ hàng</div>
                          
                           
                           <div class="summary-total">
                           <div class="total-title">Tổng</div>
                           <div class="total-value final-value" id="basket-total">{{$total}}</div>
                           </div>
                           <div class="summary-checkout">
                              <a href="{{URL::to('/store/cart/show')}}" class="btn btn-dark checkout-cta">
                                 <span style="color: white">Thanh toán</span>
                              </a>
                           </div>
                        </div>
                        
                        
                     </aside>
                  </div>
                  
                  </main>
            </section>
         </div>
      </div>


      <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
      <script src="{{asset('frontend/js/cart-new.js')}}"></script>
      <script src="{{asset('backend/admin_script.js')}}"></script>
      {{-- end cart small  --}}

   


      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>


         @if (Session::has('success_message'))
            <script>
               swal("Success","{!! Session::get('success_message') !!}","success",{
                  button:"OK",
               })
            </script>             
         @endif

         @if (Session::has('remove_cart_item'))
            <script>
               toastr.success("{!! Session::get('remove_cart_item') !!}");
            </script>
             
         @endif



         <!-- //Modal 1-->
         <!--jQuery-->
         <script src="{{asset('frontend/js/jquery-2.2.3.min.js')}}"></script>
         <!-- newsletter modal -->
         <!-- cart-js -->
         <script src="{{asset('frontend/js/minicart.js')}}"></script>
         <script>
            toys.render();
            
            toys.cart.on('toys_checkout', function (evt) {
                var items, len, i;
            
                if (this.subtotal() > 0) {
                    items = this.items();
            
                    for (i = 0, len = items.length; i < len; i++) {}
                }
            });
         </script>
         <!-- //cart-js -->
         <!-- price range (top products) -->
         <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
         <script>
            //<![CDATA[ 
            $(window).load(function () {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 9000,
                    values: [50, 6000],
                    slide: function (event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
            
            }); //]]>
         </script>
         <!-- //price range (top products) -->
         <!-- single -->
         <script src="{{asset('frontend/js/imagezoom.js')}}"></script>
         <!-- single -->
         <!-- script for responsive tabs -->
         <script src="{{asset('frontend/js/easy-responsive-tabs.js')}}"></script>
         <script>
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    closed: 'accordion', // Start closed if in accordion view
                    activate: function (event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
                $('#verticalTab').easyResponsiveTabs({
                    type: 'vertical',
                    width: 'auto',
                    fit: true
                });
            });
         </script>
         <!-- FlexSlider -->
         <script src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
         <script>
            // Can also be used with $(document).ready()
            $(window).load(function () {
                $('.flexslider1').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
         </script>
         <!-- //FlexSlider-->
         <!-- start-smoth-scrolling -->
         <script src="{{asset('frontend/js/move-top.js')}}"></script>
         <script src="{{asset('frontend/js/easing.js')}}"></script>
         <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 900);
                });
            });
         </script>
         <!-- start-smoth-scrolling -->
         <!-- here stars scrolling icon -->
         <script>
            $(document).ready(function () {
            
                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };
            
            
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
            
            });
         </script>
         <!-- //here ends scrolling icon -->
         <!-- //smooth-scrolling-of-move-up -->
         <!--bootstrap working-->
         <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
         <!-- //bootstrap working--> 

         <script>
            $(document).on('click','.btnItemUpdate',function(){
               if($(this).hasClass('qtyMinus')){
                  var quantity = $(this).prev().val();
                  alert(quantity);
                  return false;
               }
            });
         </script>

         <!-- cart-js -->	
      <script src="{{asset('frontend/js/minicart.js')}}"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      

         <script>
            function showCartSmall() {
               var element = document.getElementById("cart-small");
               element.classList.remove("cart-off");
               element.classList.add("cart-on");
               var body = document.getElementById('bodyyyyy');
               body.classList.add('body-shadow');
            }
         </script>

         <script>
            function cartSmallOff() {
               var element = document.getElementById("cart-small");
               element.classList.remove("cart-on");
               element.classList.add("cart-off");
               var body = document.getElementById('bodyyyyy');
               body.classList.remove('body-shadow');
               
            }
         </script>

      </body>




      {{-- cart small  --}}
      
   </html>
   
   