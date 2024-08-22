$(document).ready(function() {

	/* validate email ======================================= */
	$('#contact-form').submit(function() {
		var buttonCopy = $('#contact-form button').html(),
			errorMessage = $('#contact-form button').data('error-message'),
			sendingMessage = $('#contact-form button').data('sending-message'),
			okMessage = $('#contact-form button').data('ok-message'),
			hasError = false;
		$('#contact-form .error-message').remove();
		$('#contact-form .requiredField').each(function() {
			$(this).removeClass('inputError');
			if($.trim($(this).val()) == '') {
				var errorText = $(this).data('error-empty');
				$(this).parents('.controls').append('<span class="error-message" style="display:none;">'+errorText+'.</span>').find('.error-message').fadeIn('fast');
				$(this).addClass('inputError');
				hasError = true;
			} else if($(this).is("input[type='email']") || $(this).attr('name')==='email') {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailReg.test($.trim($(this).val()))) {
					var invalidEmail = $(this).data('error-invalid');
					$(this).parents('.controls').append('<span class="error-message" style="display:none;">'+invalidEmail+'.</span>').find('.error-message').fadeIn('fast');
					$(this).addClass('inputError');
					hasError = true;
				}
			}
		});
		if(hasError) {
			$('#contact-form button').html(errorMessage).addClass('btn-error');
			
			setTimeout(function(){
				$('#contact-form button').removeClass('btn-error').html(buttonCopy);
				
			},3000);
		}
		else {
			$('#contact-form button').html(sendingMessage);
			
			var formInput = $(this).serialize();
			var link = $(this).attr('action');	
			$.ajax({
				type: 'POST',	
				url: link,
				data: formInput
			}).done(function(data) {
			  $('#contact-form').trigger("reset");
			  $( this ).addClass( "done" );
			  $('#contact-form button').html(okMessage);
			  $('#alert-contact').show();

			  setTimeout(function(){
					$('#contact-form button').html(buttonCopy);
				},4000);
			})
			.fail(function() {
				$('#contact-form button').html('Save error');
    			setTimeout(function(){
					$('#contact-form button').html(buttonCopy);
				},4000);
  			});

		}
		return false;	
	});
});

