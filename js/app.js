var $ = jQuery.noConflict();



$(document).ready(function(){
	$(document).foundation();
	// $(window).on('scroll', function(e){
	
	// })
	var primaryMenu = $('#primary-menu');
	var el = primaryMenu.children();

	// primaryMenu.each( function(el){
	// 	if( el.hasClass('menu-item-has-children')){
	// 		el.children().addClass('dropdown').setAttribute('data-dropdown-menu');
	// 	}
	// });

	// el.forEach( i, function(){
	// 	if( i.hasClass('menu-item-has-children')){
	// 		i.children().addClass('dropdown').setAttribute('data-dropdown-menu');
	// 	}
	// });
	
});