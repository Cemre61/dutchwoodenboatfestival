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
		<div class="block-planning">

			<h2>Dag 1</h2>
			<table class="table-day">

				<?php if ( have_rows('planning_dag_1') ):

				while ( have_rows('planning_dag_1') ) : the_row(); ?>
				<thead>
					<tr>
						<td><?php the_sub_field('planning_tijd'); ?></td>
						<td><?php the_sub_field('planning_tekst'); ?></td>
					</tr>
				</thead>


				<?php endwhile; ?>

				<?php endif; ?>

			</table>

			<h2>Dag 2</h2>
			<table class="table-day">


				<?php if( have_rows('planning_dag_2') ):

					while ( have_rows('planning_dag_2') ): the_row(); ?>

				<thead>
					<tr>
						<td><?php the_sub_field('planning_tijd'); ?></td>
						<td><?php the_sub_field('planning_tekst'); ?></td>
					</tr>
				</thead>


				<?php endwhile;

					endif; ?>
			</table>
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
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
