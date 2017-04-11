<?php

	$args = array(
		'post_type'	=>	'tech',
		'status'	=>	'publish'
	);

	$query = new WP_Query($args);

	$techs = $query->posts;

	if ( $techs ) :
?>
		<h2 class="page-title"><span>Технологии</span></h2>
		<div class="tech-list">
<?php
			foreach ( $techs as $tech ) :
?>

				<div class="tech-item">
					<?php if ( get_the_post_thumbnail_url($tech->ID) ) : ?>
						<div class="tech-image-holder">
							<div class="tech-image" style="background-image: url('<?= get_the_post_thumbnail_url($tech->ID) ?>')"></div>
						</div>
					<?php endif; ?>
					<?php if ( $tech->post_title ) : ?>
						<h2 class="tech-title"><?= $tech->post_title ?></h2>
					<?php endif; ?>
					<?php if ( $tech->post_content ) : ?>
						<div class="post">
							<div class="post-content">
								<?= $tech->post_content ?>
							</div>
						</div>
					<?php endif; ?>
				</div>

<?php
			endforeach;
?>
		</div>
<?php
	endif;

	$query->reset_postdata();

?>