<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package satellite-sapporo
 */

?>

<footer class="footer">
	<div class="footer__inner">
		<ul class="footer__menu__primary">
			<li><a href="/company/">会社案内</a></li>
			<li><a href="/abouotapplication/">お申込みについて</a></li>
			<li><a href="/customer/">お客様の声</a></li>
			<li><a href="/columns/">バーチャルオフィスコラム</a></li>
			<li><a href="/sitemap/">サイトマップ</a></li>
		</ul>
		<h2 class="footer__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logowhite.png">
		</h2>
		<ul class="footer__menu__seconndary">
			<li><a href="/specified/">特定商取引法に基づく表示</a></li>
			<li><a href="/prevention/">犯罪収益移転防止法</a></li>
			<li><a href="/program/">反社会的勢力排除に向けた取組み</a></li>
			<li><a href="/security/">セキュリティポリシー</a></li>
			<li><a href="/privacy/">プライバシーポリシー</a></li>
		</ul>
		<p class="footer__text">
			サイト内で記載されている会社名および商品・製品・サービス名（ロゴマーク等を含む）は、各社の商標または各権利者の商標です
		</p>
		<p class="footer__address">
			バーチャルオフィスのサテライト東京：東京都渋谷区神泉町10
		</p>
		<small>© Satellite Office TOKYO.</small>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


</body>

</html>