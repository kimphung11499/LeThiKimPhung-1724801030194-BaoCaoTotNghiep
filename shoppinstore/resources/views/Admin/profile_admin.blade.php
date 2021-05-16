<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@extends('Admin.AdminLayout')
@section('admin_connect')
    <div class="container-fluid">
        <div class="container emp-profile">
           
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('uploads/admins/'.$admin->admin_img)}}" width="150px;" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{$admin->admin_name}}
                                    </h5>
                                    <h6>
                                        {{$admin->email}}
                                    </h6>
                                    <p class="proile-rating">Điện Thoại : <span>{{$admin->phone}}</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Change Password</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                @if (Session::has('success_message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ Session::get('success_message') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                         @endif
                                <form action="{{route('admin.changePassword')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Mật khẩu cũ</label>
                                      <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                     
                                    </div>
                                    @if (Session::has('error_message'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ Session::get('error_message') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                         @endif
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Mật Khẩu Mới</label>
                                      <input type="password" name="password_new" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Xác nhận mật khẩu</label>
                                        <input type="password" name="password_confirm" class="form-control" id="exampleInputPassword1">
                                      </div>
                                      @if (Session::has('error_message_conf'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ Session::get('error_message_conf') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                         @endif
                                   <input type="hidden" name="admin_id" value="{{Session::get('admin_id')}}">
                                    <button type="submit" class="btn btn-primary">Thay Đổi</button>
                                  </form>
                             </div>
                            
                        </div>
                    </div>
                </div>
                      
        </div>


    </div>

@endsection

<style>
    .emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}

.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>