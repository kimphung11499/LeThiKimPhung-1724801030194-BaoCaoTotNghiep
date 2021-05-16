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
                                        @if (Session::has('success_message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ Session::get('success_message') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                         @endif
                                        <form action="{{route('category.deletemany')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Tên</th>
                                                    <th>Giảm giá</th>
                                                    <th>Trạng thái</th>
                                                    
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($data as $item)
                                                <tr>
                                                    <td>
                                                        <input
                                                        type="checkbox"
                                                            id="checkboxNoLabel" value="{{$item->id}}" name="category_id[]" 
                                                        />
                                                    </td>
                                                    <td>{{$item->category_name}}</td>
                                                    <td>{{$item->category_discount}}</td>
                                                    <td>{{$item->status}}</td>
                                                    <td>
                                                        <a href="{{URL::to('admin/category/edit/'.$item->id)}}" class="btn btn-warning">Sửa</a>
                                                        <a href="{{URL::to('admin/category/delete-category/'.$item->id)}}" onclick="deleteFunction()" class="btn btn-danger">Xóa</a>
                                                    </td>
                                                    
                                                </tr>
                                                @endforeach
                                                
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                  <th><input type="submit" class="btn btn-danger" onclick="deleteFunction()" value="Xóa"></th>
                                                  <th></th>
                                                  <th></th>
                                                  <th></th>
                                                  <th> </th>
                                                  
                                              </tr>
                                              </tfoot>
                                        </table> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-header">
                                        <h3>Thêm danh mục</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('category.add')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Tên</label>
                                          <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Giảm giá</label>
                                          <input type="number" name="category_discount" class="form-control" >
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
        </div>
    </div>
@endsection