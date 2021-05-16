@extends('Admin.AdminLayout')
@section('admin_connect')
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-12">
                <div class="card card-primary">
                    <form action="{{URL::to('admin/edit/'.$admin->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="card">
                            
                                <div class="card-header">
                                    <h3>Edit Admin</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-sm-6 ">
                                    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên</label>
                                            <input type="text" value="{{$admin->admin_name}}" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                        
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" value="{{$admin->email}}" readonly name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số điện thoại</label>
                                            <input type="number" value="{{$admin->phone}}" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone">
                                            
                                        </div>

                                    
                                    </div>
                                    <div class="col-sm-6">
                                        

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình</label>
                                            <input type="file" name="admin_img" class="form-control" onchange="previewFile(this)" />
                                            <input type="hidden" name="admin_img_old" value="{{$admin->admin_img}}">
                                            <img src="{{asset('uploads/admins/'.$admin->admin_img)}}" style="max-width:130px;margin-top:20px;" alt="">
                                            {{-- <img alt="admin image" id="previewImg" style="max-width:130px;margin-top:20px;"> --}}
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Trạng thái</label>
                                            <select name="status" class="form-control" id="">
                                                @if ($admin->status)
                                                    <option selected value="1">Ẩn</option>
                                                    <option value="0">Hiện</option>
                                                @else
                                                    <option value="1">Ẩn</option>
                                                    <option selected value="0">Hiện</option>
                                                @endif
                                                
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