$(document).ready(function(){

    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKENT': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    // <meta name="csrf-token" content="{{ csrf_token() }}"></meta>
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    
    $(document).on('click','.quantity-field', function(){
        var quantity = $(this).val();
        // alert(quantity);
        var cartid = $(this).data('cartid');
        // var cartid = $(this).data('cartid');
        // alert(cartid);
        $.ajax({
            type:'POST',
            data:{"cartid":cartid,"quantity":quantity},
            url:'/update-cart-item-quantity',
            success:function(resp){
                // alert(resp);
            },error:function(){
                
            }
        });
    });

    $(document).on('click','.btnItemDelete',function(){
        var cartid = $(this).data('cartid');
        alert(cartid);
        $.ajax({
            data:{"cartid":cartid},
            url:'/delete-cart-item',
            type:'POST',
            success:function(resp){

            },error:function(){

            }
        })
    });

}); 