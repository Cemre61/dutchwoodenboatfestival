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
  <!-- Made by Kevin -->
	<section class="container_k">
    <div class="content_k">
				<div class="contentpart1">
					<h3>Vervoer</h3>
					<div class="questions">
		      <?php if( have_rows('faq_list_traffic') ): ?>
		      	<?php while( have_rows('faq_list_traffic') ): the_row();
		      		// vars
		      		$question = get_sub_field('question');
		      		$anwser = get_sub_field('anwser');
		      	?>
		        <div class="question_k">
		          <?php echo $question; ?> <span class="plus"> +</span>
		          <span class="anwser_k"><?php echo $anwser; ?></span>
		        </div>
		      	<?php endwhile; ?>
		      <?php endif; ?>
				</div>
			</div>

					<div class="contentpart2">
						<h3>Toegangkelijkheid</h3>
						<div class="questions">
							<?php if( have_rows('faq_list') ): ?>
								<?php while( have_rows('faq_list') ): the_row();
									// vars
									$question = get_sub_field('question');
									$anwser = get_sub_field('anwser');
								?>
								<div class="question_k">
									<?php echo $question; ?><span class="plus"> +</span>
									<span class="anwser_k"><?php echo $anwser; ?></span>
								</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
      <!-- 2th row -->




    <!-- End of Kevin's creations -->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
  		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  			<?php the_content(); ?>
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
<script type="text/javascript">
  window.addEventListener('load', function () {

    var showAnwser = document.getElementsByClassName('question_k');
    var i;

    for(i = 0; i < showAnwser.length; i++){
      showAnwser[i].addEventListener('click', function(){
        if(this.classList.contains("clicked")) {
					this.getElementsByClassName('plus')[0].innerHTML = " +";
					this.classList.remove("clicked");
        } else {
					this.getElementsByClassName('plus')[0].innerHTML = " -";
		      this.classList.add("clicked");
        }
      });
    }

  });

</script>
