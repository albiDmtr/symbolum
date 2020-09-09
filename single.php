<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

/*
Mit akarunk elérni?
legyen két cucc mindig egymás mellett (a 2. mérete úgy változzon, hogy mindig kiférjen),
és mindig centerelve legyenek egymáshoz képest.

*/
// facebook title, description, és kép legyen meg BOTTOM UP!

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<img src="<?php the_post_thumbnail_url() ?>" id="main-post-thumbi">
				<span id="main-title"><h1><?php $_SESSION['main_title'] = get_the_title(); the_title(); ?></h1>
					<div id="vertical-centerer">
						<img style="position: relative;" src="<?php $author_id=$post->post_author; echo get_avatar_url(2); ?>" id="profile-img">
						<p style="position: relative;"><?php echo __('Written by Piroska Molnar','sy') . ', ' . get_the_modified_date(); ?></p>
					</div>
				</span>
				<script type="text/javascript">console.log(<?php echo $author_id; ?>);</script>
		<?php
		while ( have_posts() ) :
			the_post();
			?>
	<div id="main-content"><?php
				the_content(); ?></div>
	<div id="more-stories"><a href="<?php echo get_site_url() ?>/stories"><p><?php _e('More stories','sy'); ?></p></a></div>
		<?php		comments_template();
		endwhile; // End of the loop.
		?>
		    <?php
        wp_reset_postdata(); /* Restore the original queried page to the $post variable */
    ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<style type="text/css">
	#vertical-centerer {
		width: 100%;
		padding:0;
	}
	#profile-img {
		width: 45px;
		height: 45px;
		border-radius: 50px !important;
		display: inline-block !important;
	}
	#main-title h1 {
		font-size: 55px !important;
		margin:0 !important;
	}
	#main-title p {
		font-size:18px !important;
		display: inline-block !important;
		width: calc(95% - 45px);
		position: relative;
		top: -15px;
		margin: 0 0 1px 10px;
	}
	@media (max-width: 528px) {
		#profile-img {
			display: none !important;
		}
		#main-title p {
			position: relative;
			top: 0;
			margin: 0 0 1px 0;
		}
	}
	#main {
		margin-bottom: 10px !important;
	}
	
	#main-content {
		margin-top: 20px;
	}
	.aligncenter img{
	}
	#more-stories {
		width: 110%;
		position: relative;
		left:-5%;
		text-align: center;
	}
	@media (max-width: 568px) {
		#more-stories {
			width: 90%;
			margin-left: 10%;
		}
	}
	#more-stories p {
		font-size: 20px;
		background-color: #3b3c3f;
		color: rgb(200,168,88);
		border-radius: 5px;
		padding:10px;
		transition: 0.3s;
	}
	#more-stories p:hover {
		color: #3b3c3f;
		background-color: rgb(200,168,88);
	}
	#main-post-thumbi{
		object-fit: contain;
		width: 100%;
		max-height: 400px;
		margin-top: 20px;
		margin-bottom: 20px;
	}
	#main-content p:first-of-type{
		font-weight: bolder;
	}
	.col-full {
		margin-top: 20px !important;
	}
</style>
<script type="text/javascript">
	document.querySelector('#main-content p:first-of-type').after(document.querySelector('#main-post-thumbi'));
	document.querySelector('#main-content img:first-of-type').setAttribute('tag','og:image');
</script>
<?php
do_action( 'storefront_sidebar' );
get_footer();
