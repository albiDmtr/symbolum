<?php
/**
 * The sidebar containing the main widget area.

 Annyi cikket akarunk generálni (desktopon), hogy a hossza a cikkével legyen kb. azonos
 Generáljon le max 10-et, és legyen sticky/tűntesse el, ami túllóg
 *
 * @package storefront
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
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
			    	<p><?php the_excerpt(); ?></p>
				</a>
			</div>
			<hr>

            <?php
            }
        }
	?>

</div><!-- #secondary -->
<style type="text/css">
	#page {
		overflow: visible !important;
	}
	#secondary {
		text-align: center;
	}
	.sidebar-post-img {
		background-size: cover;
		background-position: 50% 50%;
		width: 100%;
		height: 120px;
		border-radius: 3px;
	}
	.sidebar-post {
		text-align: left;
		margin-bottom:10px;
		transition: 0.3s;
	}
	.sidebar-post:hover {
		filter: saturate(120%) brightness(120%);
	}
	.sidebar-post p {
		font-size: 11px;
		margin: 5px !important;
	}
	.sidebar-post h2 {
		margin: 5px !important;
		font-size: 17px !important;
	}
	@media (min-width: 768px) {
		#secondary {
			border-left: solid 1px rgb(180,180,180);
			padding-left: 0.7%;
			margin-top: 5px;
			position: sticky !important;
			top:70px;
		}
	}
	hr:last-of-type {
		display: none;
	}
</style>
<script type="text/javascript">
	mainH = document.querySelector('#main').offsetHeight;
	secondaryH = document.querySelector('#secondary').offsetHeight;
	while (secondaryH > mainH) {
		document.querySelector('.sidebar-post:last-of-type').remove();
		document.querySelector('#secondary hr:last-of-type').remove();
		secondaryH = document.querySelector('#secondary').offsetHeight;
	}

</script>