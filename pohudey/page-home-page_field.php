<?php
/**
 * Template Name: Лендинг
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pohudey
 */

get_header(); ?>

<main>
	<section class="main box-1">
		<div class="container clearfix">
			<div class="box-title">
				<h3 class="big-title">
					<?php the_field( 'title-1' ); ?>
				</h3>
			</div>
			<div class="box-content">
				<?php the_field( 'pole-1' ); ?>
			</div>
			<div class="box-btn">
				<a href="#" class="medium-btn btn-modal-1">
					Принять участие
				</a>
			</div>
		</div>
	</section>
	<section class="main box-2">
		<div class="container clearfix">
			<div class="box-title">
				<h2>
				<?php the_field( 'title-2' ); ?>
				</h2>
				<?php the_field( 'pole-2' ); ?>
			</div>
			<div class="box-content">
				<figure>
					<img src="<?php bloginfo('template_url'); ?>/img/icon_coach.jpg" alt="Психолог, фитнес-бикини Илона Щербакова ">
				</figure>
				<article class="roads">
					<h3>
						<?php the_field( 'title-3' ); ?>
					</h3>
					<ol>
						<?php the_field( 'pole-3' ); ?>
					</ol>
				</article>
			</div>
		</div>
	</section>
	<section class="main box-3">
		<div class="container clearfix">
			<div class="box-title">
				<h3 class="medium-title">
					<?php the_field( 'title-4' ); ?>
				</h3>
			</div>
			<div class="box-content">
				<ul>
					<?php the_field( 'pole-4' ); ?>
				</ul>
			</div>
			<div class="box-btn">
				<a href="" class="small-btn btn-modal-2">УЧАСТВОВАТЬ В ТРЕНИНГЕ</a>
			</div>
		</div>
	</section>
	<section class="main box-4">
		<div class="container clearfix">
			<div class="box-title">
				<h3 class="medium-title">
					<?php the_field( 'title-5' ); ?>
				</h3>
			</div>
			<div class="box-content">
				<h3 class="small-title">
					<?php the_field( 'title-6' ); ?>
				</h3>
				<ul>
					<li>
						<span class="cloud">1</span>
						<span class="color-text">
							<?php the_field( 'title-51' ); ?>
						</span>
						<?php the_field( 'pole-51' ); ?>
					</li>
					<li>
						<span class="cloud">2</span>
						<span class="color-text">
							<?php the_field( 'title-52' ); ?>
						</span>
						<?php the_field( 'pole-52' ); ?>
					</li>
					<li>
						<span class="cloud">3</span>
						<span class="color-text">
							<?php the_field( 'title-53' ); ?>
						</span>
						<?php the_field( 'pole-53' ); ?>
					</li>
				</ul>
				<p><span class="smile">ВНИМАНИЕ: возможен побочный эффект – улучшение качества всей жизни</span></p>
			</div>
			<div class="box-btn">
				<a href="" class="medium-btn btn-modal-3">
					Узнать подробнее
				</a>
			</div>
		</div>
	</section>
	<section class="main box-5">
		<div class="container clearfix">
			<div class="box-title">
				<h3 class="medium-title">
					<?php the_field( 'title-7' ); ?>
				</h3>
			</div>
			<div class="box-content">
				<ul>
					<li>
						<figure>
							<img src="<?php bloginfo('template_url'); ?>/img/icon_plate.png" alt="">
						</figure>
						<p>
							<?php the_field( 'pole-6' ); ?>
						</p>
					</li>
					<li>
						<figure>
							<img src="<?php bloginfo('template_url'); ?>/img/icon_strong.png" alt="">
						</figure>
						<p>
							<?php the_field( 'pole-7' ); ?>
						</p>
					</li>
					<li>
						<figure>
							<img src="<?php bloginfo('template_url'); ?>/img/icon_unhappy.png" alt="">
						</figure>
						<p>
							<?php the_field( 'pole-8' ); ?>
						</p>
					</li>
					<li>
						<figure>
							<img src="<?php bloginfo('template_url'); ?>/img/icon_crying.png" alt="">
						</figure>
						<p>
							<?php the_field( 'pole-9' ); ?>
						</p>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="main box-6">
		<div class="container clearfix">
			<div class="box-title">
				<h3 class="medium-title">
					<?php the_field( 'title-8' ); ?>
				</h3>
			</div>
			<div class="box-btn">
				<a class="big-btn btn-modal-4" href="#">Записаться</a>
			</div>
		</section>
		<section class="main box-7">
			<div class="container clearfix">
				<div class="box-title">
					<h3 class="medium-title">
						<?php the_field( 'title-9' ); ?>
					</h3>
				</div>
				<div class="box-content">
					<div class="pack">
						<div class="pack__title">
							<h4>
								Пакет
								<span class="color-text">
									<?php the_field( 'title_pack-1' ); ?>
								</span>
							</h4>
						</div>
						<div class="pack__price">
							<p><?php the_field( 'price_pack-1' ); ?><span>руб</span></p>
						</div>
						<div class="pack__list">
							<ul>
								<?php the_field( 'list_pack-1' ); ?>
							</ul>
						</div>
					</div>
					<div class="pack">
						<div class="pack__title">
							<h4>
								Пакет
								<span class="color-text">
									<?php the_field( 'title_pack-2' ); ?>
								</span>
							</h4>
						</div>
						<div class="pack__price">
							<p><?php the_field( 'price_pack-2' ); ?><span>руб</span></p>
						</div>
						<div class="pack__list">
							<ul>
								<?php the_field( 'list_pack-2' ); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="main box-8">
		<div class="container clearfix">
			<div class="box-title">
				<h3 class="medium-title">
					<?php the_field( 'title-10' ); ?>
				</h3>
			</div>
		</div>
		<div class="box-content">
			<figure>
				<img src="<?php bloginfo('template_url'); ?>/img/video-pl_bg.png" alt="">
			</figure>
		</div>
	</section>
</main>

<?php
get_footer();
