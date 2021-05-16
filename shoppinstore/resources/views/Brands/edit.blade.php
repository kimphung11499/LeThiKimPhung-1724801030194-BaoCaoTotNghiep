@extends('Admin.AdminLayout')
@section('admin_connect')
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="row">
                        <div class="col-sm-8">
                            <hr>        
                            <button class="btn btn-primary">Export Excel</button>
                            <hr>
                            <div class="card">

                                <div class="card-header">
                                    <h3>Danh sách thương hiệu</h3>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        @if(session()->has('message'))
                                            <div class="alert alert-success">{{session('message')}}</div>
                                        @endif
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Tên</th>
                                                    <th>Mô tả</th>
                                                    <th>Trạng thái</th>
                                                    
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($data as $item)
                                                <tr>
                                                    <td>{{$item->brand_name}}</td>
                                                    <td>{{$item->brand_desc}}</td>
                                                    <td>{{$item->brand_status}}</td>
                                                    <td>
                                                        <a href="{{URL::to('admin/brand/edit/'.$item->id)}}" class="btn btn-warning">Sửa</a>
                                                        <button class="btn btn-danger">Xóa</button>
                                                    </td>
                                                    
                                                </tr>
                                                @endforeach
                                                
                                                
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            @foreach ($data as $item)
                            <form action="{{URL::to('admin/brand/edit/'.$item->id)}}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Tên</label>
                                  <input type="text" name="brand_name" value="{{$item->brand_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Mô tả</label>
                                  <textarea name="brand_desc" class="form-control" id="brand_description" rows="5">
                                      {{$item->brand_desc}}
                                  </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select name="brand_status" class="form-control" id="">
                                        <option value="1">Hiện</option>
                                        <option value="2">Ẩn</option>
                                    </select>
                                  </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                              </form>
                            @endforeach
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection