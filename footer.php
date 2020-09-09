<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->
	</div><!-- #page -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div style="margin-left:10%; margin-right: 10%;">

			<p id="main-footer-text"><?php echo __('Symbolum.art','sy') . ' • ' . __('Piroska Molnar','sy') . ' • 2020 • ' . '<a href="mailto:' . __('message@symbolum.art','sy') . '">' .  __('message@symbolum.art','sy') . '</a>'; ?></p>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->
	</div><!-- #main-css-apply -->

	<?php do_action( 'storefront_after_footer' ); ?>

<?php wp_footer(); ?>
<style type="text/css">
	footer{
		background-color: rgb(48, 44, 41) !important;
		padding-top:10px !important;
		padding-bottom: 10px !important;
		text-align: center;
	}
	footer h1, footer h2, footer p{
		color: rgb(200,168,88) !important;
		margin:0 !important;
	}
	footer a{
		color:lightblue !important;
	}
		#main-footer-text{
		  letter-spacing: 3px;
	}
</style>
</body>
</html>
