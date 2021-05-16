@extends('Admin.AdminLayout')
@section('admin_connect')
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>        
                            <button class="btn btn-primary">Export Excel</button>
                            <a href="{{route('product.add')}}" class="btn btn-success">Thêm sản phẩm</a>
                            <hr>
                            <div class="card">

                                <div class="card-header">
                                    <h3>Danh sách sản phẩm</h3>
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
                                        <form action="{{route('product.delete_many')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                       
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Tên</th>
                                                    <th>Hình</th>
                                                    <th>Giá</th>
                                                    
                                                    <th>Thương hiệu</th>
                                                    <th>Danh mục</th>
                                                    {{-- <th>Status</th> --}}
                                                    
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($data as $item)
                                                <tr>
                                                    <td>
                                                        <input
                                                        type="checkbox"
                                                            id="checkboxNoLabel" value="{{$item->product_id}}" name="product_id[]" 
                                                         />
                                                    </td>
                                                    <td>{{$item->product_name}}</td>
                                                    <td>
                                                        <img src="{{asset('/uploads/products/'.$item->product_img)}}" width="150px" alt="">
                                                    </td>
                                                    <td>{{number_format($item->product_price)}}</td>
                                                    
                                                    <td>{{$item->brand_name}}</td>
                                                    <td>{{$item->category_name}}</td>
                                                    
                                                    
                                                    <td>
                                                        <a href="{{URL::to('/admin/product/edit/'.$item->product_id)}}"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="{{URL::to('/admin/product/delete/'.$item->product_id)}}" onclick="deleteFunction()" ><i class="far fa-trash-alt"></i></a>
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
                                                  <th></th>
                                              </tr>
                                              </tfoot>
                                        </table> 
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection