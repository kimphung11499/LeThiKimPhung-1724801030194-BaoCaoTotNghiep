@extends('Admin.AdminLayout')
@section('admin_connect')
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-12">
                <div class="card card-primary">
                    <form action="{{route('admin.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="card">
                            
                                <div class="card-header">
                                    <h3>Thêm Admin</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-sm-6 ">
                                    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                        
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số điện thoại</label>
                                            <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone">
                                            
                                        </div>

                                    
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mật khẩu</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nhập lại mật khẩu</label>
                                            <input type="password" name="confirm_password" class="form-control" id="exampleInputEmail1" placeholder="Password">
                                            
                                        </div>

                                                @if (Session::has('error_message'))
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    {{ Session::get('error_message') }}
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình</label>
                                            <input type="file" name="admin_img" class="form-control" onchange="previewFile(this)" />
                                            <img alt="admin image" id="previewImg" style="max-width:130px;margin-top:20px;">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Trạng thái</label>
                                            <select name="status" class="form-control" id="">
                                                <option value="1">Hiện</option>
                                                <option value="0">Ẩn</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                                     <button class="btn btn-primary col-2 float-right"  type="submit">Lưu</button>
                                </div>
          
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
@endsection