<?php /* Template Name: Template 2 coloms */ get_header(); ?>
<style media="screen">
	.custompage_images{
		overflow: hidden;
    position: relative;
    width: 100%;
    padding-top: 100%;
    float: left;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
	}
</style>
	<main role="main">

		<div class="template_image_header" style='background: url("<?php the_field('header_image'); ?>");'>
			<div class="template_image_header_cont">
				<h1><?php the_field('header_text'); ?></h1>
			</div>
		</div>


		<section class="template_section">

			<div class="template_container_1_2_l">
				<?php the_field('text1'); ?>
			</div>
			<div class="template_container_1_2_r">
				<?php the_field('text2'); ?>
			</div>
			<?php
      $images = get_field('images');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
			$number = 0;

      if( $images ): ?>
            <div class="imagecontainer">
              <?php foreach( $images as $image ): ?>
								<div class="<?php
								if ($number == 3) {
									echo 'template_container_1_4_r';
								}
								elseif ($number == 7) {
									echo 'template_container_1_4_r';
								}
								else {
									echo 'template_container_1_4_l';
								}?>">
								<div class="custompage_images canprevieuw" id=<?php echo $image['ID']?> style='background-image:url("<?php echo $image['url']?>")' >
                </div>
								</div>
								<?php $number ++; ?>
              <?php endforeach; ?>
            </div>
      <?php endif; ?>

		</section>
		<!-- /section -->
	</main>
<?php get_sidebar(); ?>

<script>
		var template_container_1_2_l = document.getElementById('lipsum');
		var template_container_1_2_r = document.getElementsByClassName('template_container_1_2_r')[0];

if (template_container_1_2_l.firstChild.nextSibling.tagName == "P") {
	template_container_1_2_l.firstChild.nextSibling.style.paddingTop = "43px";
}
if (template_container_1_2_r.firstChild.nextSibling.tagName == "P") {
	template_container_1_2_r.firstChild.nextSibling.style.paddingTop = "43px";
}
</script>


<?php get_footer(); ?>
