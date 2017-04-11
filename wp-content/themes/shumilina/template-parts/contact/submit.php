<?php 

	if ( $_POST ) {
		$new_message = array(
			'post_type'		=>	'messages',
			'post_status'	=>  'unread',
			'post_title'	=>  'Имя: ' . wp_strip_all_tags($_POST['user']) . ', Email: ' . wp_strip_all_tags($_POST['email']),
			'post_content'	=>  wp_strip_all_tags($_POST['message'])
		);
		 
		wp_insert_post($new_message);

		header("Location: " . get_bloginfo('url') . '/message-sent');
		exit();
	}

?>
