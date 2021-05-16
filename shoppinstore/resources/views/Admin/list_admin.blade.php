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
                            <a href="{{route('admin.create')}}" class="btn btn-success">Thêm Admin</a>
                            <hr>
                            <div class="card">

                                <div class="card-header">
                                    <h3>Danh sách Admin</h3>
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
                                        <form action="{{route('admin.delete')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Tên</th>
                                                    <th>Email</th>
                                                    
                                                    <th>Hình</th>
                                                    <th>Ngày tạo</th>
                                                   
                                                    <th>Trạng thái</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($data as $key => $item)
                                                <tr>

                                                    <td>
                                                       
                                                        <input
                                                            type="checkbox"
                                                                id="checkboxNoLabel" value="{{$item->id}}" name="admin_id[]" 
                                                        />
                                                
                                                    </td>
                                                    <td>{{$item->admin_name}}</td>
                                                    <td>
                                                        {{$item->email}}
                                                    </td>
                                                    <td>
                                                        <img src="{{asset('uploads/admins/'.$item->admin_img)}}" width="150px" alt="">
                                                    </td>
                                                    <td>
                                                        {{$item->created_at}}
                                                    </td>
                                                    
                                                    <td>
                                                       
                                                        <a href="{{URL::to('admin/edit/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                                        
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