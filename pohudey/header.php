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
					<img src="<?php bloginfo('template_url'); ?>/img/logo-y.png" alt="Мотивация к похудению" width="256" height="256">
				</div>
				<?php dynamic_sidebar( 'title-h' ); ?>
			</figure>
			<div class="header__date clearfix">
				<div class="data1">
					<?php dynamic_sidebar( 'data1' ); ?>
				</div>
				<div class="data2">
					<?php dynamic_sidebar( 'data2' ); ?>
				</div>
			</div>
			<div class="header__adress">
				<?php dynamic_sidebar( 'adress' ); ?>
			</div>
			<?php dynamic_sidebar( 'phone' ); ?>
		</div>
	</header>
