@extends('Customer.customer_layout_2')
@section('content')
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="using-border py-3">
   <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
         <li>
            <a href="index.html">Home</a>
            <span>/ /</span>
         </li>
         <li>Checkout</li>
      </ul>
   </div>
</div>

<section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
   <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="shop_inner_inf">
         <div class="privacy about">
            <h3>Chec<span>kout</span></h3>
            <div class="checkout-right">
               {{-- <h4>Your shopping cart contains: <span>{{$totalItem}} Products</span></h4> --}}
               
               <table class="table">
                  <thead>
                  <tr>
                      <th>Product</th>
                      <th>Description</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Total</th>
                  </tr>
                  </thead>
                  <tbody>
                     @foreach ($userCartItems as $item)
                        <tr>
                           <td>
                              <img src="{{asset('uploads/products/'.$item->product_img)}}" style="max-width: 150px;" class="img-cart">
                           </td>
                           <td>
                              <strong>{{$item->product_name}}</strong>
                              {{-- <p>Size : 26</p> --}}
                           </td>
                           <td>
                           <form class="form-inline">
                              <div class="row">
                              <input class="form-control" type="text" value="{{$item->quantity}}">
                              <button rel="tooltip" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                              <a href="#" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
                              </div>
                              
                           </form>
                           </td>
                           <td>{{$item->product_price}}</td>
                           <td>{{$item->product_price * $item->quantity}}</td>
                     </tr>
                     @endforeach
                      <tr>
                          <td colspan="6">&nbsp;</td>
                      </tr>
                     
                  </tbody>
              </table>
            </div>
            <div class="checkout-left" id="asdasd">
               <div class="col-md-5 checkout-left-basket">
                  <h4>Continue to basket</h4>
                  <ul>
                     @foreach ($userCartItems as $item)
                        <li>{{$item->product_name}} ({{$item->quantity}}) <i>-</i> <span>{{$item->product_price * $item->quantity}}.00 </span></li>
                     @endforeach
                    
                     <li>
                        <form action="{{route('check_code')}}" method="get" enctype="multipart/form-data">
                           @csrf
                              <select class="custom-select" >
                                 <option selected>Ma Giam Gia</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                               </select>
                          
                           {{-- <a href="" onclick="checkFunction()" class="btn btn-primary">Kiem Tra</a> --}}
                           {{-- <input type="submit" onclick="checkFunction()" class="btn btn-primary" value="Kiem Tra"> --}}
                           <button onclick="checkFunction()" class="btn btn-primary" >Kiem Tra</button>
                        </form>
                                
            
                     </li>
                     <li>Total <i>-</i> <span>{{$total}}.00</span></li>
                  </ul>
               </div>
               <div class="col-md-7 address_form">
                  <h4>Add a new Details</h4>
                  
                  <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                     <section class="creditly-wrapper wrapper">
                        <div class="information-wrapper">
                           <div class="first-row form-group">
                              <div class="controls">
                                 <label class="control-label">Full name: </label>
                                 <input class="billing-address-name form-control" type="text" name="customer_name" placeholder="Full name" 
                                    @if (Session::has('id_customer'))
                                       value="{{$customer->customer_name}}"
                                    @endif
                                    >
                              </div>
                              <div class="card_number_grids">
                                 <div class="card_number_grid_left">
                                    <div class="controls">
                                       <label class="control-label">Mobile number:</label>
                                       <input class="form-control" type="text" placeholder="Mobile number"
                                          @if (Session::has('id_customer'))
                                             value="{{$customer->customer_phone}}"
                                          @endif
                                       >
                                    </div>
                                 </div>
                                 <div class="card_number_grid_right">
                                    <div class="controls">
                                       <label class="control-label">Mail: </label>
                                       <input class="form-control" type="mail" placeholder="Email"
                                          @if (Session::has('id_customer'))
                                             value="{{$customer->customer_phone}}"
                                          @endif
                                       >
                                    </div>
                                 </div>
                                 <div class="clear"> </div>
                              </div>
                              <div class="controls">
                                 <label class="control-label">Address: </label>
                                 <input class="form-control" type="text" name="customer_address" placeholder="Town/City"
                                    @if (Session::has('id_customer'))
                                       value="{{$customer->customer_address}}"
                                    @endif
                                 >
                              </div>
                              <div class="controls">
                                 <label class="control-label">Address type: </label>
                                 <select class="form-control option-w3ls">
                                    <option>Office</option>
                                    <option>Home</option>
                                    <option>Commercial</option>
                                 </select>
                              </div>
                           </div>
                           <button class="submit check_out">Delivery to this Address</button>
                        </div>
                     </section>
                  </form>
                  <div class="checkout-right-basket">
                     <a href="payment.html">Make a Payment </a>
                  </div>
               </div>
               <div class="clearfix"> </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>   
      <!-- //top products -->
   </div>
</section>



@endsection