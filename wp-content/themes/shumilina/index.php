<?php get_header(); ?>

<h2 class="page-title"><span>Блог</span></h2>
<?php
	if ( have_posts() ) :
?>
	<ul class="posts-list">
<?php
		while ( have_posts() ) : the_post();
?>
			<li class="post-item">
				<div class="post-date">
					<div class="date"><?= get_the_date('d', get_the_ID()); ?></div>
					<div class="month-year"><?= get_the_date('M Y', get_the_ID()); ?></div>
				</div>
				<div class="post">
					<?php if ( get_the_post_thumbnail_url() ) : ?>
						<div class="post-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
							<a href="<?php the_permalink(); ?>"></a>
						</div>
					<?php endif; ?>
					<div class="post-title">
						<?php the_title(); ?>
					</div>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
					<div class="post-link-holder">
						<a href="<?php the_permalink(); ?>" class="post-link">Читать полностью</a>
					</div>
				</div>
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
