$(document).ready(function(){
    var max_fields      = 4;
    var wrapper         = $(".option-continer");
    $('.UpdateProductForm').validate();
    var x = $('.list-counter').val(),
        y = parseInt($('.list-counter').val()) + 1;
     $('.option-column').on('click','.update-one-more',function(e){
         e.preventDefault();
       if(x < max_fields){
            x++;
            $(wrapper).append('<div class="option-holder"><hr>'+
               '<div class="row col-md-12">'+
                    '<a class="remove_field pull-right" style="margin-bottom:3px;">'+
                    '<span class="glyphicon glyphicon-remove" style="font-size:10px;"></span></a>'+
                '</div>'+
                '<div class ="each-option">'+
                '<div class="row app-row">'+
                    '<div class="col-md-12">'+
                        '<h5 style="background-color: #5F9D35;padding: 10px;color: #fff;font-weight: bolder;">Option: '+ x +'</h5>'+
                    '</div>'+
                '</div>'+
                '<div class="row app-row">'+   
                    '<div class="col-md-4">'+
                        '<label>Option Name:</label>'+
                    '</div>'+
                    '<div class="col-md-8">'+
                        '<input type="hidden" name="option_id['+ y +']" value="0">'+
                        '<input type="hidden" name="price_id['+ y +']" value="0">'+
                        '<input type="text" class="form-control required" name="option_name['+ y +']" placeholder="Option Name">'+
                    '</div>'+
                '</div>'+
                '<div class="row app-row">'+   
                    '<div class="col-md-4">'+
                        '<label>Option Desc:</label>'+
                    '</div>'+
                    '<div class="col-md-8">'+
                        '<textarea class="form-control required" rows="4" wrap="physical" name="option-desc['+ y +']"></textarea>'+
                     '</div>'+
                '</div>'+
                '<div class="row app-row">'+   
                    '<div class="col-md-4">'+
                        '<label>Purchased On:</label>'+
                    '</div>'+
                    '<div class="col-md-8">'+
                        '<input type="text" class="form-control required datepicker" name="purchasedon['+ y +']" placeholder="Purchased On">'+
                     '</div>'+
                '</div>'+
                '<div class="row app-row">'+   
                    '<div class="col-md-4">'+
                        '<label>Batch No, Lot No:</label>'+
                    '</div>'+
                    '<div class="col-md-8">'+
                        '<div class="row app-row">'+
                            '<div class="col-md-6 row-margin-right">'+
                                '<input type="text" class="form-control required" name="batchno['+ y +']" placeholder="Batch No.">'+
                            '</div>'+
                            '<div class="col-md-6 row-margin-right">'+
                                '<input type="text" class="form-control required" name="lotno['+ y +']" placeholder="Lot No.">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="row app-row">   '+
                    '<div class="col-md-4"><label>Date:</label></div>'+
                    '<div class="col-md-8">'+
                        '<div class="row app-row">'+
                        '<div class="col-md-6 row-margin-right">'+
                            '<input type="text" name="manufacture-date['+ y +']" class="datepicker form-control required" placeholder="Manufactured Date">'+
                        '</div>'+
                        '<div class="col-md-6 row-margin-left">'+
                            '<input type="text" name="expiry-date['+ y +']" class="datepicker form-control required" placeholder="Expiry Date">'+
                        '</div>'+
                        '</div>'+
                    '</div>'+
                '</div> '+
               ' <div class="row app-row">'+
                    '<div class="col-md-4">'+
                        '<label>Prices:</label>'+
                    '</div>'+
                    '<div class="col-md-8">'+
                        '<div class="row app-row">'+
                            '<div class="col-md-4 row-margin-right">'+
                                '<input type="text" name="cp['+ y +']" class="form-control required" placeholder="Cost Price">'+
                            '</div>'+
                            '<div class="col-md-4 row-margin-right row-margin-left">'+
                                '<input type="text" name="sp['+ y +']" class="form-control required" placeholder="Selling Price">'+
                            '</div>'+
                            '<div class="col-md-4 row-margin-left">'+
                                '<input type="text" name="mp['+ y +']" class="form-control required" placeholder="Market Price">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '</div></div>');
                if(x == 4){
                    $(this).addClass('none');
                }
                y++;  
                $('.datepicker').datepicker({ format: "yyyy-mm-dd" }).on('changeDate', function(ev){
                    $(this).datepicker('hide');
                });  
        }
    });
    $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault();
        var thissel = $(this).parent();
        thissel.prev('hr').remove();
        thissel.next('.each-option').remove();        
        thissel.remove();
        x--;
        $('.update-one-more').removeClass('none');
    });
});
