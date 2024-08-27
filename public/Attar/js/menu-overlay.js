/*====================================
=            MENU OVERLAY            =
====================================*/

$(document).ready(function() {
	var bodyEl = document.body,
		isOpen = false;

	$('#menu-link, .close-menu, .overlay-menu a').on('click', function(){
		$(bodyEl).toggleClass('menu-open');
		$('#menu-link').toggleClass('is-clicked');
		$("#overlay").toggleClass("open");
		isOpen = !isOpen;
		if(location.hostname === this.hostname){
			return false;
		}
	});	
});

/*-----  End of MENU OVERLAY  ------*/