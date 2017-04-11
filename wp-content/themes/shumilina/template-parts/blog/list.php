<?php

	$args = array(
		'post_type'			=>	'post',
		'status'			=>	'publish',
		'posts_per_page'	=>	2,
		'orderby'			=>	'rand'
	);

	$query = new WP_Query($args);

	$posts = $query->posts;

	if ( $posts ) :
?>
		<h2 class="page-title"><span>Блог</span></h2>
		<div class="posts-list post-columns">
<?php
			foreach ( $posts as $post ) :
?>
			<div class="post-item col-half-width">
				<div class="post">
					<?php if ( get_the_post_thumbnail_url($post->ID) ) : ?>
						<div class="post-img" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID); ?>')">
							<a href="<?= get_the_permalink($post->ID); ?>"></a>
						</div>
					<?php endif; ?>
					<div class="post-title">
						<?= $post->post_title; ?>
					</div>
					<div class="post-content">
						<p>
							<?= $post->post_content; ?>
						</p>
					</div>
					<div class="post-link-holder">
						<a href="<?= get_the_permalink($post->ID); ?>" class="post-link">Читать полностью</a>
					</div>
				</div>
			</div>
<?php
			endforeach;
?>
		</div>
		<div class="link-holder" style="margin-bottom: 40px;">
			<a href="/blog" class="btn">Все записи</a>
		</div>
<?php
	endif;

	$query->reset_postdata();

?>