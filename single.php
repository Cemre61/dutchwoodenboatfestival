<?php get_header(); ?>

<style media="screen">
	.submit{
		clear:both;
		float: left;
		position: relative;
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		color: #d8d5d8;
		background-color: #4f6949;
		border: none;
		padding: 1em 1em 1em 1em;
		font-weight: bold;
		font-size: 1em;
		border-radius: 0;
		transition: .3s;
		border: 1px solid transparent;
		margin-top: calc(15px / 2);
		margin-bottom: calc(15px / 2);
	}
	.submit:hover{
		background-color: #87a57f;
	}
	.pageButtons a{
		font-weight: bold;
		text-decoration: none;
		color: #376192;
	}
	.buttons{
		padding-top: 50px;
		padding-bottom: 40px;
		max-width: 700px;
	}
	.previous-button{
		float: left;
	}
	.next-button{
		float: right;
	}
	p{
		max-width: 700px;
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

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			<span class="date"> Gepubliceerd op: <?php the_time('j F Y'); ?>, <?php the_time('G:i '); ?></span>
			<br>

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>


			<!-- post details -->
			<span class="author">Dit bericht werd geplaatst door:  <?php the_author(); ?> </span>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->
		<div class="buttons">
		  <span class=" pageButtons previous-button"><?php previous_post_link( '%link', '<i class="fas fa-chevron-circle-left"></i> Vorige') ?></span>
		  <span class=" pageButtons next-button"><?php next_post_link( '%link', 'Volgende <i class="fas fa-chevron-circle-right"></i>'); ?></span>
		</div>
	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
