<?php get_header(); ?>

<style media="screen">
	.slider_overlay{
		position: absolute;
		width: 100%;
		height: 100%;
		opacity: 0.3;
		background-color: black;
	}
	.template_section{
		min-height: inherit;
	}
	.post_image_containers{
		height: 200px;
		margin-top: auto;
		margin-bottom: auto;
	}
	.posts_images{
		border-radius: 5px;
		width: 100% !important;
		height: 100% !important;
		background-position: center center !important;
		background-size: cover !important;
		background-repeat: no-repeat !important;
	}
	.nieuwsContainer{
		min-height: inherit;
		overflow: auto;
	}
	.news_breakline{
		display: none;
	}
	.underNewsBreakline{
		max-width: 970px;
		left: 50%;
		transform: translateX(-50%);
	}
	@media screen and (max-width: 1200px) {
		.news_breakline{
			display: block;
		}
		.button_news2{
			display: none;
		}
		.underNewsBreakline{
			display: none;
		}
		.video-overlay > video.has-media-controls-hidden::-webkit-media-controls {
			display: inherit;
		}
	}

	@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
		/* IE10+ CSS styles go here */
		.current-menu-item {
			background: url(../img/golfje.svg) no-repeat center 34px;
		}
		.video-overlay-play-button, .video-overlay-play-button:hover {
			opacity: 0;
			visibility: hidden;
			display: none;
		}
		.header_bottom_bg {
			height: 367px;
		}
	}

	@supports (-ms-ime-align: auto) {
		/* IE Edge  CSS styles go here */
		.video-overlay-play-button, .video-overlay-play-button:hover {
			opacity: 0;
			visibility: hidden;
			display: none;
		}
	}

	@-moz-document url-prefix() {
		/* Firefox CSS styles go here */
		.video-overlay-play-button, .video-overlay-play-button:hover {
			opacity: 0;
			visibility: hidden;
			display: none;
		}
	}

	/* Safari 7.1+ CSS styles go here */
	_::-webkit-full-page-media, _:future, :root .video-overlay-play-button, .video-overlay-play-button:hover {
		opacity: 0;
		visibility: hidden;
		display: none;
	}

</style>
<main role="main">
	<!-- section -->
	<section>

		<div class="headerslider">
			<div class="bg_slider_image1 bg_slider_image" id="bg_slider_image1" style='background: url("<?php the_field('slider_foto1'); ?>");'></div>
			<div class="bg_slider_image2 bg_slider_image" id="bg_slider_image2" style='background: url("<?php the_field('slider_foto2'); ?>");'></div>
			<div class="bg_slider_image3 bg_slider_image" id="bg_slider_image3" style='background: url("<?php the_field('slider_foto3'); ?>");'></div>
			<div class="bg_slider_image4 bg_slider_image" id="bg_slider_image4" style='background: url("<?php the_field('slider_foto4'); ?>");'></div>
			<div class="bg_slider_image5 bg_slider_image" id="bg_slider_image5" style='background: url("<?php the_field('slider_foto5'); ?>");'></div>
			<div class="slider_overlay"></div>
		</div>
		<div class="header-bg">
			<div class="header_cont">
				<h1><?php the_field('header_title'); ?></h1>
				<p><?php the_field('header_text'); ?></p>
				<a class="header-btn btn-trailer" href="#"><span>Bekijk de trailer</span><i class="fas fa-play"></i></a>
				<a class="header-btn btn-meld-je-aan" target="_blank" href="<?php the_field('meldjeaan'); ?>" >Meld je aan! <i class="fas fa-chevron-right"></i></a>
			</div>
		</div>
		<div class="header_bottom_bg">
			<div class="newsletter-flex">
				<div class="newsletter">

					<h3>Blijf op de hoogte!</h3>
					<p>Schrijf je in voor de nieuwsbrief.</p>

					<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
					<div id="mc_embed_signup">
						<form action="https://dutchwoodenboatfestival.us18.list-manage.com/subscribe/post?u=4dced409d8326db747d4518e8&amp;id=edb25ec2f2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">

								<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="E-mail" required>
								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4dced409d8326db747d4518e8_edb25ec2f2" tabindex="-1" value=""></div>
								<div class="clear"><input type="submit" value="Verzend" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--End mc_embed_signup-->
		</div>

		<div class="arrow_down"></div>
		<section class="template_section">
			<div class="template_container_2_3_l">

				<div class="video_section">
					<div class="video-overlay">
						<video class="video" id="video" controls="controls">
							<i class="fas fa-play"></i>
							<source src="<?php the_field('video'); ?>#t=1" type="video/mp4">
						</video>
					</div>
				</div>

			</div>

			<div class="template_container_1_3_r">
				<div class="home_text">
					<h2><?php the_field('title'); ?></h2>
					<?php the_field('text'); ?>
				</div>
			</div>
			<div class="template_breakline"></div>
		</section>

		<section class="template_section nieuwsContainer">
			<!-- <div class="news_posts"> -->
			<h2 class="template_txt_center">Nieuws</h2>
			<!-- </div> -->
			<?php
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
			<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

			$the_query = new WP_Query( 'posts_per_page=3&paged=' . $paged );
			$counter = 0;
			$max = 4;
			?>
			<?php if ( $wpb_all_query->have_posts() ) : ?>

			<!-- the loop -->
			<?php while ( $wpb_all_query->have_posts()  and ($counter < $max)) : $wpb_all_query->the_post(); ?>
			<div class="template_container_news postcontainers">
				<div class="template_container_1_1_l post_image_containers">
					<div class="posts_images" style='background: url("<?php the_field('header_image'); ?>");'>
					</div>
				</div>
				<div class="template_container_1_1_l post_text_containers">
					<div class="post_text_height">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
					<a href="<?php the_permalink(); ?>"><button class="template_button_orange button_news" type="button" name="button">Lees verder <i class="fas fa-chevron-right"></i></button></a>
				</div>
				<div class="template_breakline news_breakline"></div>
			</div>
			<!-- <div class="template_container_1"> -->
			<!-- </div> -->
			<?php $counter++;?>
			<?php  endwhile; ?>
			<!-- end of the loop -->
			<?php wp_reset_postdata(); ?>

			<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</section>

		<a href="/b1.2/nieuws/" class="template_button_orange button_news2"> Bekijk meer <i class="fas fa-chevron-right"></i></a>
		<div class="template_breakline underNewsBreakline"></div>



		<!-- <div class="gallery_bg"></div> -->
		<div class="home_gallery">
			<?php
			$images = get_field('gallery');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			$i = 0;
			if( $images ): ?>
			<?php foreach( $images as $image ): ?>
			<?php $i += 1 ?>
			<div class="image_cont" id="cont<?php echo $i ?>">
				<div class="imageholder canprevieuw" style='background-image:url("<?php echo $image['url']?>")'>
				</div>
			</div>
			<?php endforeach; ?>
			<?php endif; ?>

			<div class="arrow arrow_left" id="arrow_left">
				<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="arrow" class="arrowl">
			</div>
			<div class="arrow arrow_right" id="arrow_right">
				<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="arrow" class="arrowr">
			</div>

			<form action="gallerij">
				<input type="submit" class="button" value="Bekijk alle afbeeldingen" />
			</form>
		</div>
	</section>
	<!-- /section -->
</main>

<script type="text/javascript">

	jQuery(document).ready(function(){
		jQuery('.btn-trailer').on("click", function(e){
			e.preventDefault();
			jQuery('html, body').animate({
				scrollTop: jQuery("#video").offset().top -150
			}, 1000);
			jQuery('#svg-overlay').addClass("is-hidden");
			jQuery('#video').get(0).play()
			jQuery('#video').removeClass('has-media-controls-hidden');
		});

		var videoPlayButton,
			videoOverlay = document.getElementsByClassName('video-overlay')[0],
			video = document.getElementsByTagName('video')[0],
			videoMethods = {
				renderVideoPlayButton: function() {
					if (videoOverlay.contains(video)) {
						this.formatVideoPlayButton()
						video.classList.add('has-media-controls-hidden')
						videoPlayButton = document.getElementsByClassName('video-overlay-play-button')[0]
						videoPlayButton.addEventListener('click', this.hideVideoPlayButton)
					}
				},

				formatVideoPlayButton: function() {
					videoOverlay.insertAdjacentHTML('beforeend', '\
<svg id="svg-overlay" class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">\
<circle cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#fff"/>\
<polygon points="70, 55 70, 145 145, 100" fill="#fff"/>\
	</svg>\
')
				},

				hideVideoPlayButton: function() {
					video.play()
					videoPlayButton.classList.add('is-hidden')
					video.classList.remove('has-media-controls-hidden')
					video.setAttribute('controls', 'controls')
				}
			}

		videoMethods.renderVideoPlayButton()

	});




	document.addEventListener("DOMContentLoaded", function(event) {
		window.addEventListener("load", function () {

			TweenMax.fromTo(".pijl_naarbeneden", 1, {bottom:"4%"}, {bottom:"2%", yoyo: true, repeat:-1,ease: Power1.easeInOut});

			function hoverbutton() {
				TweenMax.to(this, .3, {scale:1.1});
			}
			function leavebutton() {
				TweenMax.to(this, .3, {scale:1});
			}


			window.addEventListener("resize", resize);

			resize();
			checkPos();

			var arrow_left = document.getElementById('arrow_left');
			var arrow_right = document.getElementById('arrow_right');

			var left3;
			var left2;
			var left1;
			var center;
			var right1;
			var right2;
			var right3;

			var counter = 1;
			var animationtime = .8;
			var canclickAgian = true;

			arrow_left.addEventListener("click", function() {
				if (canclickAgian) {
					counter -= 1;
					checkPos();
					canclickAgian = false;
					canclickAgianTimer();
				}
			});
			arrow_right.addEventListener("click", function() {
				if (canclickAgian) {
					counter += 1;
					checkPos();
					canclickAgian = false;
					canclickAgianTimer();
				}
			});
			function canclickAgianTimer() {
				setTimeout(function () {
					canclickAgian = true;
				}, animationtime*1000);
			}
			function resize() {

				TweenMax.fromTo(".pijl_naarbeneden", 1, {bottom:"4%"}, {bottom:"2%", yoyo: true, repeat:-1,ease: Power1.easeInOut});

				var window_width = document.getElementsByClassName('home_gallery')[0].innerWidth || document.getElementsByClassName('home_gallery')[0].clientWidth;
				if (window_width >= 700) {
					left3 = {left:-window_width*0.1 , x:"-50%", scale:.3, zIndex:2};
					left2 = {left:window_width*0.09, x:"-50%", y:"-15%", scale:.5, zIndex:3};
					left1 = {left:window_width*0.26, x:"-50%", y:"10%", scale:.7, zIndex:4};
					center = {left:window_width*0.5, x:"-50%", y:"40%", scale:1, zIndex:5};
					right1 = {left:window_width*0.74, x:"-50%", y:"10%", scale:.7, zIndex:4};
					right2 = {left:window_width*0.91, x:"-50%", y:"-15%", scale:.5, zIndex:3};
					right3 = {left:window_width*1.1, x:"-50%", scale:.3, zIndex:2};
				}
				else {
					left3 = {left:"-10%", x:"-50%", scale:.3, zIndex:2};
					left2 = {left:"-10%", x:"-50%", y:"-15%", scale:.3, zIndex:3};
					left1 = {left:"-3%", x:"-50%", y:"10%", scale:.8, zIndex:4};
					center = {left:"50%", x:"-50%", y:"40%", scale:1, zIndex:5};
					right1 = {left:"103%", x:"-50%", y:"10%", scale:.8, zIndex:4};
					right2 = {left:"110%", x:"-50%", y:"-15%", scale:.3, zIndex:3};
					right3 = {left:"110%", x:"-50%", scale:.3, zIndex:2};
				}
				checkPos();
			}


			function checkPos() {
				if (counter === 1) {
					TweenMax.set("#cont11", left3);
					TweenMax.to("#cont12", animationtime, left3);
					TweenMax.to("#cont13", animationtime, left2);
					TweenMax.to("#cont14", animationtime, left1);
					TweenMax.to("#cont1", animationtime, center);
					TweenMax.to("#cont2", animationtime, right1);
					TweenMax.to("#cont3", animationtime, right2);
					TweenMax.to("#cont4", animationtime, right3);
					TweenMax.set("#cont5", right3);
				}
				if (counter === 2) {
					TweenMax.set("#cont12", left3);
					TweenMax.to("#cont13", animationtime, left3);
					TweenMax.to("#cont14", animationtime, left2);
					TweenMax.to("#cont1", animationtime, left1);
					TweenMax.to("#cont2", animationtime, center);
					TweenMax.to("#cont3", animationtime, right1);
					TweenMax.to("#cont4", animationtime, right2);
					TweenMax.to("#cont5", animationtime, right3);
					TweenMax.set("#cont6", right3);
				}
				if (counter === 3) {
					TweenMax.set("#cont13", left3);
					TweenMax.to("#cont14", animationtime, left3);
					TweenMax.to("#cont1", animationtime, left2);
					TweenMax.to("#cont2", animationtime, left1);
					TweenMax.to("#cont3", animationtime, center);
					TweenMax.to("#cont4", animationtime, right1);
					TweenMax.to("#cont5", animationtime, right2);
					TweenMax.to("#cont6", animationtime, right3);
					TweenMax.set("#cont7", right3);
				}
				if (counter === 4) {
					TweenMax.set("#cont14", left3);
					TweenMax.to("#cont1", animationtime, left3);
					TweenMax.to("#cont2", animationtime, left2);
					TweenMax.to("#cont3", animationtime, left1);
					TweenMax.to("#cont4", animationtime, center);
					TweenMax.to("#cont5", animationtime, right1);
					TweenMax.to("#cont6", animationtime, right2);
					TweenMax.to("#cont7", animationtime, right3);
					TweenMax.set("#cont8", right3);
				}
				if (counter === 5) {
					TweenMax.set("#cont1", left3);
					TweenMax.to("#cont2", animationtime, left3);
					TweenMax.to("#cont3", animationtime, left2);
					TweenMax.to("#cont4", animationtime, left1);
					TweenMax.to("#cont5", animationtime, center);
					TweenMax.to("#cont6", animationtime, right1);
					TweenMax.to("#cont7", animationtime, right2);
					TweenMax.to("#cont8", animationtime, right3);
					TweenMax.set("#cont9", right3);
				}
				if (counter === 6) {
					TweenMax.set("#cont2", left3);
					TweenMax.to("#cont3", animationtime, left3);
					TweenMax.to("#cont4", animationtime, left2);
					TweenMax.to("#cont5", animationtime, left1);
					TweenMax.to("#cont6", animationtime, center);
					TweenMax.to("#cont7", animationtime, right1);
					TweenMax.to("#cont8", animationtime, right2);
					TweenMax.to("#cont9", animationtime, right3);
					TweenMax.set("#cont10", right3);
				}
				if (counter === 7) {
					TweenMax.set("#cont3", left3);
					TweenMax.to("#cont4", animationtime, left3);
					TweenMax.to("#cont5", animationtime, left2);
					TweenMax.to("#cont6", animationtime, left1);
					TweenMax.to("#cont7", animationtime, center);
					TweenMax.to("#cont8", animationtime, right1);
					TweenMax.to("#cont9", animationtime, right2);
					TweenMax.to("#cont10", animationtime, right3);
					TweenMax.set("#cont11", right3);
				}
				if (counter === 8) {
					TweenMax.set("#cont4", left3);
					TweenMax.to("#cont5", animationtime, left3);
					TweenMax.to("#cont6", animationtime, left2);
					TweenMax.to("#cont7", animationtime, left1);
					TweenMax.to("#cont8", animationtime, center);
					TweenMax.to("#cont9", animationtime, right1);
					TweenMax.to("#cont10", animationtime, right2);
					TweenMax.to("#cont11", animationtime, right3);
					TweenMax.set("#cont12", right3);
				}
				if (counter === 9) {
					TweenMax.set("#cont5", left3);
					TweenMax.to("#cont6", animationtime, left3);
					TweenMax.to("#cont7", animationtime, left2);
					TweenMax.to("#cont8", animationtime, left1);
					TweenMax.to("#cont9", animationtime, center);
					TweenMax.to("#cont10", animationtime, right1);
					TweenMax.to("#cont11", animationtime, right2);
					TweenMax.to("#cont12", animationtime, right3);
					TweenMax.set("#cont13", right3);
				}
				if (counter === 10) {
					TweenMax.set("#cont6", left3);
					TweenMax.to("#cont7", animationtime, left3);
					TweenMax.to("#cont8", animationtime, left2);
					TweenMax.to("#cont9", animationtime, left1);
					TweenMax.to("#cont10", animationtime, center);
					TweenMax.to("#cont11", animationtime, right1);
					TweenMax.to("#cont12", animationtime, right2);
					TweenMax.to("#cont13", animationtime, right3);
					TweenMax.set("#cont14", right3);
				}
				if (counter === 11) {
					TweenMax.set("#cont7", left3);
					TweenMax.to("#cont8", animationtime, left3);
					TweenMax.to("#cont9", animationtime, left2);
					TweenMax.to("#cont10", animationtime, left1);
					TweenMax.to("#cont11", animationtime, center);
					TweenMax.to("#cont12", animationtime, right1);
					TweenMax.to("#cont13", animationtime, right2);
					TweenMax.to("#cont14", animationtime, right3);
					TweenMax.set("#cont1", right3);
				}
				if (counter === 12) {
					TweenMax.set("#cont8", left3);
					TweenMax.to("#cont9", animationtime, left3);
					TweenMax.to("#cont10", animationtime, left2);
					TweenMax.to("#cont11", animationtime, left1);
					TweenMax.to("#cont12", animationtime, center);
					TweenMax.to("#cont13", animationtime, right1);
					TweenMax.to("#cont14", animationtime, right2);
					TweenMax.to("#cont1", animationtime, right3);
					TweenMax.set("#cont2", right3);
				}
				if (counter === 13) {
					TweenMax.set("#cont9", left3);
					TweenMax.to("#cont10", animationtime, left3);
					TweenMax.to("#cont11", animationtime, left2);
					TweenMax.to("#cont12", animationtime, left1);
					TweenMax.to("#cont13", animationtime, center);
					TweenMax.to("#cont14", animationtime, right1);
					TweenMax.to("#cont1", animationtime, right2);
					TweenMax.to("#cont2", animationtime, right3);
					TweenMax.set("#cont3", right3);
				}
				if (counter === 14) {
					TweenMax.set("#cont10", left3);
					TweenMax.to("#cont11", animationtime, left3);
					TweenMax.to("#cont12", animationtime, left2);
					TweenMax.to("#cont13", animationtime, left1);
					TweenMax.to("#cont14", animationtime, center);
					TweenMax.to("#cont1", animationtime, right1);
					TweenMax.to("#cont2", animationtime, right2);
					TweenMax.to("#cont3", animationtime, right3);
					TweenMax.set("#cont4", right3);
				}
				if (counter === 15) {
					counter = 1;
					checkPos();
				}
				if (counter === 0) {
					counter = 14;
					checkPos();
				}
			}

			var heaterTl = new TimelineMax({repeat:-1});
			var bg_slider_image1 = document.getElementById('bg_slider_image1');
			var bg_slider_image2 = document.getElementById('bg_slider_image2');
			var bg_slider_image3 = document.getElementById('bg_slider_image3');
			var bg_slider_image4 = document.getElementById('bg_slider_image4');
			var bg_slider_image5 = document.getElementById('bg_slider_image5');

			var animationtime2 = 5;
			var headerSpeed = 2;

			heaterTl.to(bg_slider_image1, headerSpeed, {left:"-100%"},animationtime2 * 1);
			heaterTl.to(bg_slider_image2, headerSpeed, {left:"0%"},animationtime2 * 1);
			heaterTl.set(bg_slider_image5, {left:"100%"},animationtime2 * 1);

			heaterTl.to(bg_slider_image2, headerSpeed, {left:"-100%"},animationtime2 * 2);
			heaterTl.to(bg_slider_image3, headerSpeed, {left:"0%"},animationtime2 * 2);
			heaterTl.set(bg_slider_image1, {left:"100%"},animationtime2 * 2);

			heaterTl.to(bg_slider_image3, headerSpeed, {left:"-100%"},animationtime2 * 3);
			heaterTl.to(bg_slider_image4, headerSpeed, {left:"0%"},animationtime2 * 3);
			heaterTl.set(bg_slider_image2, {left:"100%"},animationtime2 * 3);

			heaterTl.to(bg_slider_image4, headerSpeed, {left:"-100%"},animationtime2 * 4);
			heaterTl.to(bg_slider_image5, headerSpeed, {left:"0%"},animationtime2 * 4);
			heaterTl.set(bg_slider_image3, {left:"100%"},animationtime2 * 4);

			heaterTl.to(bg_slider_image5, headerSpeed, {left:"-100%"},animationtime2 * 5);
			heaterTl.to(bg_slider_image1, headerSpeed, {left:"0%"},animationtime2 * 5);
			heaterTl.set(bg_slider_image4, {left:"100%"},animationtime2 * 5);

			window.addEventListener("scroll", function() {
				if (document.documentElement.scrollTop < 850) {
					heaterTl.play();
				}
				else if(document.documentElement.scrollTop > 850) {
					heaterTl.pause();
				}
			});
		});
	});
</script>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
