var $ = jQuery.noConflict();

$(document).foundation();

$(document).ready(function(){
    
    // smooth scroll
	$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') || location.hostname === this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top 
            }, 1000);
            return false;
        }
      }
    });


    var $container = $('#gallery-container');
 
    $container.imagesLoaded( function(){
        $container.masonry({
            itemSelector: '.item'
        });
    });
    
    $('.orbit-container > li:first-child, .orbit-bullets > button:first-child').addClass('is-active');
});


