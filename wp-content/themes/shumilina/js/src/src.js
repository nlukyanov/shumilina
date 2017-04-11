jQuery(function($) {

	// === Back To Top

	$('.back-to-top').on('click', function(e) {
		e.preventDefault();

		$('html, body').animate({scrollTop: 0}, 500, function() {
			$('.back-to-top').trigger('blur');
		});
	});

	$(window).on('scroll', function() {
		if ( $(window).scrollTop() >= 200 ) {
			$('.back-to-top').fadeIn(250);
		}
		else {
			$('.back-to-top').fadeOut(250);
		}
	});

	// === Forms validation
	$('.contact-form').on('submit', function(e) {
		var isValid = true;

		$('.required').each(function(i, item) {
			if ( !$(item).val().trim() ) {
				isValid = false;
				$(item).parent('.form-row').append('<p class="error">Это обязательное поле</p>');
				$(item).parent('.form-row').addClass('has-error');
			}
		});

        var response = grecaptcha.getResponse();
        if ( response.length === 0 ) {
            $('.g-recaptcha').after('<span class="error">Пожалуйста, подтвердите, что вы не робот</span>');
            isValid = false;
        }

		if ( !isValid ) {
			e.preventDefault();
		}
		else {
			$('body').addClass('isModal');
			$('.modal').show();
		}
	});

	$('.required').on('change', function(e) {
		if ( $(this).val().trim() ) {
			$(this).parent('.form-row').find('.error').remove();
			$(this).parent('.form-row').removeClass('has-error');
		}
	});

	$('.message-title').each(function(i, item) {
		var user = $(item).text();

		user = user.split(', Email:').join('<br>Email:');
		user = user.split('Имя:').join('<span>Имя:</span>');
		user = user.split('Email:').join('<span>Email:</span>');

		$(item).html(user);
	});

	$('.read-form').on('submit', function(e) {
		$('body').addClass('isModal');
		$('.modal').show();
	});

	$('.remove-form').on('submit', function(e) {
		if ( confirm('Вы уверенны, что хотите безвозвратно удалить это сообщение?') ) {
			$('body').addClass('isModal');
			$('.modal').show();
		}
		else {
			e.preventDefault();
		}
	});

	$('a:not(.no-loading)').on('click', function() {
		$('body').addClass('isModal');
		$('.modal').show();
		$('.btn-nav').removeClass('active');
		$('.nav-mobile').removeClass('active');
	});

	// === Mobile nav animation
	$('.btn-nav').on('click', function(e) {
		e.preventDefault();
		$(this).toggleClass('active');
		$('.nav-mobile').toggleClass('active');
	});

});