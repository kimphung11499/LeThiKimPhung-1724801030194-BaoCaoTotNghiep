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
                            <div class="card" style="width: 100%">

                           

                                <div class="card-body">
                                    <div >
                                        
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2>INVOICE</h2>
                                                <p>homeservice@gmail.com</p>
                                                <p>+84 976 517 102</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h1 class="h1-logo">
                                                    <a class="the-logo" href="">Shopping<span style="color: #F45D01;">Store</span></a>
                                                </h1>
                                            </div>
                                        </div> <br> <br>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h3>Bill Create</h3>
                                                <p>{{$admin->admin_name}}</p>
                                                <p>{{$admin->email}}</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <h3>Customer</h3>
                                                <p>{{$invoice->customer_name}}</p>
                                                <p>{{$invoice->phone}}</p>
                                                <p>{{$invoice->email}}</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <h3>Info Invoice</h3>
                                                <p>InvoiceCode : {{$invoice->id}}</p>
                                                <p>Invoice Date :{{$invoice->created_at}}</p>
                                                <p>Invoice DueDate :{{$invoice->dataExpired}}</p>
                                            </div>
                                        </div><br> <br>
                                        <div class="row">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Service</th>
                                                  <th scope="col">Price</th>
                                                  <th scope="col">Thanh Tien</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                
                                                @foreach ($products as $key => $product)
                                                <?php
                                                    $a = explode(',',$invoice->product_id);
                                                    $price = explode(',',$invoice->price);
                                                    $quantity = explode(',',$invoice->quantity);
                                                    for($i=0; $i<count($a); $i++)
                                                    {
                                                        if($a[$i] == $product->product_id){
                                                    ?>
                                                        <tr>
                                                          <th scope="row">{{$i + 1}}</th>
                                                          <td>
                                                            <h6>{{$product->product_name}} x {{$quantity[$i]}}</h6>
                                                          </td>
                                                          <td>{{$price[$i]}}</td>
                                                          <td>{{$price[$i] * $quantity[$i]}}</td>

                                                        </tr>
                                                    <?php
                                                        }
                                                    }
                                                ?>
                                            @endforeach
                                                    
                                              </tbody>
                                            </table>
                                            <div class="row col-sm-12">
                                              <div class="container">
                                                <div class="col-m-4 total">
                                                  <h6>Total : <span style="padding-left: 8%">{{$invoice->invoice_price}}</span></h6>
                                                  <h6>Type : <span style="padding-left: 8.5%">
                                                        @if ($invoice->payment == 1)
                                                            Direct Payment
                                                        @else
                                                            Online Paymnent
                                                        @endif   
                                                   
                                                  </span></h6>
                                                  <h6>Status : <span style="padding-left: 5.5%">
                                                        @if ($invoice->status_payment == 1)
                                                            Da thanh toan
                                                        @else
                                                            chua thanh toan
                                                        @endif
                                                  </span></h6>
                                                </div>
                                              </div>
                                              
                                              
                                            </div>
                                        </div>
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
<style>
    .the-logo{
        color: #141414;
        font-weight: 700;
        font-size: 30px;
        padding: 0;
        display: inline-block;
    }
    .h1-logo {
        text-align: right;
        padding-top: 9%;
        padding-right: 9%;
    }
    .total {
      padding-left: 67%;
    }
</style>