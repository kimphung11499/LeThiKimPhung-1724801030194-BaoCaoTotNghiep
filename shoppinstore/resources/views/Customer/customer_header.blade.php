

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
                <button class="btn" type="submit" style="color: #ea1d5d">Tìm kiếm</button>
             </form>
          </div>
          <div class="col-lg-4 col-md-3 right-side-cart">
             <div class="cart-icons" style="margin-top: -10px;!important">
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
    <nav class="navbar navbar-expand-lg navbar-light">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav" >
             <li class="nav-item active">
                <a class="nav-link" href="{{route('store')}}">Trang chủ <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                <a href="{{route('shop')}}" class="nav-link">Sản phẩm</a>
             </li>
             <li class="nav-item">
                <a href="" class="nav-link">Service</a>
             </li>
             <li class="nav-item">
                <a href="" class="nav-link">Shop Now</a>
             </li>
             <li class="nav-item">
                <a href="" class="nav-link">Liên hệ</a>
             </li>
          </ul>
       </div>
    </nav>
 </div>




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
