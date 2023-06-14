<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package satellite-sapporo
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="contents">
		<div class="contact">
			<div class="contact__inner">
				<h2 class="contact__title">
					Contact
					<span>お問合せ</span>
				</h2>
				<p class="contact__lead">
					初めてバーチャルオフィスをご利用される方など、<br />
					「詳しいサービス内容を聞きたい」といったご要望があれば、<br />
					お気軽にこちらからご相談ください。
				</p>
				<div class="contact__banner">
					<div class="contact__banner__overview">
						<div class="contact__logo">
							<?php
							$custom_logo_id = get_theme_mod('custom_logo');
							$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
							if (has_custom_logo()) {
								echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" />';
							}
							?>
							<p>
								バーチャルオフィスをご検討中の方へ<br />
								営業時間：9：00～18：00 <br />
								（土・日・祝・年末年始は除く）
							</p>
						</div>
					</div>
					<div class="contact__banner__tel">
						<div class="contact__banner__tel__arrow"></div>
						<h3 class="contact__banner__tel__title">
							お電話からのお問合せ
						</h3>
						<span>
							<!-- <i class="fas fa-phone"></i> -->
							<span class="icon-tel">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
									<path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" />
								</svg>
							</span>

							0120-900-105
						</span>
						<p>受付時間9:00〜18:00</p>
					</div>
					<div class="contact__banner__web">
						<p>WEBからのお問合せ</p>
						<a href="">お問合せフォーム</a>
					</div>
				</div>
				<!-- contact__banner -->
			</div>
			<!-- contact__inner -->
		</div>
		<!-- contact -->
	</div>
	<!-- contents -->
	<aside class="side__btn">
		<a class="side__btn__primary" href="/advice/">
			ご相談フォーム<br />
			<span>気軽に相談ください</span>
			<i class="far fa-arrow-alt-circle-right"></i>
		</a>
		<a class="side__btn__secondary" href="/download/">
			サービス資料 <br /><span>ダウンロードはこちらから </span>
			<i class="far fa-arrow-alt-circle-right"></i>
		</a>
	</aside>

	<?php
	/*
	if (have_posts()) :

		if (is_home() && !is_front_page()) :
			*/
	?>
	<header>
		<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
	</header>
	<?php
	/*
		endif;

		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', get_post_type());

		endwhile;

		the_posts_navigation();

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	*/
	?>

</main><!-- #main -->

<?php
// get_sidebar();

get_footer();
