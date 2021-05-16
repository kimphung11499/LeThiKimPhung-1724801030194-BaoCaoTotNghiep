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
                            {{-- <a href="{{route('product.add')}}" class="btn btn-success">Add Product</a> --}}
                            <hr>
                            <div class="card">

                                <div class="card-header">
                                    <h3>List Product</h3>
                                </div> 

                                <div class="card-body">
                                    <div class="table-responsive">
                                        
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Customer</th>
                                                    <th>Product</th>
                                                    
                                                    <th>COMMENT</th>
                                                    <th>Status</th>
                                                   
                                                    <th>Action</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($data as $key => $item)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$item->customer_name}}</td>
                                                    <td>
                                                        {{$item->product_name}}
                                                    </td>
                                                    <td>{{$item->cmt}}</td>
                                                    <td>
                                                        @if ($item->status == 0)
                                                           Chưa duyệt
                                                        @endif
                                                        @if ($item->status == 1)
                                                            Đã duyệt
                                                        @endif
                                                    </td>
                                                    
                                                    
                                                    <td>
                                                       
                                                        @if ($item->status == 0)
                                                            <a href="{{URL::to('admin/comment/update/'.$item->id)}}" class="btn btn-primary">Duyệt</a>
                                                        @else
                                                            
                                                        @endif
                                                        
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