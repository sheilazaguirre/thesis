jQuery(function($) {
    $('#contactform').validate({
        rules: {
      name: {
                required: true,
                minlength: 2
            },


      email: {
                required: true,
                email: true
            },


        },
        messages: {

            name: {
                required: "Please enter your name",
                minlength: "Your name must consist of at least 2 characters"
            },

        email: {
                required: "Please enter your email"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"external/form/contact-form.php",
                success: function() {
                      $('#success').fadeIn();
            $( '#contactform' ).each(function(){this.reset();});
                },
                error: function() {
                    $('#contactform').fadeTo( "slow", 0, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});