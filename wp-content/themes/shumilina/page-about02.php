<?php /* Template Name: Обо мне, тип 2 */ ?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php if ( get_the_content() ) : ?>
		<section class="post post-columns">
			<div class="post-col col-one-third">
				<?php get_template_part('template-parts/post/hero') ?>
			</div>
			<div class="post-content post-col col-two-thirds">
				<?php the_content(); ?>
			</div>
		</section>
	<?php endif; ?>
<?php endwhile; ?>
<?php get_template_part('template-parts/milestones/list') ?>
<?php get_template_part('template-parts/tech/list') ?>
<div class="link-holder">
	<a href="/projects" class="btn">Мои проекты</a>
</div>

<?php get_template_part('template-parts/ajax/media') ?>

<?php get_footer(); ?>