<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php
			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<style type="text/css">
	.posted-on, .post-author, .post-comments, .entry-taxonomy {
		display: none;
	}
	header h2 a{
		font-size: 45px !important;
		font-family: 'Philosopher' !important;
	}
	.page-title {
		background-color: rgb(48, 44, 41) !important;
		color: rgb(200,168,88) !important;
		border-radius: 3px;
		text-align: center;
		padding:8px;

	}
</style>
<?php
do_action( 'storefront_sidebar' );
get_footer();
