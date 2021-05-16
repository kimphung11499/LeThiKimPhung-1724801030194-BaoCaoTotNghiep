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
		 <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
			Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		 <script>
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);
			
			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		 </script>
		
		 <link href="{{asset('/frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
	
		 <link href="{{asset('/frontend/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css" media="all">
		
		 <link rel="stylesheet" href="{{asset('/frontend/css/flexslider.css')}}" type="text/css" media="all" />

		 <link href="{{asset('/frontend/css/JiSlider.css')}}" rel="stylesheet">
		 
		 

		 <link rel="stylesheet" href="{{asset('/frontend/css/shop.css')}}" type="text/css" />

		 <link href="{{asset('/frontend/css/style.css')}}" rel='stylesheet' type='text/css' media="all">

		 <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
		 <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

		 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	  </head>
	  <body>
		 <div class="header-outs" id="home">

			@include('Customer.customer_header')

			<!-- Slideshow 4 -->
			<div class="slider text-center">
			   <div class="callbacks_container">
				  <ul class="rslides" id="slider4">
					 <li>
						<div class="slider-img one-img">
						   <div class="container">
							  {{-- <div class="slider-info ">
								 <h5>Pick The Best Toy For <br>Your Kid</h5>
								 <div class="bottom-info">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
								 </div>
								 <div class="outs_more-buttn">
									<a href="about.html">Read More</a>
								 </div>
							  </div> --}}
						   </div>
						</div>
					 </li>
					 <li>
						<div class="slider-img two-img">
						   <div class="container">
							  {{-- <div class="slider-info ">
								 <h5>Sort Toys And Teddy bears<br>For Kids</h5>
								 <div class="bottom-info">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
								 </div>
								 <div class="outs_more-buttn">
									<a href="about.html">Read More</a>
								 </div>
							  </div> --}}
						   </div>
						</div>
					 </li>
					 <li>
						<div class="slider-img three-img">
						   <div class="container">
							  {{-- <div class="slider-info">
								 <h5>Best Toys And Dolls<br> For Kids</h5>
								 <div class="bottom-info">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
								 </div>
								 <div class="outs_more-buttn">
									<a href="about.html">Read More</a>
								 </div>
							  </div> --}}
						   </div>
						</div>
					 </li>
				  </ul>
			   </div>
			   <!-- This is here just to demonstrate the callbacks -->
			   <!-- <ul class="events">
				  <li>Example 4 callback events</li>
				  </ul>-->
			   <div class="clearfix"></div>
			</div>
		 </div>
		 

		 @yield('content')


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
					 <h5 class="modal-title" id="exampleModalLabel">Xác nhận email</h5>
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

	


		 <script src='{{asset('frontend/js/jquery-2.2.3.min.js')}}'></script>
	
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
		
		 <script src="{{asset('frontend/js/responsiveslides.min.js')}}"></script>
		 <script>
			
			$(function () {
				
				$("#slider4").responsiveSlides({
					auto: true,
					pager:false,
					nav:true ,
					speed: 900,
					namespace: "callbacks",
					before: function () {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});
			
			});
		 </script>
		
		 <script src="{{asset('frontend/js/jquery.flexisel.js')}}"></script>
		 <script>
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 3,
					animationSpeed: 3000,
					autoPlay:true,
					autoPlaySpeed: 2000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 2
						}
					}
				});
				
			});
		 </script>
		
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
		
		 <script>
			$(document).ready(function () {
			
				var defaults = {
					containerID: 'toTop', 
					containerHoverID: 'toTopHover', 
					scrollSpeed: 1200,
					easingType: 'linear'
				};
				$().UItoTop({
					easingType: 'easeOutQuart'
				});
			
			});
		 </script>
		
		 <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

		 <script>
			//  $('.categoryChecked').click(function(){
			// 	var checkbox = document.getElementsByName('cate');
			// 	var result = "";
			// 	for (var i = 0; i < checkbox.length; i++){
            //         if (checkbox[i].checked === true){
            //             result += ' [' + checkbox[i].value + ']';
            //         }
            //     }
			// 	console.log('cate la' + result);
				
			//  })
			$(document).ready(function(){
				sum = 100;
				console.log('sum truc khi click' + sum);
				if(sum == 100){
					var element = document.getElementById("btnSubmit");
  					element.classList.add("hiddenSubmit");
  					element.classList.remove("showSubmit");
				}
				a= 0;
				$('input[type="checkbox"]').click(function(){
					
					if($(this).prop("checked") == true){
						a++;
						console.log($(":checkbox:checked").length);
						console.log('a ne' +a);
						
					}
					if($(this).prop("checked") == false){
						
						console.log(($(":checkbox:checked").length)--);
						a--;
						console.log('a ne' +a);
						
					}

					if(a <= 0){
						console.log('a check' +a);
						var element = document.getElementById("btnSubmit");
  						element.classList.add("hiddenSubmit");
  						element.classList.remove("showSubmit");
					}
					if( a > 0 ){
						var element = document.getElementById("btnSubmit");
  						element.classList.add("showSubmit");
  						element.classList.remove("hiddenSubmit");
					}
					
					
        		});
				
    		});
		 </script>

		 <script>
			 function checkboxes(){
			var inputElems = document.getElementsByTagName("input"),
			count = 0;
			for (var i=0; i<inputElems.length; i++) {
			if (inputElems[i].type === "checkbox" && inputElems[i].checked === true){
			count++;
			alert(count);
    		}
			}}
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
   </html>