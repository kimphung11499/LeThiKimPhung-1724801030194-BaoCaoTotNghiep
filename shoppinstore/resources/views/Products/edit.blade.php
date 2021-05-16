@extends('Admin.AdminLayout')
@section('admin_connect')
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-12">
                <div class="card card-primary">
                    <form action="{{URL::to('admin/product/edit/'.$product->product_id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="card">
                            
                                <div class="card-header">
                                    <h3>Chỉnh sửa thương hiệu</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-sm-6">
                                    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên</label>
                                            <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                                        
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Code</label>
                                            <input type="text" name="product_code" class="form-control" value="{{$product->product_code}}">
                                        
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình</label>
                                            <input type="file" name="product_img" class="form-control" onchange="previewFile(this)" />
                                            <img src="{{asset('uploads/products/'.$product->product_img)}}" alt="category image" id="previewImg" style="max-width:130px;margin-top:20px;">
                                            <input type="hidden" name="product_img_old" value="{{$product->product_img}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình 1</label>
                                            <input type="file" name="product_img_1" class="form-control" onchange="previewFile1(this)" />
                                            <img src="{{asset('uploads/products/'.$product->product_img_1)}}" alt="category image" id="previewImg1" style="max-width:130px;margin-top:20px;">
                                            <input type="hidden" name="product_img_1_old" value="{{$product->product_img_1}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình 2</label>
                                            <input type="file" name="product_img_2" class="form-control" onchange="previewFile2(this)" />
                                            <img src="{{asset('uploads/products/'.$product->product_img_2)}}" alt="category image" id="previewImg2" style="max-width:130px;margin-top:20px;">
                                            <input type="hidden" name="product_img_2_old" value="{{$product->product_img_2}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình 3</label>
                                            <input type="file" name="product_img_3" class="form-control" onchange="previewFile3(this)" />
                                            <img src="{{asset('uploads/products/'.$product->product_img_3)}}" alt="category image" id="previewImg3" style="max-width:130px;margin-top:20px;">
                                            <input type="hidden" name="product_img_3_old" value="{{$product->product_img_3}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Giá</label>
                                            <input type="text" name="product_price" class="form-control" value="{{$product->product_price}}">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Giảm giá (%)</label>
                                            <input type="text" name="product_discount" class="form-control" value="{{$product->product_discount}}">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số lượng nhập vào</label>
                                            <input type="text" name="product_qty" class="form-control" value="{{$product->product_qty}}">
                                            
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Thương hiệu</label>
                                            <select name="brand_id" class="form-control" id="">
                                                @foreach ($brands as $item)
                                                    @if ($product->brand_id == $item->id)
                                                        <option selected value="{{$item->id}}">{{$item->brand_name}}</option>
                                                    @else
                                                        <option value="{{$item->id}}">{{$item->brand_name}}</option>    
                                                    @endif
                                                    
                                                @endforeach
                                                 
                                            </select>
                                        </div>
    
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Danh mục</label>
                                            <select name="category_id" class="form-control" id="">
                                                @foreach ($categoris as $item)
                                                    @if ($product->category_id == $item->id)
                                                        <option selected value="{{$item->id}}">{{$item->category_name}}</option>
                                                    @else
                                                        <option value="{{$item->id}}">{{$item->category_name}}</option>    
                                                    @endif
                                                    
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mô tả</label>
                                            <textarea name="product_desc" class="form-control" id="product_description" rows="5">
                                                {{$product->product_desc}}
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Trạng thái</label>
                                            <select name="product_status" class="form-control" id="">
                                                @if ($product->product_status == 1)
                                                    <option selected value="1">Hiện</option>
                                                    <option value="0">Ẩn</option>
                                                @else
                                                    <option value="1">Hiện</option>
                                                    <option selected value="0">Ẩn</option>   
                                                @endif
                                                
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>
                                <button class="btn btn-primary col-2 float-right"  type="submit">Lưu</button>
                                </div>
          
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
@endsection