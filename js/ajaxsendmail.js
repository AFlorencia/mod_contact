;(function($){
	$.fn.ajaxsendmail = function(validator, success, id){
        var form = $(this),
		value   = form.serializeArray(),
        request = {
            'option' : 'com_ajax',
            'module' : 'as_contact_form',
            'data'   : value,
            'format' : 'raw'
        };
		$.ajax({
            type   : 'POST',
            data   : request,
            beforeSend: function(){
                $("#message_"+id)
                .addClass("loader")
                .removeClass("error")
                .removeClass("success")
            },
            success: function (response) {
				//	console.log(value);
                switch(response) {
                    case success:
                        $("#message_"+id).
                        removeClass("loader").
                        removeClass("error").
                        addClass("success")
                        .html(response);
						
						
	$('fieldset').hide();
		console.log('borrar');
		
						
						
                   /*      .delay(4000)
                        .queue(function(n){
                            $(this)
                            .html('&nbsp;')
                            .removeClass("success");
                            n();
                        }); */
                        $('#contact-form_'+ id).trigger('reset');
                        validator.resetForm();
                        if (!$.support.placeholder) {
                            $('.mod_as_contact_form *[placeholder]').each(function(n){
                                $(this).parent().parent().hide();
                            })
                        }
						
                        break;
                    default:
                        $("#message_"+id)
                        .removeClass("loader")
                        .removeClass("success")
                        .addClass("has-error")
                        .html(response)
                        .delay(4000)
                        .queue(function(n){
                            $(this)
                            .html('')
                            .removeClass("text-danger");
                            n();
                        });  
                        break;
                }
            }
        });
	}
})(jQuery);