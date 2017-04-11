<?php

	$args = array(
		'post_type'	=>	'milestones',
		'status'	=>	'publish'
	);

	$query = new WP_Query($args);

	$milestones = $query->posts;

	if ( $milestones ) :
?>
	<div class="milestones-list-holder">
		<div class="milestones-list">
<?php
			foreach ( $milestones as $milestone ) :
?>

				<div class="milestone-item">
					<?php if ( $milestone->post_title ) : ?>
						<h2 class="milestone-title"><?= $milestone->post_title ?></h2>
					<?php endif; ?>
					<?php if ( $milestone->post_content ) : ?>
						<div class="post">
							<div class="post-content">
								<?= $milestone->post_content ?>
							</div>
						</div>
					<?php endif; ?>
				</div>

<?php
			endforeach;
?>
		</div>
	</div>
<?php
	endif;

	$query->reset_postdata();

?>