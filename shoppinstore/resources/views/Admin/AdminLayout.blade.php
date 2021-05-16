<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{asset('backend/css/styles.css')}}" rel="stylesheet" />
        <link href="{{asset('backend/css/multi-step-form.css')}}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.js"></script> --}}

        <script src="{{asset('backend/js/admin_script.js')}}"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    </head>
    <body class="sb-nav-fixed">
        
        @include('admin.nav_top')

        <div id="layoutSidenav">

            @include('admin.nav_left')

            <div id="layoutSidenav_content">

                {{-- // start body --}}
                <main>
                    @yield('admin_connect')
                </main>
                

                @include('admin.nav_bottom')
            </div>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('backend/js/scripts.js')}}"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('backend/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('backend/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('backend/assets/demo/datatables-demo.js')}}"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>


        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="{{asset('backend/admin_script.js')}}"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />




        <script src="{{asset('backend/js/multi-step-form.js')}}"></script>

        {{-- preview Img  --}}
        <script>
            function previewFile(input){
                var file = $("input[type=file]").get(0).files[0];
                if(file){
                    var reader = new FileReader();
                    reader.onload = function(){
                        $('#previewImg').attr("src",reader.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>

        <script>
            function previewFile1(input){
                var file = $("input[name=product_img_1]").get(0).files[0];
                if(file){
                    var reader = new FileReader();
                    reader.onload = function(){
                        $('#previewImg1').attr("src",reader.result);
                       
                    }
                    reader.readAsDataURL(file);
                }
            }
            function previewFile2(input){
                var file = $("input[name=product_img_2]").get(0).files[0];
                if(file){
                    var reader = new FileReader();
                    reader.onload = function(){
                        $('#previewImg2').attr("src",reader.result);
                       
                    }
                    reader.readAsDataURL(file);
                }
            }
            function previewFile3(input){
                var file = $("input[name=product_img_3]").get(0).files[0];
                if(file){
                    var reader = new FileReader();
                    reader.onload = function(){
                        $('#previewImg3').attr("src",reader.result);
                       
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>
        
        @if (Session::has('category_added'))
            <script>
                toastr.success("{!! Session::get('category_added') !!}")
            </script>
        @endif

        @if (Session::has('product_added'))
            <script>
                toastr.success("{!! Session::get('product_added') !!}")
            </script>
        @endif
        @if (Session::has('product_edited'))
            <script>
                toastr.success("{!! Session::get('product_edited') !!}")
            </script>
        @endif


        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
        <script>
            CKEDITOR.replace( 'brand_description' );
        </script>
        <script>
            CKEDITOR.replace( 'category_description' );
        </script>
        <script>
            function deleteFunction() {
              alert("Bạn có chắc muốn xóa");
            }
            </script>
        <script>
            CKEDITOR.replace( 'product_description' );
        </script>



    </body>
</html>
