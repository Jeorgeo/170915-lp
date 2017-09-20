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
					<?php the_field( 'title-h' ); ?>
				</h1>
			</figure>
			<div class="header__adress">
				<p>
					<?php the_field( 'adress' ); ?>
				</p>
			</div>
			<div class="header__date">
				<p>
					<?php the_field( 'data' ); ?>
				</p>
			</div>
			<div class="header__contacts">
				<a href="tel:<?php the_field( 'phone_1' ); ?>"><?php the_field( 'phone_1' ); ?></a>
				<a href="tel:<?php the_field( 'phone_2' ); ?>"><?php the_field( 'phone_2' ); ?></a>
			</div>
		</div>
	</header>
