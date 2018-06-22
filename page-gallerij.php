<?php get_header(); ?>
<style media="screen">
	h2{
		padding-left: 8px;
	}
	section:nth-child(1n){
		padding-top: 42px;
	}
	.gallery_video{
		min-width: 100%;
		min-height: 100%;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.fa-play{
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
	}
	.video-overlay-button {
		pointer-events: none;
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    padding: 10px calc(50% - 50px);
    position: absolute;
    top: 0;
    left: 0;
		transform: scale(0.6);
    display: block;
    opacity: 0.95;
    cursor: pointer;
    transition: opacity 150ms;
}
</style>
	<main role="main">
		<div rel="preload" class="template_image_header" style='background: url("<?php the_field('header_image'); ?>");'>
	<div class="template_image_header_cont">
		<h1><?php the_field('header_text'); ?></h1>
	</div>
</div>

		<!-- section -->
		<section>


			<?php if( have_rows('gallerij_categorie') ): ?>
				<?php while( have_rows('gallerij_categorie') ): the_row();
					// vars
					$title = get_sub_field('category_titel');
					$images = get_sub_field('gallery');
				?>
				<div class="imagecontainer">
					<h2><?php echo $title; ?></h2>
					<?php foreach( $images as $image ): ?>
						<?php
						$file_parts = pathinfo($image['url']);
						if ($file_parts['extension'] == "mp4"):?>
						<div class="images video_image">
							<video class="gallery_video">
							  <source src="<?php echo $image['url']?>#t=2" type="video/mp4">
							</video>
							<svg id="svg-overlay" class="video-overlay-button" viewBox="0 0 200 200" alt="Play video">\
							<circle cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#fff"/>\
							<polygon points="70, 55 70, 145 145, 100" fill="#fff"/>\
							</svg>
						</div>
						<?php endif; ?>
						<?php if ($file_parts['extension'] != "mp4"):?>
							<div rel="preload" class="images canprevieuw" id=<?php echo $image['ID']?> style='background-image:url("<?php echo $image['url']?>")' >
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<script type="text/javascript">
window.addEventListener("load", function () {
 var video_image = document.getElementsByClassName('video_image');

 for(var i = 0; i < video_image.length; i++) {
	 var video = video_image[i];
	 video.addEventListener("click", function() {
		 if (video.requestFullscreen) {
			video.getElementsByClassName('gallery_video')[0].requestFullscreen();
		} else if (video.mozRequestFullScreen) {
			video.getElementsByClassName('gallery_video')[0].mozRequestFullScreen();
		} else if (video.webkitRequestFullscreen) {
			video.getElementsByClassName('gallery_video')[0].webkitRequestFullscreen();
		}
		video.getElementsByClassName('gallery_video')[0].play();
	});
	video.getElementsByClassName('gallery_video')[0].addEventListener("mozfullscreenchange",function(){
			if (document.mozFullScreen == false) {
				video.getElementsByClassName('gallery_video')[0].pause();
			}
	}, false);

	video.getElementsByClassName('gallery_video')[0].addEventListener("webkitfullscreenchange",function(){
			if (document.webkitIsFullScreen == false) {
				video.getElementsByClassName('gallery_video')[0].pause();
			}
	}, false);
 }
});


</script>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
