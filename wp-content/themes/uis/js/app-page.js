jQuery(document).ready(function($) {

    $('select').selectric();

    $( ".datepicker" ).datepicker({ dateFormat: 'dd / mm / yy' });



    $('.file_upload').on('click' , function() {

        var wrapper = $(this),
            inp = wrapper.find( "input" ),
            btn = wrapper.find( ".button" ),
            lbl = wrapper.find( "mark" );

        // Crutches for the :focus style:
        inp.focus(function(){
            wrapper.addClass( "focus" );
        }).blur(function(){
            wrapper.removeClass( "focus" );
        });

        var file_api = ( window.File && window.FileReader && window.FileList && window.Blob ) ? true : false;

        inp.change(function(){
            var file_name;
            if( file_api && inp[ 0 ].files[ 0 ] )
                file_name = inp[ 0 ].files[ 0 ].name;
            else
                file_name = inp.val().replace( "C:\\fakepath\\", '' );

            if( ! file_name.length )
                return;

            if( lbl.is( ":visible" ) ){
                lbl.text( file_name );
                btn.text( "Choose file" );
            }else
                btn.text( file_name );
        }).change();
    });

    $('.next-tab-btn').on('click', function (e) {
        e.preventDefault();

        var form = $(this).closest('form');
        var url = $(form).attr('action');
        var formdata = form.serializeArray();
        var data = {};

        $(formdata ).each(function(index, obj){
            data[obj.name] = obj.value;
        });

        $.post(url, data, function (data) {
            if(data.result){
                alert('save!');
            } else {
                if( data.errors !== undefined ) {

                    $(form).find('.app-col').each(function () {
                        $(this).removeClass('has-error');
                    });

                    $.each(data.errors, function (i, item) {
                        $(form).find('[name='+ i +']').closest('.app-col').find('.error-message').remove();
                        $('<p class="error-message"></p>').insertAfter($(form).find('[name='+ i +']'));
                        $(form).find('[name='+ i +']').closest('.app-col').addClass('has-error').find('.error-message').text(item);
                    });
                }
            }
        });

    });

    $('input, input').on('change, blur, keyup', function () {
        $(this).closest('.app-col').removeClass('has-error');
    });

});