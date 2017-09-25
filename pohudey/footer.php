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
		<div class="box-content clearfix">
			<div class="box-content__photo">
				<figure class="header__logo">
					<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Мотивация к похудению" width="256" height="256">
					<?php dynamic_sidebar( 'title-h' ); ?>
				</figure>
			</div>
			<div class="header__date clearfix">
				<div class="data1">
					<?php dynamic_sidebar( 'data1' ); ?>
				</div>
				<div class="adress1">
					<?php dynamic_sidebar( 'adress-f1' ); ?>
				</div>
				<div class="data2">
					<?php dynamic_sidebar( 'data2' ); ?>
				</div>
				<div class="adress2">
					<?php dynamic_sidebar( 'adress-f2' ); ?>
				</div>
			</div>
			<div class="social-icons">
				<?php dynamic_sidebar( 'link_vk' ); ?>
				<?php dynamic_sidebar( 'link_fb' ); ?>
				<?php dynamic_sidebar( 'link_in' ); ?>
			</div>
		</div>
	</div>
</footer>

<div class="wrap"></div>

<div id="window" class="popup-question modal-s">
	<div class="box-title">
		<div class="popup-question-close">
			✕
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
		✕
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
		<?php dynamic_sidebar( 'mail' ); ?>
		<input type="hidden" name="form_subject" value="Принять участие">
		<!-- END Hidden Required Fields -->
		<input id="name" type="text" name="name" placeholder="Имя..." pattern="^[A-Za-zА-Яа-яЁё]+$" required>
		<input id="mail" type="text" name="mail" placeholder="E-mail..." required
		pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})">
		<input id="phone" type="text" name="phone" placeholder="Телефон..." required
		pattern="^((8|\+375)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$">
		<button class="form-message-btn" type="submit" name="send">записаться</button>
	</form>
</div>

<div id="window" class="popup-question modal-2">
	<div class="popup-question-close">
		✕
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
		<?php dynamic_sidebar( 'mail' ); ?>
		<input type="hidden" name="form_subject" value="Участвовать в тренинге">
		<!-- END Hidden Required Fields -->
		<input id="name" type="text" name="name" placeholder="Имя..." pattern="^[A-Za-zА-Яа-яЁё]+$" required>
		<input id="mail" type="text" name="mail" placeholder="E-mail..." required
		pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})">
		<input id="phone" type="text" name="phone" placeholder="Телефон..." required
		pattern="^((8|\+375)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$">
		<button class="form-message-btn" type="submit" name="send">записаться</button>
	</form>
</div>

<div id="window" class="popup-question modal-3">
	<div class="popup-question-close">
		✕
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
		<?php dynamic_sidebar( 'mail' ); ?>
		<input type="hidden" name="form_subject" value="Узнать подробнее">
		<!-- END Hidden Required Fields -->
		<input id="name" type="text" name="name" placeholder="Имя..." pattern="^[A-Za-zА-Яа-яЁё]+$" required>
		<input id="mail" type="text" name="mail" placeholder="E-mail..." required
		pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})">
		<input id="phone" type="text" name="phone" placeholder="Телефон..." required
		pattern="^((8|\+375)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$">
		<button class="form-message-btn" type="submit" name="send">записаться</button>
	</form>
</div>

<div id="window" class="popup-question modal-4">
	<div class="popup-question-close">
		✕
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
		<?php dynamic_sidebar( 'mail' ); ?>
		<input type="hidden" name="form_subject" value="Записаться">
		<!-- END Hidden Required Fields -->
		<input id="name" type="text" name="name" placeholder="Имя..." pattern="^[A-Za-zА-Яа-яЁё]+$" required>
		<input id="mail" type="text" name="mail" placeholder="E-mail..." required
		pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})">
		<input id="phone" type="text" name="phone" placeholder="Телефон..." required
		pattern="^((8|\+375)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$">
		<button class="form-message-btn" type="submit" name="send">записаться</button>
	</form>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/form.js"></script>

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
