<?php get_header(); ?>
	<style media="screen">
		.postcontainers{
			overflow: hidden;
		}
		.post_image_containers{
			height: 200px;
			margin-top: auto;
			margin-bottom: auto;
		}
		span{
			display: none;
		}
		.posts_images{
			border-radius: 5px;
			width: 100% !important;
	    height: 100% !important;
	    background-position: center center !important;
	    background-size: cover !important;
	    background-repeat: no-repeat !important;
		}
		.post_text_containers{
			height: 200px;
			margin-top: auto;
			margin-bottom: auto;
		}
		.template_button_orange{
			margin-bottom: 0;
			position: absolute;
			bottom: 0;
			width: 100%;
		}
		.Posts_fabook_container{
			border-radius: 5px;
		}
		h2{
			margin-top: 0;
		}
		.template_breakline{
			display: block;
		}
		@media screen and (max-width: 800px){
			.template_breakline{
				display: block;
			}
			h2{
				margin-top: 0.83em;
			}
		}
		@media screen and (max-width: 700px){
			.Posts_fabook_container{
				display: none;
			}
		}

	</style>
	<main role="main">
		<!-- section -->
		<div class="template_image_header" style='background: url("<?php the_field('header_image'); ?>");'>
			<div class="template_image_header_cont">
				<h1><?php the_field('header_text'); ?></h1>
			</div>
		</div>

		<section  class="template_section">

<div class="template_container_2_3_l">
	<?php
	// the query
	$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
	<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$the_query = new WP_Query( 'posts_per_page=3&paged=' . $paged );
	?>
	<?php if ( $wpb_all_query->have_posts() ) : ?>




			<!-- the loop -->
			<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
				<div class="template_container_1 postcontainers">
					<div class="template_container_1_2_l post_image_containers">
						<div class="posts_images" style='background: url("<?php the_field('header_image'); ?>");'>
						</div>
					</div>
					<div class="template_container_1_2_r post_text_containers">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<a href="<?php the_permalink(); ?>"><button class="template_button_orange template_button_right" type="button" name="button">Bekijk Meer</button></a>
					</div>
					<div class="template_breakline"></div>
				</div>
				<!-- <div class="template_container_1"> -->
				<!-- </div> -->
			<?php endwhile; ?>
			<!-- end of the loop -->

			<?php wp_reset_postdata(); ?>

	<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

</div>
<div class="template_container_1_3_r Posts_fabook_container">
<div class="fb-page" data-href="https://www.facebook.com/Dutch-WoodenBoat-Festival-145754096181287/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Dutch-WoodenBoat-Festival-145754096181287/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Dutch-WoodenBoat-Festival-145754096181287/"></a></blockquote></div>
</div>

		</section>
		<!-- /section -->
	</main>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v3.0&appId=1128113257228594&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
