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

            var FR= new FileReader();

            FR.addEventListener("load", function(e) {

                $('[name='+inp.attr('name')+'-file]').val(e.target.result);

            });

            FR.readAsDataURL( this.files[0] );

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

        $(form).find('.hidden-file').each(function (index, obj) {
            data[$(obj).attr('name')] = $(obj).val();
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
                        $(form).find('[name="'+ i +'"]').closest('.app-col').find('.error-message').remove();
                        $('<p class="error-message"></p>').insertAfter($(form).find('[name="'+ i +'"]'));
                        $(form).find('[name="'+ i +'"]').closest('.app-col').addClass('has-error').find('.error-message').text(item);
                    });
                }
            }
        });

    });

    $('input, input').on('change, blur, keyup', function () {
        $(this).closest('.app-col').removeClass('has-error');
    });

    $('[name=jobsCount]').on('change', function (e) {

        var changeToCurrent = $(this).val();

        $('.job-description .app-row').show().each(function (i) {
            if(i >= changeToCurrent) {
                $(this).hide();
            }
        });

    });

    $('[name=children]').on('change', function (e) {

        var changeToCurrent = $(this).val();

        $('.depends-holder .app-row').show().each(function (i) {
            if(i >= changeToCurrent) {
                $(this).hide();
            }
        });

    });

});