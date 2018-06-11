<?php get_header(); ?>
<style media="screen">
	.vragen_button{
		display: none;
	}
</style>
<main role="main">
	<!-- section -->

	<div class="template_image_header" style='background: url("<?php the_field('header_image'); ?>");'>
		<div class="template_image_header_cont">
			<h1><?php the_field('header_text'); ?></h1>
		</div>
	</div>


	<section class="template_section">
		<div class="contact-block--right">
			<h2><?php the_field('contact_title'); ?></h2>
			<p><?php the_field('contact_text'); ?></p>
			<div class="block-right-icons">
				<img src="<?php echo get_template_directory_uri(); ?>/img/telefoon-icon.png" alt="tel icon"><p><?php the_field('contact_number'); ?></p>
			</div>
			<div class="block-right-icons">
				<img src="<?php echo get_template_directory_uri(); ?>/img/email-icon.png" alt="email icon"><p><?php the_field('contact_email'); ?></p>
			</div>
			<div class="block-right-icons">
				<img src="<?php echo get_template_directory_uri(); ?>/img/locatie-icon.png" alt="locatie icon"><p><?php the_field('contact_adres'); ?><p>
			</div>

			<strong>Wij zijn ook te vinden op:</strong>
			<div class="socialmedia">
				<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="Facebook logo" title="Volg ons op Facebook">
				<img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="linkedin logo" title="Volg ons op Linkedin">
			</div>
		</div>
		<div class="contact-block">

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
