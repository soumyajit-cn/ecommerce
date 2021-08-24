var base_url = $('#base_url').val()+'/';
var current = window.location.origin +location.pathname;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$("input[type='number']").keypress(function (e) { //disable alphabetic input on number field
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
       return false;
    }
});
//$(document).ready(function () {
    $(document).on('click','#addcart', function (e) {
        //alert('data');
        e.preventDefault();
        var data= $('#productform').serialize();
        var productid = $(this).data('id');
        //console.log(Json.parse(data));
        $.ajax({
            url: base_url+ 'addtocart',
            data: data,
            method : "POST",
            dataType: 'JSON',
            //cache: false,
            success: function(response){
                swal({
                    'title': 'success',
                    'content': response.message
                })
            },
            error: function (params) {

            }
        })

    })

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
                        html+= '<form action="" id="productform"><input type="hidden" name="product_id" value="'+response.id+'"><div class="col-md-6 col-sm-6 col-xs-12"><div class="aa-product-view-slider"><div class="simpleLens-gallery-container" id="demo-1"><div class="simpleLens-container">';
                        html += '<div class="simpleLens-big-image-container"><a class="simpleLens-lens-image"';
                        html += 'data-lens-image="storage/uploads/'+response.gallery.frontimage+'"><img src="storage/uploads/'+response.gallery.frontimage+'" class="simpleLens-big-image">';
                        html += '</a></div></div>';
                        html += '<div class="simpleLens-thumbnails-container"><a href="#" class="simpleLens-thumbnail-wrapper"data-lens-image=""';
                        html +='data-big-image=""><img src=""></a>';
                        html += '<a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="" data-big-image=""> <img src=""></a>';
                        html += '<a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="" data-big-image=""> <img src=""></a>';
                        html += '</div></div></div></div>';
                        html += '<div class="col-md-6 col-sm-6 col-xs-12"><div class="aa-product-view-content"><h3>'+response.product_name+'</h3>';
                        html += '<div class="aa-price-block"><span class="aa-product-view-price">₹'+response.product_price+'</span>';
                        html += '<p class="aa-product-avilability">Avilability:<span>'+ (response.in_stock == 1) ? "IN-STOCK" : "OUT OF STOCK"+'</span></p></div>';
                        html += '<p>'+response.product_description+'</p>';
                        if(response.attribute != ''){
                           $.each(response.attribute, function (i, item) {
                                html += '<h4>'+i+'</h4><div class="aa-prod-quantity"><select name="attribute['+i+']" class="'+i+'">';
                                $.each(item, function (j, value) {
                                    html += '<option value="'+value+'">'+value+'</option>';
                                    //html += '<label class="radio-inline"><input type="radio" value="'+value+'" aria-label="'+value+'">'+value+'</label';
                                })
                                html += '</select></div>';
                            })
                        }
                        html += '<h4>Quantity</h4><div class="aa-prod-quantity"><form action=""><select name="attribute[quantity]" class="quantity">';
                        for (var i=1; i<=response.order_limit; i++){
                            html +='<option value="'+i+'">'+i+'</option>';
                        }
                        html += '</select></form></div><div class="aa-prod-view-bottom"></div>';
                        html += '<button type="button" data-id="'+response.id+'" data-limit="'+response.order_limit+'" data-quantity="1" class="aa-add-to-cart-btn" id="addcart"><span class="fa fa-shopping-cart"></span>Add To Cart</button>';
                        html += '</div></div></div></form>';
                        $('#quickview').empty().append(html);
                        $('#quick-view-modal').modal('show');

                    }

                },
                error: function (params) {

                }
            })
        // }
    })

    $('body').find('.quantity').on('change',function(){
        var quantity= $(this).val();
        var quantiyselect=$(this);
        quantityselect.closest('.aa-add-to-cart-btn').attr('data-quantity', quantity);
    })

    var sum=0;
    $(document).find('#ordersummary tr').each(function(){

        $(this).find('.price').each(function () {
            var combat = $(this).text().replace(/,|₹|/g, '');
            //console.log(combat);
            if (!isNaN(combat) && combat.length !== 0) {
                sum += parseFloat(combat);
            }
        });
        //console.log(sum);
        $(this).find('td.subtotal').html(sum.toLocaleString('en'));
        //console.log($(this).find('td.subtotal').text());
        var total = sum + $(this).find('#ordersummary td.tax').text().replace(/,|₹|/g, '');
        //console.log(total);
        $(this).find('td.total').html(total.toLocaleString('en'));
    })
// $('body').on('click', '.aa-add-card-btn', function() {
//     //var $button = $(this);
//     var order_limit = $(this).data('limit');
//     var quantity = $(this).data('quantity');
//     var productid = $(this).data('id');

//     //$(".items-list").addClass("show");
//     $.ajax({
//         type: "POST",
//         url: base_url + 'addtocart',
//         data: {
//             'quantity': quantity,
//             'productid': productId,
//             'order_limit': order_limit,
//         },
//         dataType: 'JSON',
//         cache: false,
//         success: function(result) {
//             //fetchCartHoverList();
//             console.log(result);
//             $.alert({
//                 title: "Success",
//                 content: result.name,
//             });
//         }
//     })

// })

