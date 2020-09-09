<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>
</div>
<div id="fb-root"></div>
<?php _e('<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=705924279973468&autoLogAppEvents=1" nonce="rdgQjxju"></script>','sy'); ?>
<div id="welcome">
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
</div>
<div class="col-full">
<div id="main-feed">
			<?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
    	$i = 0;
        while($post_query->have_posts() && $i < 10 ) {
        	$i++;
            $post_query->the_post();
            if ($_SESSION['main_title'] == get_the_title()) { continue; }
            ?>
            <div class="sidebar-post">
				<a href="<?php echo get_permalink() ?>">
					<div class="sidebar-post-img" style="<?php if ( get_the_post_thumbnail_url() == '' ) {echo 'display: none;';} ?> background-image: url(<?php the_post_thumbnail_url() ?>);"></div>
					<h2><?php the_title(); ?></h2>
			    	<?php the_excerpt(); ?>
			    	<h4><?php _e('Continue reading','sy'); ?></h4>
				</a>
				<hr>
			</div>

            <?php
            }
        }
	?>
</div>
<div id="sidebar-right">

	<input type="text" name="" placeholder="🔍 Search posts" onchange="submit()">
	<div class="sidebar-cont">
		<h4><?php _e('Stories posted at','sy'); ?></h4>
		<?php wp_get_archives('type=monthly'); ?>
	</div>
		<div id="fb-centerer">
			<div class="fb-page" data-href="https://www.facebook.com/Symbolum-107047744417324" data-tabs="timeline" data-width="300" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Symbolum-107047744417324" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Symbolum-107047744417324">Symbolum</a></blockquote></div>
		<div class="sidebar-cont">
			<p><?php _e('Write me:','sy'); ?><br><a href="mailto:message@symbolum.art"><?php _e('message@symbolum.art','sy'); ?></a></p>
		</div>
	</div>
</div>

<style type="text/css">
	/* welcome section */
	article {
		margin-bottom: 0 !important;
	}
	#main-css-apply {
    padding-top: 0 !important;
	}
	#welcome {
		padding-top: 95px;
		padding-bottom: 30px;
		padding-left: 10%;
		padding-right: 10%;
		width: 100%;
		text-align: center;
		background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/added/stories_bg.jpg');
		background-size: cover;
		background-color: black;
		color: white !important;
	}
	#welcome h1 {
		color: white !important;
	}
	.col-full {
		margin:auto !important;
		width: 1210px !important;
		max-width: 100% !important;
		padding: 0 !important;
	}
	/* sidebar */
	#sidebar-right input {
		width: 100%;
		font-family: 'Poppins', sans-serif;
		border-radius: 3px;
	}
	#sidebar-right input:focus {
		outline: none;
	}
	#sidebar-right {
		width: 300px;
		padding: 20px;
		padding-top: 25px;
		float:right;
		position: sticky;
		top:65px;
	}
	.sidebar-cont {
		padding:20px;
		border-radius: 3px;
		background-color: #f2f2f2;
		margin-bottom: 20px;
		margin-top: 20px;
	}
	#page {
		overflow: visible !important;
	}
	.sidebar-cont p {
		margin:0 !important;
	}
	#fb-centerer {
		width: 100%;
	}

	/* main */
	.sidebar-post:nth-child(2n){
		text-align: right;
	}
	.sidebar-post:nth-child(2n) h4{
		margin-left: calc(100% - 200px) !important;
	}
	#main-feed {
		padding-left:20px;
		padding-right: 20px;
		width: 100%;
		max-width: 900px;
		padding-top: 25px;
		float: left;
	}
	.sidebar-post-img {
		background-size: cover;
		background-position: 50% 50%;
		width: 100%;
		height: calc(150px + 13vw);
		border-radius: 3px;
	}
	.sidebar-post h2 {
		margin:0 !important;
		padding-top:10px;
		padding-bottom:10px;
		font-size: 28px !important;
	}
	.sidebar-post p {
		margin-bottom: 20px !important;
		font-size: 17px !important;
	}
	.sidebar-post h4 {
		background: rgb(48, 44, 41);
		color: rgb(200,168,88) !important;
		padding: 8px !important;
		width: 200px !important;
		font-size: 18px !important;
		border-radius: 3px;
		text-align: center;
		transition: 0.3s;
		cursor: pointer;
		margin:0 0 20px 0 !important;
	}
	.sidebar-post h4:hover {
		transform: scale(1.1);
		filter: brightness(125%);
	}
	@media (max-width: 1210px) {
		#sidebar-right {
			width:100% !important;
		}
		#main-feed {
			margin:auto !important;
			float: initial !important;
		}
		#fb-centerer span {
			margin-left: calc(50% - 140px);
		}
	}
</style>
<script type="text/javascript">
	function submit() {
		val = document.querySelector('#sidebar-right input').value;
		if (val) {
			window.location.href = 'https://www.facebook.com/page/107047744417324/search/?q=' + document.querySelector('#sidebar-right input').value;
		}
	}
</script>

<?php
get_footer();
