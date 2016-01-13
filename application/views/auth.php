<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><meta name="viewport" content="width=device-width">
<body class="uk-cover-background uk-height-viewport" style="background-image: url(../img/background.png);">
	<div class="uk-vertical-align uk-text-center uk-height-1-1">
	<div class="uk-vertical-align-middle uk-panel uk-panel-box uk-width-1-3" style="background: rgba(192,192,192, 0.8);">
		{msg}
		<div class="uk-panel uk-panel-box uk-panel-header " >
			<h3 class="uk-panel-title">Вид авторизации: </h3>
			<form class="uk-form" method="post" action="/auth">
			    <div class="uk-form-row">
					<label class="uk-float-left">Социальные сети: </label><br>
					<script src="//ulogin.ru/js/ulogin.js"></script>
					<div id="uLogin" id="uLogin" data-ulogin="display=panel;fields=first_name,last_name,email;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2Flocalhost%3A8080%2Fauth"></div>
				</div>
				<h3 class="uk-panel-title"></h3>
				<div class="uk-form-row">
					<label class="uk-float-left">Пароль предоставленнный персоналом или смс: </label>
					<input class="uk-width-1-1 uk-form-large" type="text" placeholder="Пароль" id="Password" name="Password">
				</div>
				<div class="uk-form-row">
					<button class="uk-width-1-1 uk-button uk-button-primary uk-button-small" type="submit" >Войти</button>
				</div>
				<h3 class="uk-panel-title"></h3>
				<div class="uk-form-row">
					<label class="uk-float-left">Введите номер телефона для получения смс:</label>
					<input class="uk-width-1-1 uk-form-large" type="text" placeholder="Телефон без +7 и 8" id="Phone" name="Phone">
				</div>
				<div class="uk-form-row">
					<button class="uk-width-1-1 uk-button uk-button-primary uk-button-small" type="submit" >Получить</button>
				</div>
			</form>
				<h3 class="uk-panel-title"></h3>
</div>
</div>
</div>
</body>