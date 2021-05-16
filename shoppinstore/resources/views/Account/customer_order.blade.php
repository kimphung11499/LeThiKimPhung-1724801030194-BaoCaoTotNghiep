@extends('Customer.customer_layout_2')
@section('content')

<section style="background-color: #f1f1f1">
    <div class="container container-order" >
        <div class="row">
            @include('Account.customer_img')
            <div class="col-sm-9">
              <h4>LỊCH SỬ MUA HÀNG</h4>
          </div>
        </div>
        <div class="row">
            @include('Account.customer_left')
            <div class="col-sm-9">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Mã</th>
                        <th scope="col">Tên sản phẩm </th>
                        <th scope="col">Giá</th>
                        
                        <th scope="col">Tổng cộng</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($carts as $key => $item)
                        <tr>
                          <td >{{$item->id}}</td>
                          <td>{{$item->product_name}} <span>x</span>( {{$item->quantity}} )</td>
                          <td>{{number_format($item->product_price)}}</td>
                          <td>{{number_format($item->product_price * $item->quantity)}}</td>
                          <td><a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_{{$key}}">Đánh giá</a></td>
                        </tr>

                        <div class="modal fade" id="exampleModal_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <form action="{{route('customer.cmt')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">{{$item->product_name}} </h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container d-flex justify-content-center mt-200">
                                        <div class="row">
                                            <div class="col-md-12">
                                              
                                                  
                                                  <input type="hidden" name="product_id" value="{{$item->product_id}}">
      
                                                  <div>
                                                    <textarea name="cmt" id="" cols="30" rows="5" placeholder="Nhap danh gia ">
                                                      
                                                    </textarea>
                                                  </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                      <button type="submit" class="btn btn-primary">Đánh giá</button>
                                    </div>
                                  </div>
                            </form>
                            
                          </div>
                        </div>

                      @endforeach
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
        
    </div>
    <br><br><br>
</section>

    

   

@endsection

{{-- <style>
  

@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

/* Styling h1 and links
        ––––––––––––––––––––––––––––––––– */
        h1[alt="Simple"] {color: white;}
        a[href], a[href]:hover {color: grey; 
        /* font-size: 0.5em;  */
        text-decoration: none}



        .starrating > input {display: none;}  /* Remove radio buttons */

        .starrating > label:before { 
          content: "\f005"; /* Star */
          margin: 2px;
          font-size: 8em;
          font-family: FontAwesome;
          display: inline-block; 
        }

        .starrating > label
        {
          color: #222222; /* Start color when not clicked */
          font-size: 4;
        }

        .starrating > input:checked ~ label
        { color: #ffca08 ; } /* Set yellow color when star checked */

        .starrating > input:hover ~ label
        { color: #ffca08 ;  } /* Set yellow color when star hover */


</style> --}}
<style>
  
</style>

