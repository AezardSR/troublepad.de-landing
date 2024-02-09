jQuery(document).ready(function ($) {
	const slidesTop = $('.slide-top');
	let currentSlideTop = 0;

	function showSlide(index) {
		slidesTop.eq(currentSlideTop).animate({ 'left': '-100%' }, 1800, function () {
			$(this).css('display', 'none').css('left', '0');
		});


		slidesTop.eq(index).css({ 'display': 'block', 'left': '100%' }).animate({ 'left': '0' }, 1800);

		currentSlideTop = index;
	}

	function nextSlide() {
		var nextIndex = (currentSlideTop + 1) % slidesTop.length;
		showSlide(nextIndex);
	}


	setInterval(nextSlide, 5000);

	slidesTop.eq(currentSlideTop).css({ 'display': 'block', 'left': '0' });
});



//slider mid

jQuery(document).ready(function ($) {
	const slides = $('.slide_mid');
	const slideContents = $('[id^="slide-mid-"]'); // Sélectionne tous les éléments dont l'id commence par "slide-mid-"
	let currentSlide = 0;

	function showSlide(index) {
		slides.each((i, slide) => {
			if (i === index) {
				$(slide).css('display', 'inline-block');
			} else {
				$(slide).css('display', 'none');
			}
		});
		slideContents.each((i, content) => {
			if (i === index) {
				$(content).addClass('active-content').removeClass('inactive-content');
			} else {
				$(content).addClass('inactive-content').removeClass('active-content');
			}
		});
		$('#slide-display').text(index + 1);
		$('#max-slides').text(slides.length);
	}

	$('#prev-btn').on('click', function () {
		currentSlide = (currentSlide - 1 + slides.length) % slides.length;
		showSlide(currentSlide);
	});

	$('#next-btn').on('click', function () {
		currentSlide = (currentSlide + 1) % slides.length;
		showSlide(currentSlide);
	});

	// Initialise le slider en masquant tous les contenus sauf le premier
	slideContents.addClass('inactive-content');
	showSlide(currentSlide); // Affiche la première slide au chargement de la page
});





jQuery(function () {
	jQuery('body').addClass('js-load');

	jQuery('.menu-toggle').click(function () {
		event.preventDefault();
		jQuery(this).removeClass('dis-ib');
		jQuery(this).addClass('dis-no');
		jQuery('.close-nav').removeClass('dis-no');
		jQuery('.close-nav').addClass('dis-ib');
		jQuery('.nav-menu').toggleClass('toggled-on');
		jQuery('.nav-menu').detach().insertAfter('#masthead');
		jQuery('#page').toggleClass('toggled-page');
		jQuery('.nav-menu li').each(function () {
			if (jQuery(this).find('ul').length > 0) {
				jQuery(this).addClass('posrel');
				jQuery(this).append('<span class="plus"><span class="pp">+</span><span class="minus">-</span></span>');
			}
		});
	});

	jQuery('.close-nav').click(function () {
		event.preventDefault();
		jQuery(this).removeClass('dis-ib');
		jQuery(this).addClass('dis-no');
		jQuery('.menu-toggle').addClass('dis-ib');
		jQuery('.menu-toggle').removeClass('dis-no');
		jQuery('.nav-menu').removeClass('toggled-on');
		jQuery('#page').removeClass('toggled-page');
	});

	// 	jQuery('a[href="#"]').click(function(){
	// 		if( !jQuery(this).hasClass('showlogin') || !jQuery(this).hasClass('showcoupon') ) {
	// 			return false;
	// 		}
	// 	});

	jQuery('.lbw').click(function () {
		jQuery(this).closest('.opn-toggle').removeClass('opn');
	});

	if (jQuery('.content-area').find('p').length > 0) {
		jQuery('.content-area').find('p').each(function () {
			if (jQuery(this).is(':empty'))
				jQuery(this).remove();
		});
	}
	if (jQuery('.entry-content').find('p').length > 0) {
		jQuery('.entry-content').find('p').each(function () {
			if (jQuery(this).is(':empty'))
				jQuery(this).remove();
		});
	}

	if (jQuery('#logoutt').length > 0) {
		if (jQuery('#content-bread').length > 0)
			jQuery('#logoutt').detach().insertAfter('#content-bread > span');
	}
	jQuery('.backtotop').click(function () {
		jQuery('html, body').animate({ scrollTop: 0 }, 1000);
	});

	jQuery('.opn-child').click(function () {
		var IDcible = jQuery(this).attr('id');
		var IDnum = IDcible.replace(/[^0-9]/g, '');
		var getChild = jQuery('#opn-this-' + IDnum);
		if (jQuery(this).hasClass('unique')) {
			jQuery('.opn-child').removeClass('active');
			jQuery('.opn-toggle').removeClass('opn');
		}
		getChild.toggleClass('opn');
		jQuery(this).toggleClass('active');
	});

	//jQuery(window).bind('load', function() {
	jQuery.fn.myVertAlign = function () {
		var getH = jQuery(this).outerHeight();
		var parentH = jQuery(this).closest('.js-parent').height();
		var mTVal = parseInt(parentH - getH) / 2;
		jQuery(this).css('margin-top', mTVal);
	}
	jQuery('.js-valign').each(function (index, value) {
		jQuery(this).myVertAlign();
	});

	jQuery.fn.myDeplaceMegamenu = function () {
		var getmenuide = jQuery(this).attr('data-ide');
		console.log(getmenuide);
		var navH = jQuery('.nav-menu').height();
		navH = navH - 1;

		if (jQuery('.nav-menu').find('.' + getmenuide).length > 0) {
			jQuery(this).appendTo(jQuery('.nav-menu').find('.' + getmenuide));
			jQuery(this).css('top', navH);
			jQuery(this).css('display', '');
		}
	}
	jQuery('.megamenu').each(function () {
		jQuery(this).myDeplaceMegamenu();
	});

});


function changeVideo(iframeHTML, videoTitle, videoId) {
	// Mettre à jour l'iframe de la vidéo principale
	var videoContainer = document.querySelector('.video-principale');
	videoContainer.innerHTML = iframeHTML;

	// Mettre à jour le titre de la vidéo principale
	var titleElement = document.querySelector('.video-section .video-principale h3');
	if (!titleElement) {
		titleElement = document.createElement('h3');
		videoContainer.appendChild(titleElement);
	}
	titleElement.textContent = videoTitle;

	document.querySelectorAll('.video-side .thumbnail').forEach(function (thumbnail) {
		if (thumbnail.getAttribute('data-video-id') === videoId) {
			thumbnail.style.display = 'none';
		} else {
			thumbnail.style.display = 'block';
		}
	});
}

// Ajout d'un gestionnaire de clics pour chaque vignette
document.querySelectorAll('.video-side .thumbnail').forEach(function (thumbnail) {
	thumbnail.addEventListener('click', function () {
		var iframeHTML = this.getAttribute('data-iframe-html');
		var videoTitle = this.getAttribute('data-video-title');
		var videoId = this.getAttribute('data-video-id');
		changeVideo(iframeHTML, videoTitle, videoId);
	});
});

// Initialisation de la première vidéo au chargement de la page
document.addEventListener('DOMContentLoaded', function () {
	var firstThumbnail = document.querySelector('.video-side .thumbnail');
	var firstVideoIframe = firstThumbnail.getAttribute('data-iframe-html');
	var firstVideoTitle = firstThumbnail.getAttribute('data-video-title');
	var firstVideoId = firstThumbnail.getAttribute('data-video-id');
	changeVideo(firstVideoIframe, firstVideoTitle, firstVideoId);
});

window.addEventListener('load', function () {
	var body = document.body;
	var header = document.getElementById('masthead');
	if (body.classList.contains('page-template-mentions')) {
		header.classList.remove('fixed-header');
		header.classList.remove('fixed-header-shadow');
	}
});

$('a[href^="#"]').on('click', function (e) {
	e.preventDefault();
	var target = $(this.getAttribute('href'));
	if (target.length) {
		var targetOffset = target.offset().top - 100; // 100px est la hauteur de l'en-tête fixe
		$('html, body').stop().animate({
			scrollTop: targetOffset
		}, 1000);
	}
});








