(function ($) {
    // USE STRICT
    "use strict";

      try{
          $('#addattrbiute').on('click',function(){
            var id= $(this).data('id');
            var incid= id+1 ;
            //console.log(id);
            var html='';
            html += '<div class="form-group"><fieldset class="the-fieldset rounded ">';
            html += '<legend class="the-legend badge badge-secondary px-2 text-uppercase">Attribute</legend>';
            html += '<div class="col-12 col-md-6 form-group"><div class="input-group"><div class="input-group-addon">Name</div>';
            html += '<input type="text" name="attribute['+incid+'][key]" class="form-control"><div class="input-group-addon">';
            html += '<i class="fas fa-list-alt"></i></div></div></div><div class="col-12 col-md-12 form-group">';
            html += '<div class="input-group"><div class="input-group-addon">Value</div>';
            html += '<input type="text" name="attribute['+incid+'][value][]" class="form-control">';
            html += '<button type="button" class="valueplus input-group-addon btn" data-id="'+incid+'"><i class="fas fa-plus"></i></button></div></div></fieldset></div>';
            $('#attributecontainer').append(html);
            $('#addattrbiute').data('id', incid);
          });
          $('body').on('click','.valueplus',function(){
            var btnid= $(this).data('id');
            console.log(btnid);
            var input= '';
            input +='<div class="col-12 col-md-12 form-group"><div class="input-group"><div class="input-group-addon">Value</div>';
            input +='<input type="text" name="attribute['+btnid+'][value][]" class="form-control">';
            input +='<button type="button" class="valueplus input-group-addon btn" data-id="'+btnid+'"><i class="fas fa-plus"></i></button></div></div>';
            $(this).closest('.the-fieldset').append(input);
          })


      }catch{
          console.log('error')
      }
})(jQuery);
