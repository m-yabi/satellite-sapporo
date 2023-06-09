<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package satellite-sapporo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css" />
	<?php wp_head(); ?>

	<?php if (is_user_logged_in()) : ?>
		<style type="text/css">
			html {
				margin: 0 0 32px !important;
			}

			#wpadminbar {
				top: unset !important;
				bottom: 0;
			}
		</style>
	<?php endif; ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'satellite-sapporo'); ?></a>

		<header class="header">
			<div class="header__bg"></div>
			<div class="header__innner">
				<div class="header__logo__area">
					<?php
					$satellite_sapporo_description = get_bloginfo('description', 'display');
					if ($satellite_sapporo_description || is_customize_preview()) :
					?>
						<h1 class="header__title">
							<?php echo $satellite_sapporo_description; ?>
						</h1>
					<?php endif; ?>
					<div class="header__logo">
						<?php
						the_custom_logo();
						?>
						<p class="header__lead">
							格安バーチャルオフィス<br class="" />
							サテライト東京
						</p>
					</div>
				</div>
				<div class="openbtn1">
					<span class="openbtn"></span><span class="openbtn"></span><span class="openbtn"></span>
				</div>
				<div class="header__menu__wrap">
					<div class="header__menu">
						<div class="header__phone">
							<a class="header__phonenumber" href="0120-900-105">
								<!-- <i class="fas fa-phone"></i> -->
								<span class="icon-tel">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" />
									</svg>
								</span>
								0120-900-105
							</a>
							<p class="header__phonenumber__text">受付時間9:00〜18:00</p>
						</div>
						<div class="gnav__menu__btn">
							<a class="download" href="#">
								<i class="fas fa-download"></i>
								資料のダウンロード
							</a>
							<a class="application" href="#">
								<i class="fas fa-inbox"></i>
								お申し込み
							</a>
						</div>
					</div>
					<nav id="gnav__menu" class="gnav__menu">

						<nav id="site-navigation" class="main-navigation">
							<?php
							/*
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							*/
							?>
						</nav>
						<!-- #site-navigation -->

						<ul class="nav__menu">
							<li class="nav__menu__list">
								<a href="">ホーム</a>
							</li>
							<li class="nav__menu__list">
								<a href="">バーチャルオフィス・住所貸し</a>
							</li>
							<li class="nav__menu__list">
								<a href="">電話番号取得</a>
							</li>
							<li class="nav__menu__list">
								<a href="">選ばれる特徴</a>
							</li>
							<li class="nav__menu__list">
								<a href="">よくあるご質問</a>
							</li>
							<li class="nav__menu__list">
								<a href="">お問合せ</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>