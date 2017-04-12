<?php get_header(); ?>

<section class="post">
	<?php while ( have_posts() ) : the_post(); ?>
		<ul id="breadcrumbs" class="breadcrumbs">
			<li class="item-home">
				<a class="bread-link bread-home" href="http://shumilina.design/" title="Главная">Главная</a>
			</li>
			<li class="separator separator-home"> • </li>
			<li class="item-cat item-custom-post-type-blog">
				<a class="bread-cat bread-custom-post-type-blog" href="http://shumilina.design/blog/" title="Блог">Блог</a>
			</li>
			<li class="separator"> • </li>
			<li class="item-current item-45">
				<strong class="bread-current bread-45" title="Проект с видео"><?php the_title(); ?></strong>
			</li>
		</ul>
		<div class="post-item">
			<div class="post-date">
				<?= get_the_date('d M Y'); ?>
			</div>
			<div class="post-inner">
				<?php if ( get_previous_post() || get_next_post() ) : ?>
					<div class="post-nav">
						<?php if ( get_next_post() ) : ?>
							<div class="post-nav-link link-prev">
								<a href="<?= get_the_permalink(get_next_post()->ID); ?>">
									<i></i>
									<span class="post-nav-title">Следующая<br>запись</span>
								</a>
							</div>
						<?php endif; ?>
						<?php if ( get_previous_post() ) : ?>
							<div class="post-nav-link link-next">
								<a href="<?= get_the_permalink(get_previous_post()->ID); ?>">
									<i></i>
									<span class="post-nav-title">Предыдущая<br>запись</span>
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
			</div>
		</div>
	<?php endwhile; ?>
</section>

<?php get_template_part('template-parts/ajax/media') ?>

<?php get_footer(); ?>