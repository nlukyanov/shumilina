<?php

	$currentPost = get_the_ID();

	$args = array(
		'post_type'			=>	'projects',
		'orderby'			=>	'rand',
		'status'			=>	'publish',
		'posts_per_page'	=>	3,
		'post__not_in'		=>	array(intval($currentPost))
	);

	$query = new WP_Query($args);

	$posts = $query->posts;

	if ( $posts && sizeof($posts) >= 3 ) :
?>
		<div class="projects-list related-block">
			<h2 class="related-heading"><span>Другие проекты</span></h2>
<?php
			foreach ( $posts as $post ) :
?>

				<div class="project-item">
					<a href="<?= get_post_permalink($post->ID) ?>" class="project-link">
						<div class="project-img-holder">
							<div class="project-img" style="background-image: url('<?= get_the_post_thumbnail_url($post->ID); ?>')">
								<div class="project-img-frame"></div>
							</div>
						</div>
						<div class="project-title"><?= $post->post_title ?></div>
					</a>
				</div>

<?php
			endforeach;
?>
		</div>
<?php
	endif;

	$query->wp_reset_postdata();

?>