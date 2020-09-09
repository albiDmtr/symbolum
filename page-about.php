<?php

get_header(); ?>

<style type="text/css">


#primary h1, #primary h2,#primary h3,#primary h4,#primary h5,#primary h6,#primary p,#primary a,#primary li {
	color:rgb(255,255,210) !important;
}
body {
	background-color: black !important;
	background-repeat: no-repeat;
	background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/added/about_bg.jpg');
	background-size: 100% auto;
	background-position: 0% 100%;
}
#primary {
	padding-top: 25px;
	width: 100% !important;
}
.entry-header{
	text-align: center;
	border-bottom: solid 2px rgb(255,255,210) !important;
	line-height: 30px !important;
	margin-bottom: 40px !important;
}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
