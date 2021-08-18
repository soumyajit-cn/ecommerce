var base_url = $('#base_url').val()+'/';
var current = window.location.origin +location.pathname;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('.quickviewproduct').on('click',function(){
    var p_id= $(this).data('productid');
    //alert(p_id);
    // if(isNumeric(p_id)){
        $.ajax({
            url:base_url+ "getproduct",
            type: "POST",
            data:{"product_id": p_id},
            dataType: "JSON",
            success: function(response) {
                if(response != ''){
                    var html = '';
                    html+= '<div class="col-md-6 col-sm-6 col-xs-12"><div class="aa-product-view-slider"><div class="simpleLens-gallery-container" id="demo-1">';

                }

            },
            error: function (params) {

            }
        })
    // }
})

