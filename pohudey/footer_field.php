<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pohudey
 */

?>

<footer>
	<div class="container clearfix">
		<div class="box-title">
			<h3 class="medium-title">
				<?php the_field( 'title-11' ); ?>
			</h3>
		</div>
		<div class="box-content clearfix">
			<div class="box-content__photo">
				<figure class="footer__photo">
					<img src="<?php bloginfo('template_url'); ?>/img/photo_coach.jpg" alt="">
				</figure>
				<figure class="header__logo">
					<img src="<?php bloginfo('template_url'); ?>/img/logo-s.png" alt="Мотивация к похудению" width="256" height="256">
					<h1>
						<?php the_field( 'title-h' ); ?>
					</h1>
				</figure>
			</div>
			<form class="box-content__form" method="post">
				<input id="name" type="text" name="name" placeholder="Имя...">
				<input id="mail" type="text" name="mail" placeholder="E-mail...">
				<input id="phone" type="text" name="phone" placeholder="Телефон...">
				<button class="big-btn btn-modal-4" type="submit" name="button">Записаться</button>
				<input id="accept" class="accept" type="checkbox" name="accept" checked>
				<label class="accept-label" for="accept">Я даю согласие на  получение рекламных материалов от Илоны Щербаковой</label>
			</form>
		</div>
		<div class="box-btn"></div>
	</div>
</footer>

<div class="wrap"></div>

<div id="window" class="popup-question modal-s">
	<div class="box-title">
		<div class="popup-question-close">
			x
		</div>
		<h3 class="medium-title">
			Спасибо!<br>
			<span class="color-text">
				за заявку
			</span>
		</h3>
	</div>
</div>

<div id="window" class="popup-question modal-1">
	<div class="popup-question-close">
		x
	</div>
	<div class="box-title">
		<h3 class="medium-title">
			запишьсь на тренинг<br>
			<span class="color-text">
				Прямо сейчас
			</span>
		</h3>
	</div>
	<form id="js_form-1" class="modal-form question-form-box clearfix">
		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="сайт о похудении">
		<input type="hidden" name="admin_email" value="yu.sh.2583@gmail.com">
		<input type="hidden" name="form_subject" value="Принять участие">
		<!-- END Hidden Required Fields -->
		<input id="name" type="text" name="name" placeholder="Введите ваше имя" pattern="^[A-Za-zА-Яа-яЁё]+$" required>
		<input id="mail" type="text" name="mail" placeholder="Введите ваш e-mail">
		<input id="phone" type="text" name="phone" placeholder="Введите ваш телефон"
		required>
		<button class="form-message-btn" type="submit" name="send">записаться</button>
	</form>
</div>

<div id="window" class="popup-question modal-2">
	<div class="popup-question-close">
		x
	</div>
	<div class="box-title">
		<h3 class="medium-title">
			запишьсь на тренинг<br>
			<span class="color-text">
				Прямо сейчас
			</span>
		</h3>
	</div>
	<form id="js_form-1" class="modal-form question-form-box clearfix">
		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="сайт о похудении">
		<input type="hidden" name="admin_email" value="jeorgeo@list.ru">
		<input type="hidden" name="form_subject" value="Участвовать в тренинге">
		<!-- END Hidden Required Fields -->
		<input id="name" type="text" name="name" placeholder="Введите ваше имя" pattern="^[A-Za-zА-Яа-яЁё]+$" required>
		<input id="mail" type="text" name="mail" placeholder="Введите ваш e-mail"
		pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" required>
		<input id="phone" type="text" name="phone" placeholder="Введите ваш телефон"
		required>
		<button class="form-message-btn" type="submit" name="send">записаться</button>
	</form>
</div>

<div id="window" class="popup-question modal-3">
	<div class="popup-question-close">
		x
	</div>
	<div class="box-title">
		<h3 class="medium-title">
			запишьсь на тренинг<br>
			<span class="color-text">
				Прямо сейчас
			</span>
		</h3>
	</div>
	<form id="js_form-1" class="modal-form question-form-box clearfix">
		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="сайт о похудении">
		<input type="hidden" name="admin_email" value="jeorgeo@list.ru">
		<input type="hidden" name="form_subject" value="Узнать подробнее">
		<!-- END Hidden Required Fields -->
		<input id="name" type="text" name="name" placeholder="Введите ваше имя" pattern="^[A-Za-zА-Яа-яЁё]+$" required>
		<input id="mail" type="text" name="mail" placeholder="Введите ваш e-mail">
		<input id="phone" type="text" name="phone" placeholder="Введите ваш телефон"
		required>
		<button class="form-message-btn" type="submit" name="send">записаться</button>
	</form>
</div>

<div id="window" class="popup-question modal-4">
	<div class="popup-question-close">
		x
	</div>
	<div class="box-title">
		<h3 class="medium-title">
			запишьсь на тренинг<br>
			<span class="color-text">
				Прямо сейчас
			</span>
		</h3>
	</div>
	<form id="js_form-1" class="modal-form question-form-box clearfix">
		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="сайт о похудении">
		<input type="hidden" name="admin_email" value="jeorgeo@list.ru">
		<input type="hidden" name="form_subject" value="Записаться">
		<!-- END Hidden Required Fields -->
		<input id="name" type="text" name="name" placeholder="Введите ваше имя" pattern="^[A-Za-zА-Яа-яЁё]+$" required>
		<input id="mail" type="text" name="mail" placeholder="Введите ваш e-mail"
		pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" required>
		<input id="phone" type="text" name="phone" placeholder="Введите ваш телефон"
		required>
		<button class="form-message-btn" type="submit" name="send">записаться</button>
	</form>
</div>

<?php wp_footer(); ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
				try {
						w.yaCounter45982341 = new Ya.Metrika({
								id:45982341,
								clickmap:true,
								trackLinks:true,
								accurateTrackBounce:true,
								webvisor:true
						});
				} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45982341" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
