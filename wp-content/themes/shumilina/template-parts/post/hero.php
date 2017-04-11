<?php
	$galleryArray = get_post_gallery_ids(get_the_ID());
	$thumb = get_the_post_thumbnail_url();
	$video = get_the_post_video();
	if ( $galleryArray ) {
?>
		<div class="hero" data-adminurl="<?= admin_url('admin-ajax.php'); ?>">
			<ul class="slides">
<?php if ($thumb): ?>
				<li data-thumb="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?>">
					<div class="slider-image" style="background-image: url('<?= $thumb ?>')" data-src="<?= $thumb ?>">
						<?php if ( get_the_post_thumbnail_caption() ) : ?>
							<p class="flex-caption"><?= get_the_post_thumbnail_caption(); ?></p>
						<?php endif; ?>
					</div>
				</li>
<?php endif; ?>
<?php
			foreach ( $galleryArray as $id ) {
				$att = wp_prepare_attachment_for_js($id);
?>
				<li data-thumb="<?= $att['sizes']['thumbnail']['url'] ?>">
					<div class="slider-image" style="background-image: url('<?= $att['url'] ?>')" data-src="<?= $att['url'] ?>"></div>
					<?php if ( $att['caption'] ) : ?>
						<p class="flex-caption"><?= $att['caption'] ?></p>
					<?php endif; ?>
				</li>
<?php } ?>
			</ul>
		</div>
<?php } else if ($video) { ?>
	<div class="hero">
		<div class="hero-video">
			<?= $video ?>
		</div>
	</div>
<?php } else if ($thumb) { ?>
	<div class="hero">
		<div class="hero-image" style="background-image: url('<?= $thumb ?>')" data-src="<?= $thumb ?>">
			<?php if ( get_the_post_thumbnail_caption() ) : ?>
				<p class="hero-image-caption"><?= get_the_post_thumbnail_caption(); ?></p>
			<?php endif; ?>
		</div>
	</div>
<?php } ?>
