<?php get_header(); ?>

	<main role="main">
		<!-- section -->
			<div class="template_image_header" style='background: url("<?php the_field('header_image'); ?>");'>
				<div class="template_image_header_cont">
					<h1><?php the_field('header_text'); ?></h1>
				</div>
			</div>
			

		<section class="template_section">

				<div class="template_container_1_2_l">
					<p class="gray"><b class="black">datum:</b> <?php the_field('datum'); ?></p>
					<p class="green"><b class="black">entree:</b> <?php the_field('prijs'); ?></p>
					<p><b>locatie</b></p>
					<p><?php the_field('adres1'); ?>,</p>
					<p><?php the_field('adres2'); ?></p>
					<?php the_field('beschrijving_adres'); ?>
					<div class="over-imagecont">

						<div class="imageholder" style='background-image:url("<?php the_field('locatie'); ?>")'>
						</div>

					</div>
				</div>
				<div class="template_container_1_2_r">

					<?php if ( have_rows('over') ):

					while ( have_rows('over') ) : the_row(); ?>
					<p><b><?php the_sub_field('title'); ?></b></p>
					<?php the_sub_field('text'); ?><br><br>
					<?php endwhile; ?>

					<?php endif; ?>
				</div>
		</section>
		<!-- /section -->
	</main>


<script type="text/javascript">
window.addEventListener("load", function () {

});
</script>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
