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

                            <hr>
                            <div class="card">

                                <div class="card-header">
                                    <h3>List Invoice</h3>
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

                                        <form action="{{route('invoice.delete')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Email</th>
                                                   
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Payment</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach ($invoices as $item)
                                                    
                                                
                                                <tr>
                                                    <td>
                                                        <input
                                                        type="checkbox"
                                                            id="checkboxNoLabel" value="{{$item->id}}" name="invoice_id[]" 
                                                        />
                                                    </td>
                                                    <td>{{$item->email}}</td>
                                                    
                                                    <td style="text-align: left" >
                                                        <?php 
                                                            
                                                            $quantity = explode(',',$item->quantity);
                                                            $invoice_product = explode(',',$item->product_id);
                                                            for( $j=0; $j<count($invoice_product);  $j++){ ?>
                                                                
                                                                    
                                                                        @foreach ($products as $product)
                                                                            @if ($product->product_id == $invoice_product[$j])
                                                                                <p>{{$product->product_name}} <span>x</span> {{$quantity[$j]}}</p> 
                                                                                
                                                                            @endif
                                                                        @endforeach
                                                                    
                                                                    
                                                                
                                                        <?php } ?>
                                                    </td>

                                                    
                                                    
                                                    <td>{{$item->invoice_price}}</td>
                                                    
                                                    <td>
                                                        @if ($item->payment == 1)
                                                            <p style="color: orange">Truc tiep</p>
                                                        @endif
                                                        @if ($item->payment == 2 )
                                                            <a href="">Online</a>
                                                        @endif
                                                        
                                                        
                                                    </td>
                                                    
                                                    <td>
                                                        <a href="{{URL::to('/admin/invoice/detail/'.$item->id)}}" class="btn btn-success">
                                                            detail
                                                        </a>
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