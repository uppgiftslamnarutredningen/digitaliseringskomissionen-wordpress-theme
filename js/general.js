//set jQuery namespace to avoid conflicts
var $j = jQuery.noConflict();


//Run after full document load
$j(document).ready(function() {
	
	//remove scrollbar on iOS devices
	window.scrollTo(0, 1);
	
	oaMobileMenu();
	
	$j('.trigger').click(function(e){
		e.preventDefault();
		oaMobileMenuToggle();
	})
	

});

function oaMobileMenu(){

	if (window.MobileMenu == undefined){
		$j('#site-nav').addClass('oa-mobile-menu');
		$j('#site-nav').addClass('mobile-only');
		window.MobileMenu = $j('#site-nav').clone(true,true);
		$j('#site-nav').removeClass('oa-mobile-menu');
		$j('#site-nav').removeClass('mobile-only');
	}
	
	$j('body').prepend(MobileMenu);
	$j('.oa-mobile-menu').attr('id','site-mobile-nav');
	
	
}

function oaMobileMenuToggle(){
	
	var menuHeight = $j('.oa-mobile-menu .menu').height();
	menuHeight = menuHeight + 71;
	menuHeight = menuHeight*-1;
	
	$j('.oa-mobile-menu .menu').show();
	
	if( $j('.oa-mobile-menu .menu').css('margin-top') == '100px' ){
		$j('.oa-mobile-menu .menu').css({'margin-top': menuHeight},300);
	} else {
		$j('.oa-mobile-menu .menu').css({'margin-top': '100px'}, 300);
	}
	
}