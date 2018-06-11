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
		<section>
			<div class="template_image_header" style='background: url("<?php the_field('header_image'); ?>");'>
				<div class="template_image_header_cont">
					<h1><?php _e( 'posts voor', 'html5blank' ); echo get_the_author(); ?></h1>
				</div>
			</div>
			<div class="crumb_cont">
				<?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
			</div>
			<section  class="template_section">
		<?php if (have_posts()): the_post(); ?>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<!-- article -->
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
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
