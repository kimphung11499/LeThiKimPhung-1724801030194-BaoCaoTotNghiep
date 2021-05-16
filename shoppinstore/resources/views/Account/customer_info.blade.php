@extends('Customer.customer_layout_2')
@section('content')

<section style="background-color: #f1f1f1">
    <div class="container container-order" >
        <div class="row">
            @include('Account.customer_img')
            <div class="col-sm-9">
                <h4>THÔNG TIN TÀI KHOẢN</h4>
            </div>
        </div>
        <div class="row">
            @include('Account.customer_left')
            <div class="col-sm-9 customer-form">
                <form class="form-info" action="{{route('change_info')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Họ và tên</label>
                        <div class="col-sm-7">
                            <input type="text" value="{{$customer->customer_name}}" name="name" class="form-control" id="inputPassword">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-7">
                            <input type="text" name="email" readonly class="form-control" value="{{$customer->customer_email}}" id="inputEmail">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Số điện thoại</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="phone" value="{{$customer->customer_phone}}" id="inputPassword">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-7">
                            <div class="row">

                                <input type="radio" class="radio-input" name="gender" value="1"
                                    @if ($customer->customer_gender == 1)
                                        checked
                                    @endif
                                >
                                <label class="radio-lable" for="">Nam</label>

                                <input type="radio" class="radio-input" name="gender" value="0"
                                    @if ($customer->customer_gender == 0)
                                        checked
                                    @endif
                                    >
                                <label class="radio-lable" for="">Nữ</label>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Ngày sinh</label>
                        <div class="col-sm-7">
                            <input type="date" name="birthday" value="{{$customer->customer_brithday}}" class="form-control" id="inputPassword">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Địa chỉ</label>
                        <div class="col-sm-7">
                            <input type="text" name="address" class="form-control" value="{{$customer->customer_address}}" id="inputPassword">
                        </div>
                    </div>
                    
                    <div class="form-check change-password">
                        <input class="form-check-input check-change-password" 
                            type="checkbox" id="gridRadios2" name="check_box"  data-toggle="collapse" data-target="#change-password"
                            value="1";
                            aria-expanded="false" aria-controls="collapseTwo">
                        <label class="form-check-label" for="gridRadios2">
                              Đổi mật khẩu
                        </label>
                    </div>
                    <div class="form-check form-change-password">
                        
                            <div id="change-password" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="form-group row password-change">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu cũ</label>
                                    <div class="col-sm-7">
                                        <input type="password" name="password_current" class="form-control" id="inputPassword"

                                        >
                                        
                                    </div>
                                </div>
            
                                <div class="form-group row password-change">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu mới</label>
                                    <div class="col-sm-7">
                                        <input type="password" name="password_new" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row password-change">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Nhập lại</label>
                                    <div class="col-sm-7">
                                        <input type="password" name="confirm_password" class="form-control">
                                    </div>
                                </div>

                            </div>

                    </div>
                    @if (Session::has('confirm_password_message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('confirm_password_message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>  
                    @endif

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-change " style="color:white">Cập nhật</button>
                    </div>

                  </form>
            </div>
        </div>
        
    </div>
    <br><br><br>
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
    .col-sm-9.customer-form {
    background-color: rgb(255, 255, 255);
    }
    .form-info{
        padding-top: 4%;
    }
    #inputEmail {
        background-color: rgb(227,227,227);
    }
    input.radio-input{
        width: 24px;
        height: 24px;
        margin: 10px 12px 10px 15px;
    }
    .radio-lable{
        margin: 10px 12px 10px 0px;
    }
    .form-check.change-password {
        margin-left: 17.5%;
    }
    input#gridRadios2 {
        width: 24px;
        height: 24px;
    }
    label.form-check-label {
    margin-left: 2%;
    margin-top: 1%;
    }

    .form-check.form-change-password {
    padding-top: 2%;
    }

    
    div#change-password {
    margin-left: -2%;
    }
    button.btn.btn-change {
    background-color: #ea1d5d;
    width: 20%;
}

    
}
</style>