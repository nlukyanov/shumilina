<?php

	$args = array(
		'post_type'			=>	'projects',
		'status'			=>	'all',
		'posts_per_page'	=>	10
	);

	$query = new WP_Query($args);

	$projects = $query->posts;

	if ( $projects ) :
?>
		<div class="home-projects-list-holder">
			<h2 class="page-title"><span>Проекты</span></h2>
			<div class="home-projects-list">
<?php
			foreach ( $projects as $key=>$project ) :
?>

				<div class="home-project-item item-<?= $key + 1 ?><?= ($project->post_status == 'publish') ? ' has-link' : '' ?>">
					<?php if ( $project->post_status == 'publish' ) : ?>
						<a href="<?= get_the_permalink($project->ID); ?>" class="home-project-link">
					<?php endif; ?>
							<?php if ( get_the_post_thumbnail_url($project->ID) ) : ?>
								<div class="home-project-image-holder">
									<div class="home-project-image" style="background-image: url('<?= get_the_post_thumbnail_url($project->ID) ?>')"></div>
									<div class="home-project-image-frame"></div>
								</div>
							<?php else : ?>
								<div class="home-project-image-holder">
									<div class="home-project-image-frame"></div>
								</div>
							<?php endif; ?>
							<?php if ( $project->post_title ) : ?>
								<h2 class="home-project-title"><?= $project->post_title ?></h2>
							<?php endif; ?>
					<?php if ( $project->post_status == 'publish' ) : ?>
						</a>
					<?php endif; ?>
				</div>

<?php
			endforeach;
?>
			<?php if ( sizeof($projects) < 10 ) : ?>
				<?php $i = sizeof($projects) ?>
				<?php while ( $i <= 9 ) : ?>
					<div class="home-project-item item-<?= $i + 1 ?>">
						<div class="no-link">
							<div class="home-project-image-holder">
								<div class="home-project-image-frame"></div>
							</div>
						</div>
					</div>
				<?php $i++; endwhile; ?>
			<?php endif; ?>
			</div>
			<div class="link-holder">
				<a href="/projects" class="btn btn-inverted">Все проекты</a>
			</div>
		</div>
<?php
	endif;

	$query->reset_postdata();

?>