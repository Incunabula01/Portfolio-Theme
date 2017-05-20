var $ = jQuery.noConflict();

$(document).foundation();

$(document).ready(function(){
    
    // smooth scroll
	$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') || location.hostname === this.hostname) {

        var target = $('#belowFold');
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top 
            }, 1000);
            return false;
        }
      }
    });

    $(window).load(function(){
        var topWindow = $(window),
            $frontImage = $('#heroImage'),
            aspectRatio =  $frontImage.width() / $frontImage.height(),
            windowHeight = topWindow.height();

        $frontImage.css('height', windowHeight );
        
        function resizeBg(){
            if((topWindow.width() / topWindow.height()) <= aspectRatio ) {
               $frontImage.css('height', windowHeight );
            } else {
               $frontImage.css('width', '100%');
            }
        } 

       topWindow.resize(resizeBg);
    });
    
});


