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

	<section>
		<div class="meld-je-aan_container">
			<p><?php the_field('main_text'); ?></p>

			<div class="facebook-evenement">
				<a href="https://www.facebook.com/Dutch-WoodenBoat-Festival-145754096181287/">
					<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.jpg" alt="fb icon"><p>Naar het evenement</p>
				</a>
			</div>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
				<?php comments_template( '', true ); // Remove if you don't want comments ?>
				<br class="clear">
			</article>
			<!-- /article -->
			<?php endwhile; ?>

			<?php else: ?>
			<!-- article -->
			<!-- /article -->
			<?php endif; ?>
		</div>
	</section>
	<!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
