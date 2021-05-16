@extends('Customer.customer_layout_2')
@section('content')
<section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
       <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Shoppin-Store</h3>
       <div class="row">
          <div class="side-bar col-lg-3">
             <div class="search-hotel">
                <h3 class="agileits-sear-head" style="color: #ea1d5d">Tìm Kiếm..</h3>
                <form action="#" method="post">
                   <input type="search" placeholder="Tên sản phẩm..." name="search" required="">
                   <input type="submit" value=" ">
                </form>
             </div>
                       <!-- price range -->
                       <!-- //price range -->
             <!--preference -->
             <br><br>
             <div class="left-side">
               <h3 class="agileits-sear-head" style="color: #ea1d5d">Danh Mục</h3>
               <ul>
                     <li>
                        <a class="ml-1" style="color: #000" href="{{route('shop')}}">Tất Cả Sản Phẩm</a>
                     </li>
                  @foreach ($categories as $item)
                     <li>
                        <a class="ml-1" style="color: #000" href="{{URL::to('/store/product-by-category/'.$item->id)}}">{{$item->category_name}}</a>
                     </li>
                  @endforeach
                  
                  
               </ul>
            </div>
             <!-- // preference -->
             <!-- discounts -->
             <div class="left-side">
                <h3 class="agileits-sear-head" style="color: #ea1d5d">Giảm Gía</h3>
                <ul>
                   <li>
                      <a href="{{URL::to('store/product-discount/10')}}"><span class="span"> Giảm 10% </span></a>
                   </li>
                   
                   <li>
                     <a href="{{URL::to('store/product-discount/20')}}"><span class="span">Giảm 20% </span></a>
                   </li>
                   <li>
                     <a href="{{URL::to('store/product-discount/30')}}"><span class="span">Giảm 30% </span></a>
                   </li>
                   <li>
                     <a href="{{URL::to('store/product-discount/50')}}"><span class="span">Giảm 50% </span></a>  
                   </li>
                   
                </ul>
             </div>
           
             <!-- //deals -->
          </div>
          <div class="left-ads-display col-lg-9">
             <div class="row">

                @foreach ($data as $item)
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
                                <div class="grid_meta">
                                   <div class="product_price">
                                      <h4>
                                         <a href="single.html">{{$item->product_name}}</a>
        
                                      </h4>
                                      <div class="grid-price mt-2">
                                         <span class="money ">{{number_format($item->product_price)}} VND<br></span>
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
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                         </a>
                                      </li>
                                      <li>
                                         <a href="#">
                                         <i class="fa fa-star" aria-hidden="true"></i>
                                         </a>
                                      </li>
                                      <li>
                                         <a href="#">
                                         <i class="fas fa-star" ></i>
                                         </a>
                                      </li>
                                      <li>
                                         <a href="#">
                                         <i class="far fa-star-half-o" ></i>
                                         </a>
                                      </li>
                                   </ul>
                                </div>
                                <div class="toys single-item hvr-outline-out">
                                   <form action="#" method="post">
                                      <input type="hidden" name="cmd" value="_cart">
                                      <input type="hidden" name="add" value="1">
                                      <input type="hidden" name="toys_item" value="toy(todos)">
                                      <input type="hidden" name="amount" value="480.00">
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
                @endforeach
                
               
             </div>
          </div>
       </div>
    </div>
 </section>



 
 

@endsection