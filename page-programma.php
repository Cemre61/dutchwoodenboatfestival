<?php get_header(); ?>

<style media="screen">
.table-day {
	margin-bottom: 35px;
}
.title_planning {
		padding: 10px 30px;
    position: relative;
    color: white;
    text-align: center;
    margin-bottom: 0;
    width: 100px;
		float: left;
		margin-top: 0;

}
.template_image_header {
    margin-bottom: 35px;
}
.title_container{
	width: 750px;
	margin: 0 auto;
	overflow: auto;
	border-spacing: 0;
  background-color: #1D374C;
}
.date{
	position: relative;
	float: left;
}
@media screen and (max-width: 767px){
.title_planning:first-child {
    width: 64px;
		padding: 10px 14px;
}
.title_container{
	width: 100%;
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

	<section>
		<div class="block-planning">
			<div class="title_container">
								<h2 class="title_planning">Dag 1</h2>
								<h2 class="title_planning">03/05/2019</h2>
			</div>
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

<div class="title_container">
					<h2 class="title_planning">Dag 2</h2>
					<h2 class="title_planning">04/05/2019</h2>
</div>
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
