<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pohudey
 */

?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="container clearfix">
			<figure class="header__logo">
				<div class="logo-box">
					<img src="<?php bloginfo('template_url'); ?>/img/logo-s.png" alt="Мотивация к похудению" width="256" height="256">
				</div>
				<h1>
					Мотивация к похудению
				</h1>
			</figure>
			<div class="header__adress">
				<p>
					РБ г. Минск <br>
					ул. (ул.В.Хоружей, 3, пом.601)
				</p>
			</div>
			<div class="header__date">
				<p>
					25.09.2017 <br>
					19.00
				</p>
			</div>
			<div class="header__contacts">
				<a href="tel:+375296334344">+375296334344</a>
				<a href="tel:+375333630251">+375333630251</a>
			</div>
		</div>
	</header>
