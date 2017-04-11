<?php get_header(); ?>

<section class="post">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php custom_breadcrumbs(); ?>
		<?php if ( get_previous_post() || get_next_post() ) : ?>
			<div class="post-nav">
				<?php if ( get_next_post() ) : ?>
					<div class="post-nav-link link-prev">
						<a href="<?= get_the_permalink(get_next_post()->ID); ?>">
							<i></i>
							<span class="post-nav-title">Следующий<br>проект</span>
						</a>
					</div>
				<?php endif; ?>
				<?php if ( get_previous_post() ) : ?>
					<div class="post-nav-link link-next">
						<a href="<?= get_the_permalink(get_previous_post()->ID); ?>">
							<i></i>
							<span class="post-nav-title">Предыдущий<br>проект</span>
						</a>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php get_template_part('template-parts/post/hero') ?>
		<h2 class="post-title"><span><?php the_title(); ?></span></h2>
		<?php if ( get_the_content() ) : ?>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>
		<?php get_template_part('template-parts/post/related-projects') ?>
	<?php endwhile; ?>
</section>

<?php get_template_part('template-parts/ajax/media') ?>

<?php get_footer(); ?>