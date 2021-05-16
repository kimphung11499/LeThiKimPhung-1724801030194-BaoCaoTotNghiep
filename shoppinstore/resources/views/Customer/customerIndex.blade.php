@extends('Customer.customerLayout')
@section('content')
<!-- //banner -->
		 <!-- about -->
		 <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">

			<div class="left-ads-display col-lg-10 offset-1">
				<div class="row">
   
				   @foreach ($dataa as $item)
				   <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
					   <div class="product-toys-info">
						  <div class="men-pro-item">
							 <div class="men-thumb-item">
								<img src="{{asset('uploads/products/'.$item->product_img)}}" class="img-thumbnail" alt="">
								<div class="men-cart-pro">
								   <div class="inner-men-cart-pro">
									  <a href="{{URL::to('/store/product-detail/'.$item->product_id)}}" class="link-product-add-cart">Chi Tiết Sản Phẩm</a>
								   </div>
								</div>
								<span class="product-new-top">Mới</span>
							 </div>
							 <div class="item-info-product">
								<div class="info-product-price">
								   {{-- <div class="grid_meta"> --}}
									  <div class="product_price">
										 <h4>
											<a href="single.html">{{$item->product_name}}</a>
		   
										 </h4>
										 <div class="grid-price mt-2">
											<span class="money ">{{number_format($item->product_price)}} VND<br></span>
										 </div>
										</div>
								</div>
								<div class="clearfix"></div>
							 </div>
						  </div>
					   </div>
					</div>
				   @endforeach
				   
				  
				</div>
			 </div>

		 </section>
		
		 <!--Customers Review -->
		 <section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="clients">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
			   <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="color: #ea1d5d">ĐÁNH GIÁ SẢN PHẨM</h3>
			   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
					 <div class="carousel-item active">
						<div class="row">
							@foreach ($comments as $item)
									
								<div class="col-lg-6 clients-w3layouts-row">
									<div class="least-w3layouts-text-gap">
									<div class="row">
										<div class="col-md-4 col-sm-4 news-img">
											<img src="{{asset('frontend/images/t1.jpg')}}" width="100px"  alt="" class="image-fluid">
										</div>
										<div class="col-md-8 col-sm-8 clients-says-w3layouts">
											<h4>{{$item->customer_name}}
											</h4>
											
										</div>
										<div class="mt-3 news-agile-text">
											<div class="col-sm-10 offset-1">
												<img src="{{asset('/uploads/products/'.$item->product_img)}}" width="100%" alt="" class="image-fluid">
											</div>
											
											<p class="mt-3"><span class="fas fa-quote-left"></span> {{$item->cmt}} <span class="fas fa-quote-right"></span>
											</p>
										</div>
									</div>
									</div>
								</div>
							@endforeach
						
						</div>
					 </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				  </a>
			   </div>
			</div>
		 </section>
		 <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
			<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
			   <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="color: #ea1d5d">Giới Thiệu Shop Thế Giới Mỹ Phẩm Bình Dương</h3>
			   <div class="about-products-w3layouts">
				  <p>
					Thế Giới Mỹ Phẩm Bình Dương là chuỗi cửa hàng bán lẻ mỹ phẩm Uy Tín Hàng Đầu tại Bình Dương, chuyên kinh doanh các sản phẩm mỹ phẩm nhập khẩu chính hãng theo xu hướng mới nhất trên thế giới với Tiêu Chí Hàng Đầu là chất lượng đảm bảo cùng giá cả cạnh tranh nhất.
				  </p>
				  <p class="my-lg-4 my-md-3 my-3">
					Sau gần 6 năm hoạt động, Thế Giới Mỹ Phẩm Bình Dương đã tạo được chỗ đứng trên thị trường mỹ phẩm Bình Dương nói riêng và cả nước nói chung với một lượng khách hàng thân thiết rất lớn.
				  </p>
				  
			   </div>
			</div>
		 </section>
@endsection

<style>
	.cart-icons{
		margin: 0px 5px !important;
	}
	#li-name {
    padding-top: 3% !important;
    position: absolute;
	}
</style>