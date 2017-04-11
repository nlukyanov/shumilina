<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('title'); ?><?php wp_title(' | '); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- FAVICONS start -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri(); ?>/images/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri(); ?>/images/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri(); ?>/images/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri(); ?>/images/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri(); ?>/images/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri(); ?>/images/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri(); ?>/images/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri(); ?>/images/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/images/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?= get_template_directory_uri(); ?>/images/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri(); ?>/images/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?= get_template_directory_uri(); ?>/images/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- FAVICONS end -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<a href="#" class="btn-nav no-loading">
		<span></span>
		<span></span>
		<span></span>
	</a>
	<div class="nav-mobile">
		<div class="nav-mobile-heading">Меню</div>
		<?php wp_nav_menu(array('theme_location' => 'main_left', 'menu_class' => 'main-nav')); ?>
		<?php wp_nav_menu(array('theme_location' => 'main_right', 'menu_class' => 'main-nav')); ?>
	</div>
	<?php if ( is_user_logged_in() ) : ?>
		<a href="/messages" class="messages-link" title="Мои сообщения">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve"><path d="M28,5H4C1.791,5,0,6.792,0,9v13c0,2.209,1.791,4,4,4h24c2.209,0,4-1.791,4-4V9  C32,6.792,30.209,5,28,5z M2,10.25l6.999,5.25L2,20.75V10.25z M30,22c0,1.104-0.898,2-2,2H4c-1.103,0-2-0.896-2-2l7.832-5.875  l4.368,3.277c0.533,0.398,1.166,0.6,1.8,0.6c0.633,0,1.266-0.201,1.799-0.6l4.369-3.277L30,22L30,22z M30,20.75l-7-5.25l7-5.25  V20.75z M17.199,18.602c-0.349,0.262-0.763,0.4-1.199,0.4c-0.436,0-0.851-0.139-1.2-0.4L10.665,15.5l-0.833-0.625L2,9.001V9  c0-1.103,0.897-2,2-2h24c1.102,0,2,0.897,2,2L17.199,18.602z" id="mail"/></svg>
			<?php $count = wp_count_posts('messages'); if ( $count->unread && $count->unread > 0 ) : ?>
				<span><?= $count->unread ?></span>
			<?php endif; ?>
		</a>
		<a href="/wp-admin" class="dashboard-link no-loading" target="_blank" title="Панель управления">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve"><g><path d="M16,30c-3.74,0-7.255-1.456-9.899-4.101C1.779,21.578,0.752,15.025,3.547,9.595C3.8,9.104,4.402,8.911,4.894,9.163   s0.685,0.855,0.432,1.347C2.93,15.164,3.81,20.78,7.515,24.485C9.781,26.752,12.794,28,16,28c3.205,0,6.219-1.248,8.485-3.515   S28,19.205,28,16c0-3.206-1.248-6.219-3.515-8.485S19.206,4,16,4c-3.206,0-6.219,1.249-8.485,3.515   c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414C8.745,3.457,12.26,2,16,2c3.74,0,7.256,1.457,9.899,4.101   C28.544,8.745,30,12.26,30,16c0,3.739-1.456,7.255-4.101,9.899C23.256,28.544,19.74,30,16,30z"/></g><g><path d="M16,20c-1.068,0-2.073-0.416-2.829-1.172c-1.56-1.56-1.56-4.097,0-5.656c1.257-1.257,7.272-3.639,8.465-4.104   c0.371-0.144,0.79-0.056,1.07,0.225s0.369,0.7,0.225,1.07c-0.465,1.193-2.847,7.209-4.104,8.465C18.073,19.584,17.068,20,16,20z    M20.188,11.813c-2.453,1.028-5.064,2.235-5.602,2.773c-0.78,0.78-0.78,2.048,0,2.828c0.756,0.756,2.073,0.756,2.829,0   C17.952,16.875,19.16,14.266,20.188,11.813z"/></g></svg>
		</a>
	<?php endif; ?>
	<div class="nav-holder">
		<div class="nav-item nav-left">
			<?php wp_nav_menu(array('theme_location' => 'main_left', 'menu_class' => 'main-nav')); ?>
		</div>
		<div class="nav-item nav-center">
			<div class="avatar" style="background-image: url('<?= get_avatar_url('julia-shumilina@gmail.com', array('size' => 200)); ?>')"></div>
		</div>
		<div class="nav-item nav-right">
			<?php wp_nav_menu(array('theme_location' => 'main_right', 'menu_class' => 'main-nav')); ?>
		</div>
	</div>
	<div class="header-inner">
		<div class="header-inner-frame">
			<div class="header-inner-block">
				<div class="site-title">
					<?php bloginfo('title'); ?>
				</div>
				<div class="site-description-holder">
					<div class="site-description">
						<div class="site-description-lines lines-left">
							<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span>
						</div>
						<?php bloginfo('description'); ?>
						<div class="site-description-lines lines-right">
							<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="wrapper">
	<div class="wrapper-inner">
		<div class="wrapper-frame">
			<div class="wrapper-block">
				<div class="page">
			
