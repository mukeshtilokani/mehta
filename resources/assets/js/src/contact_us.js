var Contact = function() {
	var handleValidation = function() {
		$('.js-contact-us-form').validate({
			ignore: [],
			errorClass: 'invalid-feedback animated fadeInDown',
            messages: {
            },
            rules: {
            	first_name: {
            		required: true
            	},
                last_name: {
                    required: true
                },                
            	email_address: {
            		required: true,
            		email: true
            	},
            	phone_number: {
            		required: true
            	},
            	city: {
            		required: true
            	},
            	state: {
            		required: true
            	},
                zip: {
                    required: true
                }                
            },
            errorPlacement: function(error, e){
                $(e).parent().append(error);
            },
            highlight: function(e) {
                $(e).closest('.form-group').removeClass('is-invalid').addClass('is-invalid');
            },
            unhighlight: function (e) {
                $(e).closest('.form-group').removeClass('is-invalid').removeClass('is-invalid');
            },
            submitHandler: function (form) {
                $('.js-contact-us-submit-btn').attr('disabled', 'true');
                $.ajax({
                    url: "/submit-inquiry",
                    method: 'POST',
                    data: $('.js-contact-us-form').serialize(),
                    success: function(response){
                        $('.js-contact-us-submit-btn').removeAttr('disabled');
                        $('input[type=text]').val('');
                        // $('.js-contact-us-form').hide();
                        $('.js-inquiry-success-message').show();
                    }
                });
            }
		});
	};
	return {
		init: function() {
			handleValidation();
		}
	}
}();

$(document).ready(function() {
	Contact.init();
});