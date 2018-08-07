<?php
// Модальное окно авторизации и регистрации
?>
<div class="modal fade modal-login" id="modal-login">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body modal-login__body">
				<ul class="nav nav-tabs modal-login__tabs" role="tablist">
					<li class="active modal-login__tabs-item" role="presentation">
        		<a class="modal-login__tabs-link" href="#modal-login__login" aria-controls="modal-login__login" role="tab" data-toggle="tab">Вход</a>
      		</li>
      		<li class="modal-login__tabs-item" role="presentation">
        		<a class="modal-login__tabs-link" href="#modal-login__register" aria-controls="modal-login__register" role="tab" data-toggle="tab">Регистрация</a>
      		</li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="modal-login__login">
						<form action="" method="POST">
							<input class="modal-login__input" type="text" name="" id="modal-login__login-login" placeholder="Логин" required>
							<label for="modal-login__login-login" class="visually-hidden">Логин</label>

							<input class="modal-login__input" type="password" name="" id="modal-login__login-password" placeholder="Пароль" required>
							<label for="modal-login__login-password" class="visually-hidden">Пароль</label>

							<button class="modal-login__submit" type="submit">Войти</button>
						</form>
					</div>

					<div class="tab-pane" id="modal-login__register">
						<form action="" method="POST">
							<input class="modal-login__input" type="text" name="" id="modal-login__register-login" placeholder="Логин" required>
							<label for="modal-login__register-login" class="visually-hidden">Логин</label>

							<input class="modal-login__input" type="text" name="" id="modal-login__register-email" placeholder="E-mail" required>
							<label for="modal-login__register-email" class="visually-hidden">E-mail</label>

							<input class="modal-login__input" type="text" name="" id="modal-login__register-country" placeholder="Страна" required>
							<label for="modal-login__register-country" class="visually-hidden">Страна</label>

							<input class="modal-login__input" type="password" name="" id="modal-login__register-password" placeholder="Пароль" required>
							<label for="modal-login__register-password" class="visually-hidden">Пароль</label>

							<input class="modal-login__input" type="password" name="" id="modal-login__register-repeat" placeholder="Повторите пароль" required>
							<label for="modal-login__register-repeat" class="visually-hidden">Повторите пароль</label>

							<input class="visually-hidden modal-login__rules-checkbox" type="checkbox" name="" id="modal-login__rules" required>
							<label class="modal-login__rules-label" for="modal-login__rules">Согласен с <a class="modal-login__rules-link" href="#" target="_blank">правилами</a></label>

							<button class="modal-login__submit" type="submit">Зарегистрироваться</button>
						</form>
					</div>
				</div>

				<div class="modal-login__social-text-wrapper">
					<h3 class="modal-login__social-text">Войти через</h3>
				</div>
				<ul class="modal-login__social-list social-list">
					<li class="social-list__item">
						<a class="social-list__link social-list__link--vk" href="#">
							<svg class="social-list__svg">
								<use xlink:href="images/icon_sprite.svg#icon_post-vk"></use>
							</svg>
						</a>
					</li>
					<li class="social-list__item">
						<a class="social-list__link social-list__link--google" href="#">
							<svg class="social-list__svg">
								<use xlink:href="images/icon_sprite.svg#icon_post-gp"></use>
							</svg>
						</a>
					</li>
					<li class="social-list__item">
						<a class="social-list__link social-list__link--fb" href="#">
							<svg class="social-list__svg">
								<use xlink:href="images/icon_sprite.svg#icon_post-fb"></use>
							</svg>
						</a>
					</li>
					<li class="social-list__item">
						<a class="social-list__link social-list__link--tw" href="#">
							<svg class="social-list__svg">
								<use xlink:href="images/icon_sprite.svg#icon_post-tw"></use>
							</svg>
						</a>
					</li>
					<li class="social-list__item">
						<a class="social-list__link social-list__link--instagram" href="#">
							<svg class="social-list__svg">
								<radialGradient id="rg" r="150%" cx="-10%" cy="100%">
    							<stop stop-color="#fdf497" offset="0" />
    							<stop stop-color="#fdf497" offset="0.05" />
    							<stop stop-color="#fd5949" offset="0.45" />
    							<stop stop-color="#d6249f" offset="0.6" />
  							</radialGradient>
								<use xlink:href="images/icon_sprite.svg#icon_post-ig"></use>
							</svg>
						</a>
					</li>
				</ul>
			</div>

			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
	</div>
</div>
