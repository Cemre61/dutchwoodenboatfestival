<?php get_header(); ?>

	<main role="main">
		<div class="template_image_header" style='background: url("<?php the_field('header_image'); ?>");'>
	<div class="template_image_header_cont">
		<h1><?php the_field('header_text'); ?></h1>
	</div>
</div>
<div class="crumb_cont">
	<?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
</div>
		<!-- section -->
		<section>
      <?php
      $images = get_field('gallery');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      if( $images ): ?>
            <div class="imagecontainer">
              <?php foreach( $images as $image ): ?>
                <div class="images" id=<?php echo $image['ID']?> style='background-image:url("<?php echo $image['url']?>")' >
                  <div class="text">
                    <p class="caption"><?php echo $image['caption']?></p>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
						<div id="fullscreen-image" >
							<div id="closeFullscreen">
								<img src="<?php echo get_template_directory_uri(); ?>/img/close-button.png" alt="close" class="close-button">
							</div>
						</div>
      <?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<script type="text/javascript">
window.addEventListener("load", function () {


var fullscreen = document.getElementById('fullscreen-image');
var images = document.getElementsByClassName('images');
var closeFullscreen = document.getElementById('closeFullscreen');


			 for(var i = 0; i < images.length; i++) {
					var image = images[i];
					image.addEventListener("click", function() {
						fullscreen.style.backgroundImage = this.style.backgroundImage;
						fullscreen.style.display = "block";
						TweenMax.to(fullscreen, .5, {scale:1, opacity:1});
					});
			 }

				 // var tl = new TimelineMax();
				 // tl.staggerTo(".images", .1, {display:"block"}, .1);
				 // tl.staggerTo(".images", .1, {opacity:1}, .5, .1);


			 // tl.staggerFrom(".images", 1, {y:600}, 3)


			 closeFullscreen.addEventListener("click",function() {
				TweenMax.to(fullscreen, .5, {scale:0, opacity:0});
				fullscreen.style.display = "none";
			});


});
</script>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
