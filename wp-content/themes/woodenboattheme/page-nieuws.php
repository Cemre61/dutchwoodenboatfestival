<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<div class="template_image_header" style='background: url("<?php the_field('header_image'); ?>");'>
			<div class="template_image_header_cont">
				<h1><?php the_field('header_text'); ?></h1>
			</div>
		</div>
		<div class="crumb_cont">
			<?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
		</div>
		<section  class="template_section">

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
						<div class="template_container_1">
							<div class="template_image_header" style='background: url("<?php the_field('header_image'); ?>");'>
								<div class="template_image_header_cont">
									<h1><?php the_field('header_text'); ?></h1>
								</div>
							</div>
							<?php the_content(); ?>
							<a href="<?php the_permalink(); ?>"><button class="template_button_orange template_button_right" type="button" name="button">Bekijk Meer</button></a>
						</div>
			    <?php endwhile; ?>
			    <!-- end of the loop -->

			    <?php wp_reset_postdata(); ?>

			<?php else : ?>
			    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
