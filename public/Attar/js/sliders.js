/*==============================
=            Slider            =
==============================*/

var win = $(window),
	pxContainer = $('#as-slider');
	loaderIntro = '<div class="landing"><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>';

/* Initialize Intro */
function initSlider() {
	var $this = pxContainer;
	$this.after(loaderIntro);
	$this.addClass(function () {
		return $this.find('.item').length > 1 ? "loaded" : "";
	});

	$this.waitForImages({
		finished: function () {
			// sleep(3000)
			$('.landing').remove();
			if ($this.hasClass('loaded')) {
				var autoplay = $this.data('autoplay'),
					navigation = $this.data('navigation'),
					dots = $this.data('dots'),
					transition = $this.data('transition');

				$this.owlCarousel({
				    items : 1, 
					loop: true,
					autoplayTimeout: autoplay || false,
					dots: dots || false,
					nav: navigation || false,
					navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
				    autoplay: true,
				    responsive: true,
					animateOut: transition || false
				});
			}
		},
		waitForAll: true
	});

}
if (pxContainer.length) {
	initSlider();
}
/*-----  End of Slider  ------*/
