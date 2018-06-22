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
		<section class="template_section">

			<div class="template_breakline"></div>

			<h1 class="template_txt_left">h1 .template_txt_left</h1>
			<h2 class="template_txt_left">h2 .template_txt_left</h2>
			<h3 class="template_txt_left">h3 .template_txt_left</h3>

			<h1 class="template_txt_center">h1 .template_txt_center</h1>
			<h2 class="template_txt_center">h2 .template_txt_center</h2>
			<h3 class="template_txt_center">h3 .template_txt_center</h3>

			<h1 class="template_txt_right">h1 .template_txt_right</h1>
			<h2 class="template_txt_right">h2 .template_txt_right</h2>
			<h3 class="template_txt_right">h3 .template_txt_right</h3>

			<div class="template_breakline"></div>

			<p class="template_txt_left">p .template_txt_left Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at interdum leo. Phasellus vestibulum lacinia turpis sit amet sollicitudin. Nullam congue tempor nisi, eu vulputate arcu condimentum et. Vestibulum vehicula, felis id cursus elementum, nunc tortor fringilla erat, a blandit enim augue quis neque. Suspendisse potenti. Cras erat enim, ornare ut auctor ut, porta eu erat. Quisque sed sem sit amet est posuere venenatis. In nec tortor urna. Phasellus elementum vulputate dolor. Aliquam eget lorem ipsum. Praesent nec justo est.</p>

			<p class="template_txt_center">p .template_txt_center Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at interdum leo. Phasellus vestibulum lacinia turpis sit amet sollicitudin. Nullam congue tempor nisi, eu vulputate arcu condimentum et. Vestibulum vehicula, felis id cursus elementum, nunc tortor fringilla erat, a blandit enim augue quis neque. Suspendisse potenti. Cras erat enim, ornare ut auctor ut, porta eu erat. Quisque sed sem sit amet est posuere venenatis. In nec tortor urna. Phasellus elementum vulputate dolor. Aliquam eget lorem ipsum. Praesent nec justo est.</p>

			<p class="template_txt_right">p .template_txt_right Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at interdum leo. Phasellus vestibulum lacinia turpis sit amet sollicitudin. Nullam congue tempor nisi, eu vulputate arcu condimentum et. Vestibulum vehicula, felis id cursus elementum, nunc tortor fringilla erat, a blandit enim augue quis neque. Suspendisse potenti. Cras erat enim, ornare ut auctor ut, porta eu erat. Quisque sed sem sit amet est posuere venenatis. In nec tortor urna. Phasellus elementum vulputate dolor. Aliquam eget lorem ipsum. Praesent nec justo est.</p>

			<div class="template_breakline"></div>

				<button class="template_button_orange" type="button" name="button">.template_button_orange</button>
				<button class="template_button_green" type="button" name="button">.template_button_green</button>

			<div class="template_breakline"></div>

				<button class="template_button_orange template_button_large" type="button" name="button">.template_button_large</button>
				<button class="template_button_green template_button_large" type="button" name="button">.template_button_large</button>

			<div class="template_breakline"></div>

			<button class="template_button_green template_button_left" type="button" name="button">.template_button_left</button>

			<!-- <div class="template_breakline"></div> -->

			<button class="template_button_orange template_button_center" type="button" name="button">.template_button_center</button>

			<!-- <div class="template_breakline"></div> -->

			<button class="template_button_green template_button_right" type="button" name="button">.template_button_right</button>

			<div class="template_breakline"></div>

			<div style="background-color: #e9e9e9;" class="template_container_1">
				<h2>.template_container_1</h2>
			</div>

			<div class="template_breakline"></div>

			<!-- <div style="background-color: #e9e9e9;" class="template_container_1_bigg">
				<h2>.template_container_1_bigg</h2>
			</div> -->

			<!-- <div class="template_breakline"></div> -->

			<div style="background-color: #e9e9e9;" class="template_container_1_2_l">
				<h2>.template_container_1_2_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_2_r">
				<h2>.template_container_1_2_r</h2>
			</div>

			<div class="template_breakline"></div>

			<div style="background-color: #e9e9e9;" class="template_container_1_3_l">
				<h2>.template_container_1_3_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_3_l">
				<h2>.template_container_1_3_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_3_r">
				<h2>.template_container_1_3_r</h2>
			</div>

			<div class="template_breakline"></div>

			<div style="background-color: #e9e9e9;" class="template_container_2_3_l">
				<h2>.template_container_2_3_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_3_r">
				<h2>.template_container_1_3_r</h2>
			</div>

			<div style="background-color: #e9e9e9;" class="template_container_1_3_l">
				<h2>.template_container_1_3_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_2_3_r">
				<h2>.template_container_2_3_r</h2>
			</div>

			<div class="template_breakline"></div>

			<div style="background-color: #e9e9e9;" class="template_container_1_4_l">
				<h2>.template_container_1_4_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_4_l">
				<h2>.template_container_1_4_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_4_l">
				<h2>.template_container_1_4_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_4_r">
				<h2>.template_container_1_4_r</h2>
			</div>

			<div class="template_breakline"></div>

			<div style="background-color: #e9e9e9;" class="template_container_1_6_l">
				<h2>.template_container_1_6_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_4_6_l">
				<h2>.template_container_4_6_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_6_r">
				<h2>.template_container_1_6_r</h2>
			</div>

			<div style="background-color: #e9e9e9;" class="template_container_4_6_l">
				<h2>.template_container_4_6_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_6_l">
				<h2>.template_container_1_6_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_6_r">
				<h2>.template_container_1_6_r</h2>
			</div>

			<div style="background-color: #e9e9e9;" class="template_container_1_6_l">
				<h2>.template_container_1_6_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_1_6_l">
				<h2>.template_container_1_6_l</h2>
			</div>
			<div style="background-color: #e9e9e9;" class="template_container_4_6_r">
				<h2>.template_container_4_6_r</h2>
			</div>

			<div class="template_breakline"></div>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
				<?php comments_template( '', true ); // Remove if you don't want comments ?>
				<br class="clear">
				<?php edit_post_link(); ?>
			</article>
			<!-- /article -->
		<?php endwhile; ?>


		<?php else: ?>
			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->
		<?php endif; ?>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
