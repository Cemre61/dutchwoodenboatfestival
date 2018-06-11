<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="template_section">

			<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>


			<?php
			// the query to set the posts per page to 3
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array('posts_per_page' => 3, 'paged' => $paged );
			query_posts($args); ?>
			<!-- the loop -->
			<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
					<!-- rest of the loop -->
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
					<!-- the title, the content etc.. -->
			<?php endwhile; ?>
			<!-- pagination -->
			<?php next_posts_link(); ?>
			<?php previous_posts_link(); ?>
			<?php else : ?>
			<!-- No posts found -->
			<?php endif; ?>



			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
