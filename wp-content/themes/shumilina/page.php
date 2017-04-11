<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php if ( get_the_content() ) : ?>
		<section class="post">
			<?php get_template_part('template-parts/post/hero') ?>
			<h2 class="post-title"><span><?php the_title(); ?></span></h2>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</section>
	<?php else : ?>
		<?php get_template_part('template-parts/post/content02') ?>
	<?php endif; ?>
<?php endwhile; ?>

<?php get_template_part('template-parts/ajax/media') ?>

<?php get_footer(); ?>