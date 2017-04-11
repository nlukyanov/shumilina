<h2 class="page-title">
	<span>Обратная связь</span>
</h2>
<p style="margin-bottom: 40px;">Для того, чтобы заказать у меня проект или сообщить об ошибке на сайте, используйте форму ниже.</p>
<form action="" class="contact-form form" method="POST">
	<fieldset>
		<div class="form-row">
			<input type="text" placeholder="Имя" class="required" name="user" id="user">
		</div>
		<div class="form-row">
			<input type="email" placeholder="E-mail" class="required" name="email" id="email">
		</div>
		<div class="form-row">
			<textarea placeholder="Сообщение" class="required" name="message" id="message"></textarea>
		</div>
		<hr>
		<div class="form-row">
			<div class="g-recaptcha" data-sitekey="6LeEbRwUAAAAAJkEyw-K0revXHegykCNtCKxxP5q" data-callback="checkRecaptcha"></div>
		</div>
		<hr>
		<div class="form-row">
			<input type="submit" value="Отправить" class="btn submit-real">
		</div>
	</fieldset>
</form>
<script>
	function checkRecaptcha() {
		var response = grecaptcha.getResponse();
		if ( response.length !== 0 ) {
			jQuery('.g-recaptcha').next('.error').remove();
		}
	}
</script>