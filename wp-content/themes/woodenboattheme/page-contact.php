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
		<div class="template_container_1">
			<div class="contact-block">
				<p><?php the_field('contact_text'); ?></p>
			</div>
		</div>

		<div class="contact-block--right">
			<h2>Neem contact op via</h2>
			<div class="block-right-icons">
				<a href="tel:<?php the_field('contact_number'); ?>"><i class="fas fa-mobile-alt"></i><?php the_field('contact_number'); ?></a>
			</div>
			<div class="block-right-icons">
				<a href="mailto:<?php the_field('contact_email'); ?>"><i class="fas fa-envelope"></i><?php the_field('contact_email'); ?></a>
			</div>
			<div class="block-right-icons map">
				<a href="#wpgmza_map"><i class="fas fa-map-marker-alt"></i><?php the_field('contact_adres'); ?></a>
			</div>
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
	</section>
	<!-- /section -->
	<?php echo do_shortcode("[wpgmza id='1']"); ?>
</main>

<script type="text/javascript">
	jQuery(document).ready(function(){
		// Select all links with hashes
		jQuery('a[href*="#"]')
		// Remove links that don't actually link to anything
			.not('[href="#"]')
			.not('[href="#0"]')
			.click(function(event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
				&&
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = jQuery(this.hash);
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					jQuery('html, body').animate({
						scrollTop: target.offset().top
					}, 1000, function() {
						// Callback after animation
						// Must change focus!
						var $target = jQuery(target);
						$target.focus();
						if ($target.is(":focus")) { // Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						};
					});
				}
			}
		});
	});

</script>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
