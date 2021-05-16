@extends('Admin.AdminLayout')
@section('admin_connect')
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-12">
                <div class="card card-primary">

                    @if (Session::has('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            @endif
                    <form action="{{route('product.add')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="card">
                            
                                <div class="card-header">
                                    <h3>Thêm sản phẩm</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-sm-6">
                                    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên</label>
                                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name">
                                        
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Code</label>
                                            <input type="text" name="product_code" class="form-control" id="exampleInputEmail1" placeholder="Enter Product code">
                                        
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình</label>
                                            <input type="file" name="product_img" class="form-control" onchange="previewFile(this)" />
                                            <img alt="category image" id="previewImg" style="max-width:130px;margin-top:20px;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình 1</label>
                                            <input type="file" name="product_img_1" class="form-control" onchange="previewFile1(this)" />
                                            <img alt="category image" id="previewImg1" style="max-width:130px;margin-top:20px;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình 2</label>
                                            <input type="file" name="product_img_2" class="form-control" onchange="previewFile2(this)" />
                                            <img alt="category image" id="previewImg2" style="max-width:130px;margin-top:20px;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình 3</label>
                                            <input type="file" name="product_img_3" class="form-control" onchange="previewFile3(this)" />
                                            <img alt="category image" id="previewImg3" style="max-width:130px;margin-top:20px;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Giá</label>
                                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Giảm giá (%)</label>
                                            <input type="text" name="product_discount" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số lượng nhập vào</label>
                                            <input type="text" name="product_qty" class="form-control" id="exampleInputEmail1" placeholder="Enter Quantity">
                                            
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Thương hiệu</label>
                                            <select name="brand_id" class="form-control" id="">
                                                @foreach ($brands as $item)
                                                    <option value="{{$item->id}}">{{$item->brand_name}}</option>
                                                @endforeach
                                                 
                                            </select>
                                        </div>
    
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Danh mục</label>
                                            <select name="category_id" class="form-control" id="">
                                                @foreach ($categoris as $item)
                                                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mô tả</label>
                                            <textarea name="product_desc" class="form-control" id="product_description" rows="5">
                                                
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Trạng thái</label>
                                            <select name="product_status" class="form-control" id="">
                                                <option value="1">Hiện</option>
                                                <option value="0">Ẩn</option>
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