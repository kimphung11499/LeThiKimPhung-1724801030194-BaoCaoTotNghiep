@extends('Customer.customer_layout_2')
@section('content')

<section style="background-color: #f1f1f1">
    <div class="container container-order" >
        <br><br>
        <div class="row">
            <div class="title-order-received">
                <h4>Cảm Ơn Bạn, Đơn Hàng Của Bạn Đã Được Nhận.</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3" style="text-align: center; border-right:1px solid">
                <p>Mã đơn hàng</p>
                <h6>{{$order->id}}</h6>
            </div>
            <div class="col-sm-3" style="text-align: center;  border-right:1px solid">
                <p>Ngày</p>
                <h6>{{$order->created_at}}</h6>
            </div>
            <div class="col-sm-3" style="text-align: center;  border-right:1px solid">
                <p>Tổng cộng</p>
                <h6>{{number_format($total_order)}}</h6>
            </div>
            <div class="col-sm-3" style="text-align: center">
                <p>Phương thức thanh toán</p>
                <h6>
                    @if ($order->payment == 1)
                        Thanh toán trực tiếp
                    @endif
                    @if ($order->payment == 2)
                        Thanh toán online
                    @endif
                </h6>
            </div>
            <br><br>
        </div>
        <br>
        <div class="row" style="text-align: center; width:100%">
            <p style="width: 100%">Trả tiền mặt khi giao hàng</p>
        </div> <br>
        <div class="row">
            <article class="card">
                <header class="card-header" style="text-align: center"> Đơn hàng / Theo dõi </header>
                <div class="card-body">
                    <div class="track">
                        <div class="step active"> 
                            <span class="icon"> <i class="fa fa-check"></i> </span> 
                            <span class="text">Đơn hàng đã được xác nhận</span> 
                        </div>
                        
                        <div class="step "> 
                            <span class="icon"> <i class="fa fa-truck"></i> </span> 
                            <span class="text"> Đăng giao</span> 
                        </div>
                        <div class="step "> 
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
                            $price = explode(',',$order->price);
                            $quantity = explode(',',$order->quantity);
                            $order_product = explode(',',$order->product);
                            for( $j=0; $j<count($order_product);  $j++){ ?>
                                <tr>
                                    <td style="text-align: left" >
                                        @foreach ($products as $item)
                                            @if ($item->product_id == $order_product[$j])
                                                {{$item->product_name}} <span>x</span> {{$quantity[$j]}}
                                                
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
                    <td style="text-align: right">{{number_format($total_order)}}</td>
                  </tr>
                  <tr>
                    <th scope="row" style="text-align: left">Phương thức thanh toán</th>
                    <td style="text-align: right">
                        @if ($order->payment == 1)
                            Thanh toán khi nhận hàng    
                        @endif
                        @if ($order->payment == 2)
                            Thanh toán onlien   
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" style="text-align: left"><h4>Tổng</h4></th>
                    <td style="text-align: right">{{number_format($total_order)}}</td>
                  </tr>
                 
                </tbody>
              </table>
        </div>
        
    </div>
    <br><br><br>
</section>

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

</style>

@endsection