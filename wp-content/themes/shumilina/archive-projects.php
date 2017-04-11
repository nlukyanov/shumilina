<?php get_header(); ?>

<h2 class="page-title"><span>Проекты</span></h2>
<?php
	if ( have_posts() ) :
?>
	<ul class="projects-list">
<?php
		while ( have_posts() ) : the_post();
?>
			<li class='project-item'>
				<a href="<?php the_permalink(); ?>" class="project-link">
					<div class="project-img-holder">
						<div class="project-img" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>')">
							<div class="project-img-frame"></div>
						</div>
					</div>
					<div class="project-title"><?php the_title(); ?></div>
				</a>
			</li>
<?php
		endwhile;
?>
	</ul>
<?php
	else :
		get_template_part('template-parts/post/content', 'none');
	endif;
?>

<?php get_footer(); ?>
