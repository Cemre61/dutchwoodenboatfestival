(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away

	});

})(jQuery, this);


jQuery(document).ready(function(){
	//jQuery( ".menu-item" ).has( "ul" ).append( '<i class="fas fa-caret-down open-dropdown"></i>' );
	//
	jQuery('<i class="fas fa-caret-down open-dropdown"></i>').insertBefore('ul.sub-menu');

	jQuery('.menu-icon').on("click", function(){
		jQuery('.menu .menu-item').toggleClass("show-grid");
	});
	jQuery('.btn-trailer').hover(function(){
		jQuery('.btn-trailer .fa-play').show(250);
		jQuery('.btn-trailer span').hide();
		jQuery('.btn-trailer span').css({"transition": "all .3s ease"});
	}, function(){
		jQuery('.btn-trailer .fa-play').hide(100);
		jQuery('.btn-trailer span').show(300);
		jQuery('.btn-trailer span').css({"transition": "all .3s ease"});
	});
	if (jQuery(window).width() <= 1159) {
		jQuery('.menu li').live("click","i.open-dropdown", function() {
			jQuery('ul.sub-menu', this).toggleClass("show-grid");
			jQuery('i.open-dropdown', this).toggleClass("fa-caret-down");
			jQuery('i.open-dropdown', this).toggleClass("fa-caret-up");
		});
	} else {
		jQuery('.menu li.has-children').hover(function() {
			jQuery('ul.sub-menu', this).css({"display" : "table"});
		}, function() {
			jQuery('ul.sub-menu', this).css({"display" : "none"});
		});
	}

	var fullscreenimage_left = document.getElementById('fullscreenimage_left');
	var fullscreenimage_right = document.getElementById('fullscreenimage_right');


	var fullscreen = document.getElementById('fullscreen-image');
	var fullscreenbg = document.getElementsByClassName('fullscreenbg')[0];
	var images = document.getElementsByClassName('canprevieuw');
	var closeFullscreen = document.getElementById('closeFullscreen');
	var arr = Array.prototype.slice.call( images );
	var currentImage;

	for(var i = 0; i < images.length; i++) {
		image = images[i];
		image.addEventListener("click", function() {
			currentImage = arr.indexOf(this);
			fullscreen.style.backgroundImage = this.style.backgroundImage;
			fullscreen.style.display = "block";
			TweenMax.to(fullscreen, .5, {scale:1, opacity:1});
			TweenMax.to(fullscreenbg, .5, {opacity:.7});
			if (fullscreenimage_left !== null) {
				checkButtons();
			}
		});
	}


	if (fullscreenimage_left !== null) {
		fullscreenimage_left.addEventListener("click",function() {
			currentImage -= 1;
			checkButtons();
			fullscreen.style.backgroundImage = images[currentImage].style.backgroundImage
		});
		fullscreenimage_right.addEventListener("click",function() {
			currentImage += 1;
			checkButtons();
			fullscreen.style.backgroundImage = images[currentImage].style.backgroundImage
		});
		function checkButtons() {
			if (arr.length == 1) {
				console.log("het is er maar een");
				fullscreenimage_left.style.display = "none";
				fullscreenimage_right.style.display = "none";
			}
			else {
				if (currentImage == 0) {
					fullscreenimage_left.style.display = "none";
					fullscreenimage_right.style.display = "block";
				}
				else if (currentImage == arr.length-1) {
					fullscreenimage_right.style.display = "none";
					fullscreenimage_left.style.display = "block";
				}
				else {
					fullscreenimage_left.style.display = "block";
					fullscreenimage_right.style.display = "block";
				}
			}
		}
	}
	closeFullscreen.addEventListener("click",function() {
		TweenMax.set(fullscreen, {scale:0, display:"none", opacity:0});
		TweenMax.set(fullscreenbg, {opacity:0});
	});


});
