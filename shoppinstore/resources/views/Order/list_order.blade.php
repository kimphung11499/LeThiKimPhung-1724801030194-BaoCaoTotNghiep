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
                            <a href="{{route('product.add')}}" class="btn btn-success">Add Order</a>
                            <hr>
                            <div class="card">

                                <div class="card-header">
                                    <h3>List Product</h3>
                                </div> 

                                <div class="card-body">
                                    <div class="table-responsive">
                                        @if (Session::has('success_message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ Session::get('success_message') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                         @endif

                                        <form action="{{route('order.delete')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        
                                        
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Note</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($order as $item)
                                                <tr>
                                                    <td>
                                                        <input
                                                        type="checkbox"
                                                            id="checkboxNoLabel" value="{{$item->id}}" name="order_id[]" 
                                                        />
                                                    </td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->phone}} </td>
                                                    <td>{{$item->address}}</td>
                                                    
                                                    <td>{{$item->note}}</td>
                                                    
                                                    <td>
                                                        @if ($item->status == 1)
                                                            <p style="color: orange">Pending</p>
                                                        @endif
                                                        @if ($item->status == 2 )
                                                            <a href="">Prosesing</a>
                                                        @endif
                                                        @if ($item->status == 3)
                                                            <a href="">Success</a>  
                                                    @endif
                                                    </td>
                                                    
                                                    <td>
                                                        @if ($item->status == 3)
                                                            
                                                        @else
                                                        <a href="{{URL::to('/admin/invoice/create/'.$item->id)}}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        @endif
                                                        
                                                    </td>
                                                </tr>
                                                @endforeach
                                                
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                  <th><input type="submit" class="btn btn-danger" value="delete"></th>
                                                  <th></th>
                                                  <th></th>
                                                  <th></th>
                                                  <th> </th>
                                                  <th></th>
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