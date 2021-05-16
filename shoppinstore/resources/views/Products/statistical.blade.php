@extends('Admin.AdminLayout')
@section('admin_connect')
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>        
                            <a href="{{route('excel')}}" class="btn btn-primary">Export Excel</a>
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
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Tên</th>
                                                    <th>Hình</th>
                                                    <th>Giá</th>
                                                    
                                                    <th>Số lượng nhập vào</th>
                                                    <th>Đã bán</th>
                                                    <th>Còn lại</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($data as $item)
                                                <tr>
                                                    <td>{{$item->product_name}},{{$item->product_id}}</td>
                                                    <td>
                                                        <img src="{{asset('/uploads/products/'.$item->product_img)}}" width="150px" alt="">
                                                    </td>
                                                    <td>{{number_format($item->product_price)}}</td>
                                                    
                                                    <td>{{$item->product_qty}}</td>
                                                    <td>{{$item->product_sale}}</td>
                                                    <td>
                                                        {{$item->product_stock}}
                                                    </td>
                                                    
                                                </tr>
                                                @endforeach
                                                
                                                
                                            </tbody>
                                        </table> 
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