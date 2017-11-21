jQuery(document).ready(function($) {

	var windowWidth = $(window).width();

	//выпадающий список
	$('.select-option_selected').click(function(){
		$(this).parents('.select').find('.select-list').slideToggle('slow');
	});

	$('.select-list .select-option').click(function(){
		var text = $(this).text();
		$(this).parents('.select').find('.select-option_selected').text(text);
		$(this).parents('.select-list').slideUp('slow');
	});

	$(function(){
		$(document).click(function(event) {
			if ($(event.target).closest(".select").length) return;
			$(".select-list").slideUp("slow");
			event.stopPropagation();
		});
	});
	//выпадающий список////////////////////////////////

	//tabs on JS
	$('.tab-toggle').on('click' , function() {

		$(this).parents('.tabs-header').find('.tab-toggle_active').removeClass('tab-toggle_active');
		$(this).addClass('tab-toggle_active');

		var dataTab = $(this).attr("data-tab");

		$(this).parents('.tabs-wrapper').find(".tab-content[data-tab]").removeClass('tab-content_active');
		$(this).parents('.tabs-wrapper').find(".tab-content[data-tab='"+dataTab+"']").addClass('tab-content_active');

		return false;
	});
	//tabs on JS///////////////////////////////////////

	//popup////////////////////////////////////////////
	$('.js-show-popup').on('click' , function() {
		var dataPopup = $(this).attr("data-popup");

		$(".popup-overlay[data-popup='"+dataPopup+"']").fadeIn('500');

		var parentHeight = $('.popup-centering').height();
		var childrenHeight = $('.popup').height();

		if (childrenHeight >= parentHeight) {
			$('.popup').addClass('popup-scrollable');
		} else {
			$('.popup').removeClass('popup-scrollable');
		}

		$(window).resize(function(event) {
			var parentHeight = $('.popup-centering').height();

			var childrenHeight = $('.popup').height();

			if (childrenHeight >= parentHeight) {
				$('.popup').addClass('popup-scrollable');
			} else {
				$('.popup').removeClass('popup-scrollable');
			}
		});
	});

	$('.js-close-popup').on('click' , function() {
		$('.popup-overlay').fadeOut('500');
	});
	//popup////////////////////////////////////////////

	if(windowWidth < 992) {
		var headerHeight = $('.header').height();
		$('.wrapper').css('paddingTop' , headerHeight);

		$(window).resize(function () {
			var headerHeight = $('.header').height();
			$('.wrapper').css('paddingTop' , headerHeight);
		})
	}
	

	$('.slider').slick({
		dots : true,
		arrows: true,
		autoplay : false,
		prevArrow : '<button type="button" class="slick-prev">&nbsp;</button>',
		nextArrow : '<button type="button" class="slick-next">&nbsp;</button>'
	});

	
	$('.mobile-icon').on('click' , function () {
		$(this).toggleClass('open');
		$('.header-nav').toggleClass('open');
	})


	$(window).on('load resize', function() {
		if(windowWidth >= 577) {
			var maxExpressHeight = 0;
			var maxTitleHeight = 0;

			$('.express-title').each(function () {
				var expressTitleHeight = $(this).height();
				if(expressTitleHeight > maxTitleHeight) {
				  maxTitleHeight = expressTitleHeight;
				};
			});
			$('.express-title').height(maxTitleHeight);

			$('.express-descr').each(function () {
				var expressHeight = $(this).height();
				if(expressHeight > maxExpressHeight) {
				  maxExpressHeight = expressHeight;
				};
			});
			$('.express-descr').height(0);

			$('.js-show-text').on('click' , function() {
				$(this).parents('.express-item')
					   .addClass('open')
					   .find('.express-descr')
					   .height(maxExpressHeight);
				return false;
			});

			var maxVisaTitleHeight = 0;

			$('.visa-title').each(function () {
				var visaTitleHeight = $(this).height();
				if(visaTitleHeight > maxVisaTitleHeight) {
				  maxVisaTitleHeight = visaTitleHeight;
				};
			});
			$('.visa-title').height(maxVisaTitleHeight);
		}
	});


	/*var equalHeight = function(equalHeightParent , equalHeightChild) {
		$(equalHeightParent).each(function () {
			var container = $(this);
			var mh = 0;
			container.children(equalHeightChild).each(function () {
			   $(this).height('auto');
			   var h_block = parseInt($(this).height());
			   if(h_block > mh) {
				  mh = h_block;
			   };
			});
			container.children(equalHeightChild).height(mh);
		})
	}

	$(window).on('load resize', equalHeight(".visa-row" , ".visa-col"));
	$(window).on('load resize', equalHeight(".quickfact-list" , ".quickfact-col"));*/

	//blocks with equal height/////////////////////////
	$(window).on('load resize', function() {
		$(".quickfact-list").each(function () {
			var container = $(this);
			var mh = 0;
			container.children('.quickfact-col').each(function () {
			   $(this).height('auto');
			   var h_block = parseInt($(this).height());
			   if(h_block > mh) {
				  mh = h_block;
			   };
			});
			container.children('.quickfact-col').height(mh);
		})
	});
	//blocks with equal height/////////////////////////

	//blocks with equal height/////////////////////////
	$(window).on('load resize', function() {
		$(".visa-row").each(function () {
			var container = $(this);
			var mh = 0;
			container.children('.visa-col').each(function () {
			   $(this).height('auto');
			   var h_block = parseInt($(this).height());
			   if(h_block > mh) {
				  mh = h_block;
			   };
			});
			container.children('.visa-col').height(mh);
		})
	});
	//blocks with equal height/////////////////////////

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