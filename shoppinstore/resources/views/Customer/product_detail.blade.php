@extends('Customer.customer_layout_2')
@section('content')
<section class="banner-bottom py-lg-5 py-3">
    <div class="container">
        @foreach ($product as $item)
            
       
       <div class="inner-sec-shop pt-lg-4 pt-3">
          <div class="row">
             <div class="col-lg-4 single-right-left ">
                <div class="grid images_3_of_2">
                   <div class="flexslider1">
                      <ul class="slides">
                         <li data-thumb="{{asset('uploads/products/'.$item->product_img)}}">
                            <div class="thumb-image"> <img src="{{asset('uploads/products/'.$item->product_img)}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                         </li>
                         <li data-thumb="{{asset('uploads/products/'.$item->product_img_1)}}">
                            <div class="thumb-image"> <img src="{{asset('uploads/products/'.$item->product_img_1)}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                         </li>
                         <li data-thumb="{{asset('uploads/products/'.$item->product_img_2)}}">
                            <div class="thumb-image"> <img src="{{asset('uploads/products/'.$item->product_img_2)}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                         </li>
                      </ul>
                      <div class="clearfix"></div>
                   </div>
                </div>
             </div>
             <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                <h3>{{$item->product_name}}</h3>
                <p>
                 <span class="item_price">
                     @if ($item->product_discount > 0)
                        {{number_format($item->product_price - ($item->product_price * $item->product_discount/100))}} VND
                     @else
                        {{number_format($item->product_price - ($item->product_price * $item->category_discount/100))}} VND
                     @endif
                 </span>
                 @if ($item->product_discount > 0 || $item->category_discount > 0 )
                     <del>
                        
                        {{number_format($item->product_price)}} VND<br>
                     </del>
                 @endif
                  
                </p>
                <div class="rating1">
                   <ul class="stars">

                      <li>
                         <div class="row ml-1">
                           <a style="font-weight: 600">Danh Muc : </a>
                           <a href="{{URL::to('/store/product-by-category/'.$item->category_id)}}">{{$item->category_name}}</a>
                         </div>
                         
                     </li><br>
                     <li>
                        <div class="row ml-1">
                          <a style="font-weight: 600">Xuat Xu : </a>
                          <a href="">{{$item->brand_name}}</a>
                        </div>
                        
                    </li>
                      {{-- <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li> --}}
                   </ul>
                </div>
                <hr>
                <form action="{{route('cart.addToCart')}}" method="POST" enctype="multipart/form-data">
                  @csrf 
                    <div class="color-quality">
                        <div class="color-quality-right ml-3">
                            <div class="row">
                             <label for="" style="font-weight: 600">Số lượng: </label>
                             <input type="number" class="col-md-2 ml-2" name="quantity" value="1">
                            </div>
                           
                        </div>
                     </div>
                     <hr>
                     
                     <div class="occasion-cart">
                        <div class="toys single-item singlepage">
                              <input type="hidden" name="product_id" value="{{$item->product_id}}">
                              <input type="hidden" name="product_price" value="{{$item->product_price}}">
                              <button type="submit" class="toys-cart ptoys-cart add">
                                  Thêm vào giỏ hàng
                              </button>
                        </div>
                     </div>
                </form>
                
                
             </div>
             <div class="clearfix"> </div>
             
          </div>

          <div class="row">
             <!--/tabs-->
             <div class="responsive_tabs col-sm-12">
               <div id="horizontalTab">
                  <ul class="resp-tabs-list">
                     <li>Chi tiết sản phẩm</li>
                     <li>Đánh giá</li>
                  </ul>
                  <div class="resp-tabs-container">
                     <!--/tab_one-->
                     <div class="tab1">
                        <div class="single_page">
                           <h6>{{$item->product_name}}</h6>
                           <p>{{$item->product_desc}}
                           </p>
                          
                        </div>
                     </div>
                     <!--//tab_one-->
                     
                       <div class="tab2">
                          <div class="single_page">
                             <div class="bootstrap-tab-text-grids">
                                <div class="bootstrap-tab-text-grid">
                                   <div class="bootstrap-tab-text-grid-left-left">
                                      <img src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png" alt=" " class="img-fluiddddddd">
                                   </div>
                                   @foreach ($comments as $item)
 
                                        <div class="bootstrap-tab-text-grid-right-right">
                                           <ul>
                                              <li><a style="color: ea1d5d" href="#">{{$item->customer_name}}</a></li>
                                             
                                           </ul>
                                           <p style="padding-left:3%; margin:-1em 0 0 !important">
                                              {{$item->cmt}}
                                           </p>
                                        </div>
                                        <div class="clearfix"> </div>
 
                                   @endforeach
 
                                   
                                </div>
                             </div>
                          </div>
                       </div>
                     
                     

                  </div>
               </div>
            </div>
            <!--//tabs-->
          </div>
       </div>
       @endforeach
    </div>
 </section>
@endsection


<style>
   .img-fluiddddddd {
    max-width: 47% !important;
    height: auto;
    margin-left: 60% !important;
}
.bootstrap-tab-text-grid-left-left {
    float: left;
    width: 9% !important;
}
.bootstrap-tab-text-grid-right-right {
    float: right;
    width: 90% !important;
}
</style>