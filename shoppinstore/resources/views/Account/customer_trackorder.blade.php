@extends('Customer.customer_layout_2')
@section('content')

<section style="background-color: #f1f1f1">
    <div class="container container-order" >
        <div class="row">
            @include('Account.customer_img')
            <div class="col-sm-9">
              <h4>THEO DÕI ĐƠN HÀNG ({{count($order)}})</h4>
          </div>
        </div>
        <div class="row">
            @include('Account.customer_left')
            <div class="col-sm-9">
                @foreach ($order as $key => $item)
                    <div class="container container-order" >
                        @if (count($order) > 1)
                            Đơn hàng{{$key +1}}
                        @endif
                        <div class="row">
                            <div class="col-sm-3" style="text-align: center; border-right:1px solid">
                                <p>Mã đơn hàng</p>
                                <h6>{{$item->id}}</h6>
                            </div>
                            <div class="col-sm-3" style="text-align: center;  border-right:1px solid">
                                <p>Ngày</p>
                                <h6>{{$item->created_at}}</h6>
                            </div>
                            <div class="col-sm-3" style="text-align: center;  border-right:1px solid">
                                <p>Tổng cộng</p>
                                <h6>{{number_format($item->price_order)}}</h6>
                            </div>
                            <div class="col-sm-3" style="text-align: center">
                                <p>Phương thức thanh toán</p>
                                <h6>
                                    
                                    @if ($item->payment == 1)
                                        Thanh toán trực tiếp
                                    @else
                                        Thanh toán online
                                    @endif

                                    
                                
                                </h6>
                            </div>
                            <br><br>
                        </div>
                        <br>
                        
                        <div class="row">
                            <article class="card">
                                <header class="card-header" style="text-align: center"> Đơn hàng / Theo dõi </header>
                                <div class="card-body">
                                    <div class="track">
                                        <div class="step active"> 
                                            <span class="icon"> <i class="fa fa-check"></i> </span> 
                                            <span class="text">Đơn hàng đã được xác nhận</span> 
                                        </div>
                                        
                                       
                                        <div class="step 
                                            @if ($item->status >= 2)
                                                active
                                            @endif
                                        "> 
                                            <span class="icon"> <i class="fa fa-truck"></i> </span> 
                                            <span class="text"> Đang giao </span> 
                                        </div>
                                        <div class="step 
                                            @if ($item->status >= 3)
                                                active
                                            @endif
                                        "> 
                                            <span class="icon"> <i class="fa fa-box"></i> </span> 
                                            <span class="text">Đã giao</span> 
                                        </div>
                                    </div>
                                    <hr>
                                    
                                </div>
                            </article>
                        </div><br>
                        <div class="row" style="text-align: center">
                            <h4 style="width: 100%">THÔNG TIN ĐƠN HÀNG</h4>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" style="text-align: left">Sản Phẩm</th>
                                    <th scope="col" style="text-align: right">Tổng Phụ</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                        $price = explode(',',$item->price);
                                        
                                        $quantity = explode(',',$item->quantity);
                                        $order_product = explode(',',$item->product);
                                        for( $j=0; $j<count($order_product);  $j++){ ?>
                                            <tr>
                                                <td style="text-align: left" >
                                                    @foreach ($products as $product)
                                                        @if ($product->product_id == $order_product[$j])
                                                            {{$product->product_name}} <span>x</span> {{$quantity[$j]}}
                                                            
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td style="text-align: right">
                                                    {{number_format($price[$j] * $quantity[$j])}}
                                                </td>
                                            </tr>
                                    <?php } ?>
                                    
                                    
                                <tr>
                                    <th scope="row" style="text-align: left">Tổng phụ</th>
                                    <td style="text-align: right">{{number_format($item->price_order)}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="text-align: left">Phương thức thanh toán</th>
                                    <td style="text-align: right">
                                        @if ($item->payment == 1)
                                            Thanh toán khi nhận hàng  
                                        @else
                                            Thanh toán onlien   
                                        @endif
                                          
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" style="text-align: left"><h4>Tổng</h4></th>
                                    <td style="text-align: right">{{number_format($item->price_order)}}</td>
                                </tr>
                                
                                </tbody>
                            </table>

                            @if ($item->status >= 3)
                                <div class="row col-12 ">
                                    <a href="{{URL::to('/customer/confirm-order/'.$item->id)}}" class="btn btn-success" >Đã nhận hàng</a>
                                </div>
                            @endif
                            
                        </div>
                        
                    </div>
                    <hr>
                @endforeach
                <br><br><br>
            </div>
        </div>
        
    </div>
   
</section>

@endsection

<style>
    .img-account{
        margin-top: -8px;
        width: 53px;
        border-radius: 50%;
    }
    .list_ac{
        padding-left: 11%;
    }
</style>
<style>
    .title-order-received {
        background-color: transparent;
        border-style: dashed;
        border: 2px dashed #7a9c59;
        width: 100%;
        text-align: center;
        color: #7a9c59;
        padding: 3%;
        margin-bottom: 30px;
        line-height: 1.4;
        font-weight: 600;
    }
    .container-order{
        padding-left: 10%;
        padding-right: 10%;
    }
    article.card {
        width: 100%;
    }
    .fa {
        line-height: 2 !important;
    }
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 5px solid rgba(0,0,0,.1) !important;
    }
    </style>