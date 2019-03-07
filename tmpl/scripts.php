<script>
	<?php if( $params->get('captcha_req')==1 ) { ?>
	var RecaptchaOptions = { theme : "<?php echo $params->get('captcha_theme');?>"};
	<?php } ?>
	
	jQuery(function($)
	{
		var success = "<?php echo $params->get('success_notify'); ?>",
		error = "<?php echo $params->get('failure_notify'); ?>",
		recaptcha_error = "<?php echo $params->get('captcha_failure_notify'); ?>",
		id = "<?php echo $module->id; ?>",
		validator = $('#contact-form_<?php echo $module->id; ?>').validate({
			wrapper: "span",
			rules: {
				phone: {number: true},
				message: {minlength: "0"},
				email2: {
					required: true,
					equalTo: "#inputEmail_98"
				},
				provincia:{required: true},
				pais:{required:true},
				<?php if( $params->get('captcha_req')==1 ): ?>,
				recaptcha_response_field : {required : true}
				<?php endif; ?>
			},
			success: "has-success",
			messages: {
				name: "Completa tu nombre",
				email: "Completa tu email",
				email2:{
					required: "Repite tu email",
					equalTo: "Este email no coincide con el de arriba"
				},
				pais: "Completa país",
				provincia: "Completa provincia",
				menssage: "Escribe el mensaje"

			},
			errorPlacement: function(error, element) {
		error.insertBefore( element );	
    //error.insertBefore('input');
	
  },
			submitHandler: function(form) {
				$("#message_<?php echo $module->id; ?>")
				.removeClass("success")
				.removeClass("error")
				.addClass("loader")
				.html("Sending message")
				.fadeIn("slow");
				<?php if( $params->get('captcha_req')==1 ): ?>
				$(form).ajaxcaptcha(validator, success, error, recaptcha_error, id);
				<?php else: ?>
				$(form).ajaxsendmail(validator, success, id);
				<?php endif; ?>
				return false;
			}
		});
		<?php if($labels_pos): ?>
		$.support.placeholder = ('placeholder' in document.createElement('input'));
	
		<?php endif; ?>
		
		$('#clear_<?php echo $module->id; ?>').click(function(){
			$('#contact-form_<?php echo $module->id; ?>').trigger('reset');
			validator.resetForm();
			<?php if($labels_pos): ?>
			if (!$.support.placeholder) 
			{
				$('.mod_as_contact_form *[placeholder]').each(function(n){
				 $(this)
				.parent('.controls')
				.find('>.mod_as_contact_form_placeholder')
				.show(); 
				
			
				})
			}
			<?php endif; ?>
			<?php if( $params->get('captcha_req')==1 ): ?>
			Recaptcha.reload();
			<?php endif; ?>
			
			return false;
		})
		
		<?php if($labels_pos): ?>
		if (!$.support.placeholder) 
		{
			$('.mod_as_contact_form *[placeholder]').each(function(n){
				$(this)
				.attr('autocomplete','off')
				.addClass('ie_placeholder')
				.bind('keydown keyup click blur focus change paste cut', function(e){
					$(this).delay(10)
					.queue(function(n){
						if($(this).val() != ''){
							$(this)
							.parent('.controls')
							.find('>.mod_as_contact_form_placeholder')
							.hide();
						}
						else{
							$(this)
							.parent('.controls')
							.find('>.mod_as_contact_form_placeholder')
							.show();
							
						}
						
					});
				})
				.before('<label class="mod_as_contact_form_placeholder"/>')
				.parent('.controls')
				.addClass('ie_placeholder_controls')
				.find('>.mod_as_contact_form_placeholder')
				.attr('for',$(this).parent('.controls').find('>*[placeholder]').attr('id'))
				.text($(this).parent('.controls').find('>*[placeholder]').attr('placeholder'))
				.css({
					paddingTop: $(this).parent('.controls').find('>*[placeholder]').css('paddingTop'),
					paddingBottom: $(this).parent('.controls').find('>*[placeholder]').css('paddingBottom'),
					paddingLeft: $(this).parent('.controls').find('>*[placeholder]').css('paddingLeft'),
					paddingRight: $(this).parent('.controls').find('>*[placeholder]').css('paddingRight'),
					borderTopWidth: $(this).parent('.controls').find('>*[placeholder]').css('borderTopWidth'),
					borderBottomWidth: $(this).parent('.controls').find('>*[placeholder]').css('borderBottomWidth'),
					borderLeftWidth: $(this).parent('.controls').find('>*[placeholder]').css('borderLeftWidth'),
					borderRightWidth: $(this).parent('.controls').find('>*[placeholder]').css('borderRightWidth'),
					fontSize: $(this).parent('.controls').find('>*[placeholder]').css('fontSize'),
					color: $(this).parent('.controls').find('>*[placeholder]').css('color')
				})
			})
		}
		<?php endif; ?>
	})
</script>