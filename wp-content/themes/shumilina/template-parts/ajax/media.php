<script>
	jQuery(function($) {
		function ajax_load_media(link) {
			var link = link;

			$('body').addClass('isModal');
			$('.modal').show();
			$modal = $('.modal-content');

			$.ajax({
				type: 'POST',
				url: '<?= admin_url('admin-ajax.php'); ?>',
				data: {
					'media_link': link,
					'action': 'getMedia'
				},
				success: function (media) {
					var media = JSON.parse(media),
						$desc = '';

					if ( media.desc ) {
						$desc = '<div class="modal-image-caption">' + media.desc + '</div>';
					}

					$html = '<div class="modal-image-holder">' +
								'<img class="modal-image" src="' + media.url + '" alt="' + media.desc + '">' +
								$desc +
							'</div>';

					$('.modal-close').show();
					$modal.html($html);
				},
				error: function () {
					$('body').removeClass('isModal');
					$('.modal').hide();
					$('.modal-close').hide();
				}
			});
		}

		$('.slider-image, .hero-image').on('click', function() {
			ajax_load_media($(this).data('src'));
		});

		$('.post img').on('click', function(e) {
			e.preventDefault();

			if ( $(this).parent('a').length ) {
				ajax_load_media($(this).parent('a').attr('href'));
			}
			else {
				ajax_load_media($(this).attr('src'));
			}
		});
	});
</script>
