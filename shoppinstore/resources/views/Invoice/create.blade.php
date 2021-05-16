@extends('Admin.AdminLayout')
@section('admin_connect')
    <div class="container-fluid">
        <div class="row">
           
            <!-- MultiStep Form -->
                <div class="container-fluid" id="grad1">
                    <div class="row justify-content-center mt-0">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center p-0 mt-3 mb-2">
                            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                <h2><strong>Cretae Invoice</strong></h2>
                                <p>Fill all form field to go to next step</p>
                                <div class="row">
                                    <div class="col-md-12 mx-0">
                                        <form id="msform" action="{{route('save.invoice')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <!-- progressbar -->
                                            <ul id="progressbar">
                                                <li class="active" id="account"><strong>Customer</strong></li>
                                                <li id="personal"><strong>Product</strong></li>
                                                <li id="payment"><strong>Payment</strong></li>-
                                                <li id="confirm"><strong>Finish</strong></li>
                                            </ul> <!-- fieldsets -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Customer Information</h2> 
                                                    <input type="text" name="name" placeholder="Name" value="{{$order->name}}" /> 
                                                    <input type="email" name="email" placeholder="Email Id"  value="{{$order->email}}"/> 
                                                    <input type="text" name="address" placeholder="Address" value="{{$order->address}}" /> 
                                                    <input type="text" name="phone" placeholder="Phone" value="{{$order->phone}}" /> 
                                                    
                                                </div> 
                                                <input type="button" name="next" class="next action-button" value="Next Step" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Product Order Information</h2> 
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col" style="text-align: left">Sản Phẩm</th>
                                                            <th scope="col" style="text-align: right">Tổng Phụ</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                $quantity = explode(',',$order->quantity);
                                                                $price = explode(',',$order->price);
                                                                $order_product = explode(',',$order->product);
                                                                for( $j=0; $j<count($order_product);  $j++){ ?>
                                                                    <tr>
                                                                        <td style="text-align: left" >
                                                                            @foreach ($products as $item)
                                                                                @if ($item->product_id == $order_product[$j])
                                                                                    {{$item->product_name}} <span>x</span> {{$quantity[$j]}}
                                                                                    <input type="hidden" value="{{$item->product_id}}" name="product_id[]">
                                                                                    <input type="hidden" value="{{$quantity[$j]}}" name="quantity[]">
                                                                                    <input type="hidden" value="{{$price[$j]}}" name="price[]">
                                                                                @endif
                                                                            @endforeach
                                                                        </td>
                                                                        <td style="text-align: right">
                                                                            {{$price[$j] * $quantity[$j]}}
                                                                        </td>
                                                                    </tr>
                                                            <?php } ?>
                                                          <tr>
                                                            <th scope="row" style="text-align: left">Tổng phụ</th>
                                                            <td style="text-align: right">{{$total}}</td>
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
                                                            <td style="text-align: right">{{$total}}</td>
                                                          </tr>
                                                         
                                                        </tbody>
                                                      </table>
                                                </div> 
                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Payment Information</h2> <br>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h5>Hình thức thanh toán:</h5>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <input type="radio" id="payment" name="payment" value="1">
                                                                </div>
                                                                <div class="col-sm-6" style="text-align:left">
                                                                    <label for="male">Thanh toán khi nhận hàng</label><br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <input type="radio" id="payment" name="payment" value="2">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label for="male">Thanh toán online</label><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h5>Trạng thái thanh toán</h5>
                                                            <div class="row">
                                                                <div class="col-sm-3"><input type="radio" id="status_paymet" name="status_payment" value="1"></div>
                                                                <div class="col-sm-6" style="text-align:left"><label for="male">Đã thanh toán</label><br></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3"><input type="radio" id="status_paymet" name="status_payment" value="2"></div>
                                                                <div class="col-sm-6"><label for="male">Chưa thanh toán</label><br></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h5>Trạng thái giao hàng</h5>
                                                            <div class="row">
                                                                <div class="col-sm-3"><input type="radio" id="status_ship" name="status_ship" value="1"></div>
                                                                <div class="col-sm-6" style="text-align:left"><label for="male">Đã giao</label><br></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3"><input type="radio" id="status_ship" name="status_ship" value="2"></div>
                                                                <div class="col-sm-6"><label for="male">Chưa giao</label><br></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3"><input type="radio" id="status_ship" name="status_ship" value="3"></div>
                                                                <div class="col-sm-6"><label for="male">Đang giao</label><br></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-3"> <label class="pay">Ngày hết hạng*</label> </div>
                                                        <div class="col-4"> 
                                                            <input type="date" name="dataExpired">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="admin_id" value="{{Session::get('admin_id')}}">
                                                </div> 
                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                                <input type="submit" name="make_payment" class="next action-button" value="Confirm" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                                    </div> <br><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-7 text-center">
                                                            <h5>You Have Successfully Signed Up</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <input type="hidden" name="order_id" value="{{$order->id}}">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection
<style>
    li#confirm {
    position: absolute;
    margin-top: -2.3%;
}
</style>


