<?php
	add_theme_support( 'post-thumbnails' );

	// Register Custom Post Type
	function register_projects() {

		$labels = array(
			'name'                  => 'Проекты',
			'singular_name'         => 'Проект',
			'menu_name'             => 'Проекты',
			'name_admin_bar'        => 'Проекты',
			'archives'              => 'Архив проектов',
			'attributes'            => 'Атрибуты проекта',
			'parent_item_colon'     => 'Родительский проект:',
			'all_items'             => 'Все проекты',
			'add_new_item'          => 'Добавить проект',
			'add_new'               => 'Добавить проект',
			'new_item'              => 'Новый проект',
			'edit_item'             => 'Редактировать проект',
			'update_item'           => 'Обновить проект',
			'view_item'             => 'Посмотреть проект',
			'view_items'            => 'Посмотреть проекты',
			'search_items'          => 'Найти проект',
			'not_found'             => 'Проект не найден',
			'not_found_in_trash'    => 'Проект не найден в удаленных',
			'featured_image'        => 'Главное изображение проекта',
			'set_featured_image'    => 'Добавить главное изображение проекта',
			'remove_featured_image' => 'Удалить главное изображение проекта',
			'use_featured_image'    => 'Использовать как главное изображение проекта',
			'insert_into_item'      => 'Вставить в проект',
			'uploaded_to_this_item' => 'Загрузить в этот проект',
			'items_list'            => 'Список проектов',
			'items_list_navigation' => 'Навигация по списку проектов',
			'filter_items_list'     => 'Фильтровать проекты',
		);
		$args = array(
			'label'                 => 'Проект',
			'description'           => 'Проекты',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-admin-multisite',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'projects', $args );

	}
	add_action( 'init', 'register_projects', 0 );

	function register_milestones() {

		$labels = array(
			'name'                  => 'Вехи',
			'singular_name'         => 'Веха',
			'menu_name'             => 'Вехи',
			'name_admin_bar'        => 'Вехи',
			'archives'              => 'Архив вех',
			'attributes'            => 'Атрибуты вехи',
			'parent_item_colon'     => 'Родительская веха:',
			'all_items'             => 'Все вехи',
			'add_new_item'          => 'Добавить веху',
			'add_new'               => 'Добавить веху',
			'new_item'              => 'Новая веха',
			'edit_item'             => 'Редактировать веху',
			'update_item'           => 'Обновить веху',
			'view_item'             => 'Посмотреть веху',
			'view_items'            => 'Посмотреть вехи',
			'search_items'          => 'Найти веху',
			'not_found'             => 'Веха не найден',
			'not_found_in_trash'    => 'Веха не найден в удаленных',
			'featured_image'        => 'Главное изображение вехи',
			'set_featured_image'    => 'Добавить главное изображение вехи',
			'remove_featured_image' => 'Удалить главное изображение вехи',
			'use_featured_image'    => 'Использовать как главное изображение вехи',
			'insert_into_item'      => 'Вставить в веху',
			'uploaded_to_this_item' => 'Загрузить в эту веху',
			'items_list'            => 'Список вех',
			'items_list_navigation' => 'Навигация по списку вех',
			'filter_items_list'     => 'Фильтровать вехи',
		);
		$args = array(
			'label'                 => 'Веха',
			'description'           => 'Вехи',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-editor-ul',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'milestones', $args );

	}
	add_action( 'init', 'register_milestones', 0 );

	function register_tech() {

		$labels = array(
			'name'                  => 'Технологии',
			'singular_name'         => 'Технология',
			'menu_name'             => 'Технологии',
			'name_admin_bar'        => 'Технологии',
			'archives'              => 'Архив технологий',
			'attributes'            => 'Атрибуты технологии',
			'parent_item_colon'     => 'Родительская технология:',
			'all_items'             => 'Все технологии',
			'add_new_item'          => 'Добавить технологию',
			'add_new'               => 'Добавить технологию',
			'new_item'              => 'Новая технология',
			'edit_item'             => 'Редактировать технологию',
			'update_item'           => 'Обновить технологию',
			'view_item'             => 'Посмотреть технологию',
			'view_items'            => 'Посмотреть технологии',
			'search_items'          => 'Найти технологию',
			'not_found'             => 'Технология не найден',
			'not_found_in_trash'    => 'Технология не найден в удаленных',
			'featured_image'        => 'Главное изображение технологии',
			'set_featured_image'    => 'Добавить главное изображение технологии',
			'remove_featured_image' => 'Удалить главное изображение технологии',
			'use_featured_image'    => 'Использовать как главное изображение технологии',
			'insert_into_item'      => 'Вставить в технологию',
			'uploaded_to_this_item' => 'Загрузить в эту технологию',
			'items_list'            => 'Список технологий',
			'items_list_navigation' => 'Навигация по списку технологий',
			'filter_items_list'     => 'Фильтровать технологии',
		);
		$args = array(
			'label'                 => 'Технология',
			'description'           => 'Технологии',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-admin-generic',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'tech', $args );

	}
	add_action( 'init', 'register_tech', 0 );

	function register_messages() {

		$labels = array(
			'name'                  => 'Сообщения',
			'singular_name'         => 'Сообщение',
			'menu_name'             => 'Сообщения',
			'name_admin_bar'        => 'Сообщения',
			'archives'              => 'Архив сообщений',
			'attributes'            => 'Атрибуты сообщений',
			'parent_item_colon'     => 'Родительское сообщение:',
			'all_items'             => 'Все сообщения',
			'add_new_item'          => 'Добавить сообщение',
			'add_new'               => 'Добавить сообщение',
			'new_item'              => 'Новое сообщение',
			'edit_item'             => 'Редактировать сообщение',
			'update_item'           => 'Обновить сообщение',
			'view_item'             => 'Посмотреть сообщение',
			'view_items'            => 'Посмотреть сообщения',
			'search_items'          => 'Найти сообщения',
			'not_found'             => 'Сообщение не найдено',
			'not_found_in_trash'    => 'Сообщение не найдено в удаленных',
			'featured_image'        => 'Главное изображение сообщения',
			'set_featured_image'    => 'Добавить главное изображение сообщения',
			'remove_featured_image' => 'Удалить главное изображение сообщения',
			'use_featured_image'    => 'Использовать как главное изображение сообщения',
			'insert_into_item'      => 'Вставить в сообщение',
			'uploaded_to_this_item' => 'Загрузить в это сообщение',
			'items_list'            => 'Список сообщений',
			'items_list_navigation' => 'Навигация по списку сообщений',
			'filter_items_list'     => 'Фильтровать сообщения',
		);
		$args = array(
			'label'                 => 'Сообщение',
			'description'           => 'Сообщения',
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-email-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'capabilities'			=> array(
											'create_posts'	=> false
										)
		);
		register_post_type( 'messages', $args );

	}
	add_action( 'init', 'register_messages', 0 );

	// Register Menues
	register_nav_menus(array(
		'main_left'		=> 'Главное меню (левое)',
		'main_right'	=> 'Главное меню (правое)',
		'footer_menu'	=> 'Меню в футере'
	));

	function custom_active_item_classes($classes = array(), $menu_item = false) {
		global $post;
		$classes[] = ($menu_item->url == get_post_type_archive_link($post->post_type)) ? 'current-menu-item' : '';
		return $classes;
	}
	add_filter('nav_menu_css_class', 'custom_active_item_classes', 10, 2);

	// Ajax load media
	add_action('wp_ajax_nopriv_getMedia', 'getMedia');
	add_action('wp_ajax_getMedia', 'getMedia' );

	function getMedia() {
		function pippin_get_image_id($image_url) {
			global $wpdb;
			$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
			return $attachment[0]; 
		}

		$image_url = $_POST['media_link'];

		$image_id = pippin_get_image_id($image_url);

		$image = wp_prepare_attachment_for_js($image_id);

		$media = array('url' => $image['url'], 'desc' => $image['caption']);

		echo json_encode($media);
		die();

	}

	// Adding featured gallery to projects
	function add_featured_galleries_to_ctp( $post_types ) {
		array_push($post_types, 'projects');
		return $post_types;
	}
	add_filter('fg_post_types', 'add_featured_galleries_to_ctp' );

	show_admin_bar(false);

	// Breadcrumbs
	function custom_breadcrumbs() {
	       
	    // Settings
	    $separator          = '&bull;';
	    $breadcrums_id      = 'breadcrumbs';
	    $breadcrums_class   = 'breadcrumbs';
	    $home_title         = 'Главная';
	      
	    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
	    $custom_taxonomy    = 'product_cat';
	       
	    // Get the query & post information
	    global $post,$wp_query;
	       
	    // Do not display on the homepage
	    if ( !is_front_page() ) {
	       
	        // Build the breadcrums
	        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
	           
	        // Home page
	        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
	        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
	           
	        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
	              
	            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
	              
	        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
	              
	            // If post is a custom post type
	            $post_type = get_post_type();
	              
	            // If it is a custom post type display name and link
	            if($post_type != 'post') {
	                  
	                $post_type_object = get_post_type_object($post_type);
	                $post_type_archive = get_post_type_archive_link($post_type);
	              
	                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
	                echo '<li class="separator"> ' . $separator . ' </li>';
	              
	            }
	              
	            $custom_tax_name = get_queried_object()->name;
	            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
	              
	        } else if ( is_single() ) {
	              
	            // If post is a custom post type
	            $post_type = get_post_type();
	              
	            // If it is a custom post type display name and link
	            if($post_type != 'post') {
	                  
	                $post_type_object = get_post_type_object($post_type);
	                $post_type_archive = get_post_type_archive_link($post_type);
	              
	                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
	                echo '<li class="separator"> ' . $separator . ' </li>';
	              
	            }
	              
	            // Get post category info
	            $category = get_the_category();
	             
	            if(!empty($category)) {
	              
	                // Get last category post is in
	                $last_category = end(array_values($category));
	                  
	                // Get parent any categories and create array
	                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
	                $cat_parents = explode(',',$get_cat_parents);
	                  
	                // Loop through parent categories and store in variable $cat_display
	                $cat_display = '';
	                foreach($cat_parents as $parents) {
	                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
	                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
	                }
	             
	            }
	              
	            // If it's a custom post type within a custom taxonomy
	            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
	            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
	                   
	                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
	                $cat_id         = $taxonomy_terms[0]->term_id;
	                $cat_nicename   = $taxonomy_terms[0]->slug;
	                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
	                $cat_name       = $taxonomy_terms[0]->name;
	               
	            }
	              
	            // Check if the post is in a category
	            if(!empty($last_category)) {
	                echo $cat_display;
	                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
	                  
	            // Else if post is in a custom taxonomy
	            } else if(!empty($cat_id)) {
	                  
	                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
	                echo '<li class="separator"> ' . $separator . ' </li>';
	                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
	              
	            } else {
	                  
	                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
	                  
	            }
	              
	        } else if ( is_category() ) {
	               
	            // Category page
	            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
	               
	        } else if ( is_page() ) {
	               
	            // Standard page
	            if( $post->post_parent ){
	                   
	                // If child page, get parents 
	                $anc = get_post_ancestors( $post->ID );
	                   
	                // Get parents in the right order
	                $anc = array_reverse($anc);
	                   
	                // Parent page loop
	                if ( !isset( $parents ) ) $parents = null;
	                foreach ( $anc as $ancestor ) {
	                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
	                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
	                }
	                   
	                // Display parent pages
	                echo $parents;
	                   
	                // Current page
	                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
	                   
	            } else {
	                   
	                // Just display current page if not parents
	                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
	                   
	            }
	               
	        } else if ( is_tag() ) {
	               
	            // Tag page
	               
	            // Get tag information
	            $term_id        = get_query_var('tag_id');
	            $taxonomy       = 'post_tag';
	            $args           = 'include=' . $term_id;
	            $terms          = get_terms( $taxonomy, $args );
	            $get_term_id    = $terms[0]->term_id;
	            $get_term_slug  = $terms[0]->slug;
	            $get_term_name  = $terms[0]->name;
	               
	            // Display the tag name
	            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
	           
	        } elseif ( is_day() ) {
	               
	            // Day archive
	               
	            // Year link
	            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
	            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
	               
	            // Month link
	            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
	            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
	               
	            // Day display
	            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
	               
	        } else if ( is_month() ) {
	               
	            // Month Archive
	               
	            // Year link
	            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
	            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
	               
	            // Month display
	            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
	               
	        } else if ( is_year() ) {
	               
	            // Display year archive
	            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
	               
	        } else if ( is_author() ) {
	               
	            // Auhor archive
	               
	            // Get the author information
	            global $author;
	            $userdata = get_userdata( $author );
	               
	            // Display author name
	            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
	           
	        } else if ( get_query_var('paged') ) {
	               
	            // Paginated archives
	            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
	               
	        } else if ( is_search() ) {
	           
	            // Search results page
	            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
	           
	        } elseif ( is_404() ) {
	               
	            // 404 page
	            echo '<li>' . 'Error 404' . '</li>';
	        }
	       
	        echo '</ul>';
	           
	    }
	}

	// Adding default excerpt
	function my_excerpt($text, $excerpt, $link) {
		if ($excerpt) return $excerpt;

		$text = strip_shortcodes( $text );

		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]&gt;', $text);
		$text = strip_tags($text);
		$excerpt_length = apply_filters('excerpt_length', 55);
		$excerpt_more = apply_filters('excerpt_more', ' ' . '<a href="' . $link .'">Смотреть полностью</a>');
		$words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
		if ( count($words) > $excerpt_length ) {
			array_pop($words);
			$text = implode(' ', $words);
			$text = $text . $excerpt_more;
		} else {
			$text = implode(' ', $words);
		}

		return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
	}

	// Template redirects
	add_action('template_redirect', function() {
		if (strpos($_SERVER['REQUEST_URI'], 'message-sent')) {
			global $wp_query;
			$wp_query->is_404 = false;
			status_header(200);
			include(TEMPLATEPATH . '/message-sent.php');
			exit();
		}
		if (strpos($_SERVER['REQUEST_URI'], 'messages')) {
			global $wp_query;
			$wp_query->is_404 = false;
			status_header(200);
			include(TEMPLATEPATH . '/messages.php');
			exit();
		}
	});

	// Registering custom post statuses
	add_action( 'init', 'status_unread' );
	function status_unread(){
		register_post_status( 'unread', array(
			'label'                     => _x( 'Новые', 'post' ),
			'public'                    => true,
			'exclude_from_search'       => true,
			'show_in_admin_all_list'    => true,
			'show_in_admin_status_list' => true,
			'label_count'               => _n_noop( 'Новые <span class="count">(%s)</span>', 'Новые <span class="count">(%s)</span>' ),
		));
	}

	add_action( 'init', 'status_read' );
	function status_read(){
		register_post_status( 'read', array(
			'label'                     => _x( 'Прочитанные', 'post' ),
			'public'                    => true,
			'exclude_from_search'       => true,
			'show_in_admin_all_list'    => true,
			'show_in_admin_status_list' => true,
			'label_count'               => _n_noop( 'Прочитанные <span class="count">(%s)</span>', 'Прочитанные <span class="count">(%s)</span>' ),
		));
	}

?>