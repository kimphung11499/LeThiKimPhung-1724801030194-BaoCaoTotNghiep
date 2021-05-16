@extends('Customer.customer_layout_2')
@section('content')

<section style="background-color: #f1f1f1">
    <div class="container" >
        <br><br>
        
        @if (Session::has('id_customer'))
        @else
            <div class="row">
                <h5>Bạn Đã Có Tài Khoản ? <span><a href="" data-toggle="modal" data-target="#exampleModal">Ấn vào để đăng nhập</a></span></h5> <br>
            </div>
        @endif
        
        <div class="row">   
            <h5>Bạn có mã ưu đãi ? <span><a href="">Ấn vào để nhập mã</a></span></h5>
        </div>
        <br>
    
        <div class="row">
            <div class="col-sm-3">
                
                <form action="{{route('checkout')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group" style="background-color: #ea1d5d; color:white; min-height:50px">
                        <h4 class="tille-1">Thông Tin Chi Tiết</h4>
                        
                      </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Họ Tên *</label>
                      <input style="border-color:#ea1d5d; background-color:transparent" type="text" class="form-control" name="name" 
                          @if (!empty($customer))
                              value="{{$customer->customer_name}}"
                          @endif
                        >
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Địa Chỉ *</label>
                      <input style="border-color:#ea1d5d; background-color:transparent" type="text" class="form-control" name="address"
                          @if (!empty($customer))
                            value="{{$customer->customer_address}}"
                          @endif
                        >
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Tỉnh thành *</label>
                        <select style="border-color:#ea1d5d; background-color:transparent" class="form-control" name="province" id="">
                            <option value="1">Bình Dương</option>
                            <option value="2">Hồ Chí Minh</option>
                            <option value="3">Vũng Tàu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Số điện thọai *</label>
                        <input style="border-color:#ea1d5d; background-color:transparent" type="number" class="form-control" name="phone"
                          @if (!empty($customer))
                            value="{{$customer->customer_phone}}"
                          @endif
                        >
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Email *</label>
                        <input style="border-color:#ea1d5d; background-color:transparent" type="email" class="form-control" name="email"
                          @if (!empty($customer))
                            value="{{$customer->customer_email}}"
                          @endif
                        >
                    </div>
                  
            </div>
            <div class="col-sm-3">
                <div class="form-group" style="background-color: #ea1d5d; color:white; min-height:50px">
                    
                    <h4 class="tille-1">Lưu Ý (Tùy Chọn)</h4>
                </div>
                <div class="form-group">
                    
                    <textarea style="border-color:#ea1d5d; background-color:transparent" name="note" id="" cols="30" rows="7" placeholder="Ghi chú khi giao hàng" class="form-control">
    
                    </textarea>
                </div>
            </div>
            <div class="col-sm-6" style="background-color: #f8f8f8">
                <h3 class="title-3">ĐƠN HÀNG CỦA BẠN</h3><br>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Sản Phẩm</th>
                        
                        <th scope="col" style="text-align: right">Tổng Phụ</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($itemInCart as $item)
                        <tr>
                            <td >{{$item->product_name}} <span>x</span> {{$item->quantity}}</td>
                            <input type="hidden" value="{{$item->product_id}}" name="product[]" >
                            <input type="hidden" value="{{$item->quantity}}" name="quantity[]" >
                            <input type="hidden" value="{{$item->product_price}}" name="price[]" >
                            <input type="hidden" value="{{$item->id}}" name="id_cart[]">
                            <td style="text-align: right">{{number_format($item->product_price * $item->quantity)}}</td>
                          </tr>
                        @endforeach
                      
                      <tr>
                        <th scope="row">Tổng phụ</th>
                        <td style="text-align: right">{{number_format($total)}}</td>
                      </tr>
                      <tr>
                        <th scope="row"><h4>Tổng</h4></th>
                        <td style="text-align: right">{{number_format($total)}}</td>
                        
                      </tr>
                     
                    </tbody>
                  </table>
                  
                    <fieldset class="form-group">
                        <div class="row">
              
                          <div class="col-sm-10">
                            
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="payment" id="gridRadios2" value="1" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <label class="form-check-label" for="gridRadios2">
                                    Trả tiền mặt khi nhận hàng(COD)
                              </label>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Bạn vui lòng chờ xác nhận đơn hàng qua email từ nhân viên Inbox/Order sau khi kiểm tra tình trạng còn hàng tại kho. Xin cảm ơn!
                                </div>
                              </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment" id="gridRadios1" value="2" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                                <label class="form-check-label" for="gridRadios1">
                                  Chuyển khoản qua ngân hàng
                                </label>
                                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                      <div class="card-body">
                                        Bạn vui lòng chờ xác nhận đơn hàng qua email từ nhân viên Inbox/Order sau khi kiểm tra tình trạng còn hàng tại kho. Vui lòng KHÔNG chuyển khoản trước khi nhận được xác nhận từ TGMPBD. Xin cảm ơn!

                                        TênTK: Phạm Thị Tố Nga
                                        Chi Nhánh: Vietcombank chi nhánh: Bình Dương
                                        Số tài khoản: 0281000418684
                                      </div>
                                  </div>
                              </div>
                            
                          </div>
                        </div>
                    </fieldset>
                 
                    <button type="submit" class="button-dathang">Đặt Hàng</button>
                </form>
            </div>
        </div>
    </div>
    <br><br><br>
</section>

<style>
    .button-dathang {
        background-color: #ea1d5d;
        width: 100%;
        height: 10%;
    }
    .title-3{
        text-align: center;
        
    }
    h4.tille-1 {
        text-align: center;
        padding-top: 5%;
    }
</style>

@endsection