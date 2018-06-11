<?php get_header(); ?>

<script>
	jQuery(document).ready(function(){
		jQuery('.btn-trailer').hover(function(){
			jQuery('.header-btn .fa-play').show(300);
			jQuery('.btn-trailer span').hide(200);
			jQuery('.btn-trailer span').css({"transition": "all .3s ease"});
		}, function(){
			jQuery('.header-btn .fa-play').hide(100);
			jQuery('.btn-trailer span').show(300);
			jQuery('.btn-trailer span').css({"transition": "all .3s ease"});
		});
	});

</script>

<main role="main">
	<!-- section -->
	<section>
		<!-- 		<div class="home-header">
<video class="video" id="video" autoplay muted>
<source src="<?php the_field('video'); ?>" type="video/mp4">
</video>
<div class="video-overlay"></div>
<img src="<?php echo get_template_directory_uri(); ?>/img/pijl_naarbeneden.png" class="pijl_naarbeneden">

<a href="http://dutchwoodenboatfestival.nl/b1.2/meld-je-aan/">
<div class="meld_aan">
<p>Meld je aan</p>
<img src="<?php echo get_template_directory_uri(); ?>/img/pijl_meldjeaan.png" class="arrow">
</div>
</a>

<div class="controlls">
<div class="button">
<img id="sound" src="<?php echo get_template_directory_uri(); ?>/img/audiouit.png" class="pause buttons">
</div>
<div class="button">
<img id="play" src="<?php echo get_template_directory_uri(); ?>/img/pauze.png" class="pause buttons">
</div>
<div class="button">
<img id="full" src="<?php echo get_template_directory_uri(); ?>/img/full_screen.png" class="pause buttons">
</div>
</div>
</div> -->

		<div class="header-bg">
			<div class="header_cont">
				<h1><?php the_field('title'); ?></h1>
				<p>19 &amp; 20 Juni 2019, NDSM Werf Amsterdam</p>	
				<a class="header-btn btn-trailer" href="#"><span>Bekijk de trailer</span><i class="fas fa-play"></i></a>
				<a class="header-btn btn-meld-je-aan" href="#">Meld je aan! <i class="fas fa-chevron-right"></i></a>
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

		<div class="home_text_cont">
			<h2><?php the_field('title'); ?></h2>
			<?php the_field('text'); ?>
		</div>

		<!-- <div class="newscontainer">
<h2>Nieuws</h2>
<div class="bignews">
<div class="see_more">

</div>
</div>
<div class="smallnewscontainer">
<div class="movecontainer">
<div class="row">
<div class="article">
1
</div>
<div class="article">
2
</div>
</div>

<div class="row">
<div class="article">
3
</div>
<div class="article">
4
</div>
</div>

<div class="row">
<div class="article">
5
</div>
<div class="article">
4
</div>
</div>

</div>
<div class="NewsArows">
</div>
</div>
</div> -->


		<div class="home_gallery">
			<h2 class="gallery_title">Foto’s</h2>
			<?php
			$images = get_field('gallery');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			$i = 0;
			if( $images ): ?>
			<?php foreach( $images as $image ): ?>
			<?php $i += 1 ?>
			<div class="image_cont" id="cont<?php echo $i ?>">
				<div class="imageholder" style='background-image:url("<?php echo $image['url']?>")'>
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

			<form action="gallery">
				<input type="submit" class="button" value="Zie Meer" />
			</form>
		</div>

	</section>
	<!-- /section -->
</main>

<script type="text/javascript">
	window.addEventListener("load", function () {

		TweenMax.fromTo(".pijl_naarbeneden", 1, {bottom:"4%"}, {bottom:"2%", yoyo: true, repeat:-1,ease: Power1.easeInOut});

		var sound = document.getElementById('sound');
		var play = document.getElementById('play');
		var full = document.getElementById('full');
		var video = document.getElementById('video');
		var vidstatus = true;
		var mutestatus = true;

		sound.addEventListener("mouseenter", hoverbutton);
		sound.addEventListener("mouseleave", leavebutton);
		sound.addEventListener("click", muteclick);

		play.addEventListener("mouseenter", hoverbutton);
		play.addEventListener("mouseleave", leavebutton);
		play.addEventListener("click", playclick);

		full.addEventListener("mouseenter", hoverbutton);
		full.addEventListener("mouseleave", leavebutton)
		full.addEventListener("click",toggleFullScreen,false);;

		function toggleFullScreen(){
			if(video.requestFullScreen){
				video.requestFullScreen();
			} else if(video.webkitRequestFullScreen){
				video.webkitRequestFullScreen();
			} else if(video.mozRequestFullScreen){
				video.mozRequestFullScreen();
			}
		}

		function playclick() {
			if (vidstatus == true) {
				video.pause();
				play.src = "<?php echo get_template_directory_uri(); ?>/img/play.png";
				vidstatus = false;
			}
			else if (vidstatus == false) {
				video.play();
				play.src = "<?php echo get_template_directory_uri(); ?>/img/pauze.png";
				vidstatus = true;
			}
		}

		function muteclick() {
			if (mutestatus == true) {
				video.muted = false;
				sound.src = "<?php echo get_template_directory_uri(); ?>/img/audioaan.png";
				mutestatus = false;
			}
			else if (mutestatus == false) {
				video.muted = true;
				sound.src = "<?php echo get_template_directory_uri(); ?>/img/audiouit.png";
				mutestatus = true;
			}
		}

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
		var animationtime = .5;

		arrow_left.addEventListener("click", function() {
			counter -= 1;
			checkPos();
		});
		arrow_right.addEventListener("click", function() {
			counter += 1;
			checkPos();
		});

		function resize() {

			TweenMax.fromTo(".pijl_naarbeneden", 1, {bottom:"4%"}, {bottom:"2%", yoyo: true, repeat:-1,ease: Power1.easeInOut});

			var window_width = window.innerWidth || document.body.clientWidth;
			if (window_width >= 700) {
				left3 = {left:"-10%", x:"-50%", scale:.3, zIndex:2};
				left2 = {left:"2.5%", x:"-50%", scale:.5, zIndex:3};
				left1 = {left:"22.5%", x:"-50%", scale:.7, zIndex:4};
				center = {left:"50%", x:"-50%", scale:1, zIndex:5};
				right1 = {left:"77.5%", x:"-50%", scale:.7, zIndex:4};
				right2 = {left:"97.5%", x:"-50%", scale:.5, zIndex:3};
				right3 = {left:"110%", x:"-50%", scale:.3, zIndex:2};
			}
			else {
				left3 = {left:"-10%", x:"-50%", scale:.3, zIndex:2};
				left2 = {left:"-10%", x:"-50%", scale:.3, zIndex:3};
				left1 = {left:"-3%", x:"-50%", scale:.8, zIndex:4};
				center = {left:"50%", x:"-50%", scale:1, zIndex:5};
				right1 = {left:"103%", x:"-50%", scale:.8, zIndex:4};
				right2 = {left:"110%", x:"-50%", scale:.3, zIndex:3};
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



	});
</script>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
