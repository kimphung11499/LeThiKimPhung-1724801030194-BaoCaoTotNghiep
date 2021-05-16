@extends('Customer.customerLayout')
@section('content')
<section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
	<div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
	   <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Toys Shop</h3>
	   <div class="row">
		  <div class="side-bar col-lg-3">
			 <div class="search-hotel">
				<h3 class="agileits-sear-head">Search Here..</h3>
				<form action="#" method="post">
				   <input type="search" placeholder="Product name..." name="search" required="">
				   <input type="submit" value=" ">
				</form>
			 </div>
					   <!-- price range -->
					   <div class="range">
						   <h3 class="agileits-sear-head">Price range</h3>
						   <ul class="dropdown-menu6">
							   <li>

								   <div id="slider-range"></div>
								   <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
							   </li>
						   </ul>
					   </div>
					   <!-- //price range -->
			 <!--preference -->
			 <div class="left-side">
				<h3 class="agileits-sear-head">Occasion</h3>
				<ul>
					
						<form action="{{route('prowithcate')}}" method="post" enctype="multipart/form-data">
							@foreach ($categories as $item)
								@csrf
									<li>
										<input type="checkbox" class="checked categoryChecked" name="cate[]" id="cate" value="{{$item->id}}" >
										
										<span class="span">{{$item->category_name}}</span>
									</li>
									
								@endforeach
								<input type="submit" value="Submit" id="btnSubmit">
						</form>	
					
				   
				  
				</ul>
			 </div>
			 <!-- // preference -->
			 <!-- discounts -->
			 <div class="left-side">
				<h3 class="agileits-sear-head">Discount</h3>
				<ul>
				   <li>
					  <input type="checkbox" class="checked">
					  <span class="span">5% or More</span>
				   </li>
				   <li>
					  <input type="checkbox" class="checked">
					  <span class="span">10% or More</span>
				   </li>
				   <li>
					  <input type="checkbox" class="checked">
					  <span class="span">20% or More</span>
				   </li>
				   <li>
					  <input type="checkbox" class="checked">
					  <span class="span">30% or More</span>
				   </li>
				   <li>
					  <input type="checkbox" class="checked">
					  <span class="span">50% or More</span>
				   </li>
				   <li>
					  <input type="checkbox" class="checked">
					  <span class="span">60% or More</span>
				   </li>
				</ul>
			 </div>
			 <!-- //discounts -->
			 <!-- reviews -->
			 <div class="customer-rev left-side">
				<h3 class="agileits-sear-head">Customer Review</h3>
				<ul>
				   <li>
					  <a href="#">
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <span>5.0</span>
					  </a>
				   </li>
				   <li>
					  <a href="#">
					  <i class="fas fa-star" ></i>
					  <i class="fas fa-star" ></i>
					  <i class="fas fa-star" ></i>
					  <i class="fas fa-star" ></i>
					  <i class="far fa-star"></i>
					  <span>4.0</span>
					  </a>
				   </li>
				   <li>
					  <a href="#">
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star-half"></i>
					  <i class="far fa-star"></i>
					  <span>3.5</span>
					  </a>
				   </li>
				   <li>
					  <a href="#">
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="far fa-star"></i>
					  <i class="far fa-star"></i>
					  <span>3.0</span>
					  </a>
				   </li>
				   <li>
					  <a href="#">
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star-half"></i>
					  <i class="far fa-star"></i>
					  <i class="far fa-star"></i>
					  <span>2.5</span>
					  </a>
				   </li>
				</ul>
			 </div>
			 <!-- //reviews -->
			 <!-- deals -->
			 <div class="deal-leftmk left-side">
				<h3 class="agileits-sear-head">Special Deals</h3>
				<div class="row special-sec1">
				   <div class="col-xs-4 img-deals">
					  <img src="{{asset('frontend/images/g1.jpg')}}" alt="" class="img-fluid">
				   </div>
				   <div class="col-xs-8 img-deal1">
					  <h3>toys(barbie)</h3>
					  <a href="single.html">$575.00</a>
				   </div>
				   <div class="clearfix"></div>
				</div>
				<div class="row special-sec1">
				   <div class="col-xs-4 img-deals">
					  <img src="{{asset('frontend/images/g2.jpg')}}" alt="" class="img-fluid">
				   </div>
				   <div class="col-xs-8 img-deal1">
					  <h3>toy(todos)</h3>
					  <a href="single.html">$480.00</a>
				   </div>
				   <div class="clearfix"></div>
				</div>
				<div class="row special-sec1">
				   <div class="col-xs-4 img-deals">
					  <img src="{{asset('frontend/images/g3.jpg')}}" alt="" class="img-fluid">
				   </div>
				   <div class="col-xs-8 img-deal1">
					  <h3>toys (Grey)</h3>
					  <a href="single.html">$165.00</a>
				   </div>
				   <div class="clearfix"></div>
				</div>
				<div class="row special-sec1">
				   <div class="col-xs-4 img-deals">
					  <img src="{{asset('frontend/images/g2.jpg')}}" alt="" class="img-fluid">
				   </div>
				   <div class="col-xs-8 img-deal1">
					  <h3>Soft teddy </h3>
					  <a href="single.html">$225.00</a>
				   </div>
				   <div class="clearfix"></div>
				</div>
				<div class="row special-sec1">
				   <div class="col-xs-4 img-deals">
					  <img src="{{asset('frontend/images/g4.jpg')}}" alt="" class="img-fluid">
				   </div>
				   <div class="col-xs-8 img-deal1">
					 <h3>pink bear</h3>
					  <a href="single.html">$169.00</a>
				   </div>
				   <div class="clearfix"></div>
				</div>
			 </div>
			 <!-- //deals -->
		  </div>
		  <div class="left-ads-display col-lg-9">
			 <div class="row">
                @foreach ($data as $d => $item)
                
				@foreach ($products as $p => $value)
                <?php
                    if($item == $value->category_id){
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 <img src="{{asset('uploads/products/'.$value->product_img)}}" class="img-thumbnail img-fluid" alt="">
                                 <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                 </div>
                                 <span class="product-new-top">New</span>
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          <h4>
                                             <a href="single.html">{{$value->product_name}}</a>
                                          </h4>
                                          <div class="grid-price mt-2">
                                             <span class="money ">{{$value->product_price}}</span>
                                          </div>
                                       </div>
                                       <ul class="stars">
                                          <li>
                                             <a href="#">
                                             <i class="fas fa-star"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fas fa-star"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fas fa-star"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fas fa-star" ></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="far fa-star-half-o"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="toys single-item hvr-outline-out">
                                       <form action="#" method="post">
                                          <input type="hidden" name="cmd" value="_cart">
                                          <input type="hidden" name="add" value="1">
                                          <input type="hidden" name="toys_item" value="toys(barbie)">
                                          <input type="hidden" name="amount" value="575.00">
                                          <button type="submit" class="toys-cart ptoys-cart">
                                          <i class="fas fa-cart-plus"></i>
                                          </button>
                                       </form>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                <?php }?>
				
				@endforeach
				    
                @endforeach
				
			 </div>
		  </div>
	   </div>
	</div>
 </section>
@endsection