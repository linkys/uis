jQuery(document).ready(function($) {

    $("[name=country]").easyAutocomplete({
        url: "/countries.json",
        getValue: "name",
        list: {
            match: {
                enabled: true
            },
            maxNumberOfElements: 8
        },
        template: {
            type: "custom",
            method: function(value, item) {
                return "<span class='flag flag-" + (item.code).toLowerCase() + "' ></span>" + value;
            }
        },
        theme: "square"
    });

    $('.register_form').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        var url = $(form).attr('action');

        $.post(url, {
            "username": $(form).find('[name=username]').val(),
            "email": $(form).find('[name=email]').val(),
            "phone": $(form).find('[name=phone]').val(),
            "country": $(form).find('[name=country]').val(),
            "confirmation": $(form).find('[name=confirmation]').is(':checked') ? 'on' : '',
            "action": $(form).find('[name=action]').val(),
            "_wpnonce": $(form).find('[name=_wpnonce]').val()
        }, function (data) {
            if(data.result){

                $(form).html('');
                $('.form-wrap').append('<p class="form-title">You have been successfully registered. Please wait for an operator.</p>');

            } else {
                if( data.errors !== undefined ) {
                    $.each(data.errors, function (i, item) {
                        $(form).find('[name='+ i +']').closest('.form-group').addClass('has-error').find('.error-message').text(item);
                    });
                }
            }
        });

    });

    $('.login_form').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        var url = $(form).attr('action');

        $.post(url, {
            "email": $(form).find('[name=email]').val(),
            "password": $(form).find('[name=password]').val(),
            "action": $(form).find('[name=action]').val(),
            "_wpnonce": $(form).find('[name=_wpnonce]').val()
        }, function (data) {
            if(data.result){
                location.href = data.redirect_url;
            } else {
                if( data.errors !== undefined ) {
                    $.each(data.errors, function (i, item) {
                        $(form).find('[name='+ i +']').closest('.form-group').addClass('has-error').find('.error-message').text(item);
                    });
                }
            }
        });

    });

    $('.register_form input, .login_form input').on('change, blur, keyup', function () {
        $(this).parent().removeClass('has-error');
    });

});