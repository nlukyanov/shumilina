jQuery(function($) {

	$('.modal-content').on('click', function(e) {
		e.stopPropagation();
	});
	$('.modal-frame').on('click', function(e) {
		$('body').removeClass('isModal');
		$('.modal').hide();
		$('.modal-content').empty();
		$('.modal-close').hide();
	});

});