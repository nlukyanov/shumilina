<?php 

	if ( !is_user_logged_in() ) :
		header("Location: " . get_bloginfo('url') . '/404/');
		exit();
	else :
		if ( $_POST ) {
			if ( $_POST['message_id'] ) {
				$new_message = array(
					'post_type'		=>	'messages',
					'post_status'	=>  'read',
					'ID'			=>	$_POST['message_id']
				);
				wp_update_post($new_message);
			}
			if ( $_POST['delete_id'] ) {
				wp_delete_post($_POST['delete_id'], true);
				if ( !$_REQUEST['type'] ) {
					header("Location: " . get_bloginfo('url') . '/messages');
					exit();
				}
				else {
					header("Location: " . get_bloginfo('url') . '/messages?type=' . $_REQUEST['type']);
					exit();
				}
			}
		}
	endif;


	$type = ( $_REQUEST['type'] == 'read' ) ? 'read' : 'unread';
	$isSingle = ( $_SERVER['REQUEST_URI'] != '/messages/' && $_SERVER['REQUEST_URI'] != '/messages' && $_SERVER['REQUEST_URI'] != 'messages' && !$_REQUEST['type'] ) ? true : false;

?>

<?php get_header(); ?>

<?php
	if ( !$isSingle ) {
		$args = array(
			'post_type'			=>	'messages',
			'post_status'		=>	$type,
			'posts_per_page'	=>	-1
		);
	}
	else {
		$slug = str_replace('/', '', str_replace('/messages/', '', $_SERVER['REQUEST_URI']));
		$args = array(
			'post_type'			=>	'messages',
			'name'				=>	$slug
		);
	}

	$query = new WP_Query($args);

	$messages = $query->posts;
?>
<?php if ( !$isSingle ) : ?>
	<?php $count = wp_count_posts('messages'); ?>
	<h2 class="page-title"><span><?= ( $type != 'read' ) ? 'Новые сообщения' : 'Прочитанные сообщения' ?></span></h2>
	<div class="link-holder" style="border: 1px solid #ddd; border-width: 1px 0; padding: 20px 0; text-align: left;">
		<?php if ( $type == 'unread' ) : ?>
			<span class="btn btn-active" style="text-transform: none;">Новые (<?= $count->unread ?>)</span>
			<a href="/messages?type=read" class="btn btn-default" style="text-transform: none;">Прочитанные (<?= $count->read ?>)</a>
		<?php else : ?>
			<a href="/messages" class="btn btn-default" style="text-transform: none;">Новые (<?= $count->unread ?>)</a>
			<span class="btn btn-active" style="text-transform: none;">Прочитанные (<?= $count->read ?>)</span>
		<?php endif; ?>
	</div>
<?php else : ?>
	<h2 class="page-title"><span>Сообщение</span></h2>
<?php endif; ?>
<?php
	if ( $messages ) :
?>
		<div class="messages-list">
<?php
			foreach ( $messages as $message ) :
?>

				<div class="message-item">
					<h2 class="message-title"><?= $message->post_title; ?></h2>
					<div class="message-date">
						Отправлено: <?= get_the_date('d M Y', $message->ID); ?> в <?= get_the_date('h:i', $message->ID); ?>
					</div>
					<div class="message-content">
						<?= $message->post_content; ?>
					</div>
					<div class="message-action">
						<form action="" class="form remove-form" method="POST">
							<fieldset>
								<input type="hidden" name="delete_id" id="delete_id" value="<?= $message->ID ?>">
								<input type="submit" value="Безвозвратно удалить" class="btn btn-error">
							</fieldset>
						</form>
						<?php if ( $type == 'unread' ) : ?>
							<form action="" class="form read-form" method="POST">
								<fieldset>
									<input type="hidden" name="message_id" id="message_id" value="<?= $message->ID ?>">
									<input type="submit" value="Пометить как прочитанное" class="btn">
								</fieldset>
							</form>
						<?php endif; ?>
					</div>
				</div>

<?php
			endforeach;
?>
		</div>
<?php
	else :
?>
	<p class="message" style="margin-top: 20px;">У меня нет ни одного <?= ( $type == 'unread' ) ? 'нового' : 'прочитанного' ?> сообщения</p>
<?php
	endif;

	$query->reset_postdata();

?>

<?php get_footer(); ?>