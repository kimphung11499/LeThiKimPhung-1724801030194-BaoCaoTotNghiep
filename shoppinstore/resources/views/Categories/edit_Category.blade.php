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
                                    <h3>Danh sách danh mục</h3>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        {{-- @if(session()->has('message'))
                                            <div class="alert alert-success">{{session('message')}}</div>
                                        @endif --}}
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Tên</th>
                                                    <th>Giảm giá</th>
                                                    <th>Trạng thái</th>
                                                    
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            
                                                <tr>
                                                    <td>{{$data->category_name}}</td>
                                                    <td>{{$data->category_discount}}</td>
                                                    <td>{{$data->status}}</td>
                                                    <td>
                                                        <a href="{{URL::to('admin/category/edit/'.$data->id)}}" class="btn btn-warning">Sửa</a>
                                                        <button class="btn btn-danger">Xóa</button>
                                                    </td>
                                                    
                                                </tr>
                                                
                                                
                                                
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            
                            <form action="{{URL::to('admin/category/edit/'.$data->id)}}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Tên</label>
                                  <input type="text" name="category_name" value="{{$data->category_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Giamr giá</label>
                                  <textarea name="category_discount" class="form-control" id="brand_description" rows="5">
                                      {{$data->category_discount}}
                                  </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="1">Hiện</option>
                                        <option value="2">Ẩn</option>
                                    </select>
                                  </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                              </form>
                           
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection