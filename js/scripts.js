(function ($) {

/*
	$(window).bind('load', function() {	
		$('.review-type-point').each(function() {
			var value = $(this).text();			
			var arr = value.split('/');
			var percent = parseFloat(arr[0].replace(' ', '')) * 10;			
			$(this).css("width", percent + "%");
		});	
	});	
*/
	
    $(document).ready(function() {
        $(".carousel .carousel-inner").swipe( {
            swipeRight: function() {
                $(this).parent().carousel('prev');
            },
            swipeLeft: function() {
                $(this).parent().carousel('next');
            },
        });
        
		$('#secondary').affix({
		  offset: {
		    top: 225,
		    bottom: 423
		  }
		});        
    });	

	$("a[href='#top']").click(function() {
	    $("html, body").animate({ scrollTop: 0 });
	    return false;
	}); 
	
	$(document).on("scroll", function() {
		if ($(document).scrollTop() > 0){
			$("#masthead").addClass("shrink");
		} else {
			$("#masthead").removeClass("shrink");
		}
	});	
  
})(jQuery);

(function (window, document, undefined) {

    //Grab all iframes on the page or return
    var iframes = document.getElementsByTagName('iframe');

    // Loop through the iframes array
    for (var i = 0; i < iframes.length; i++) {
        var iframe = iframes[i],

        // RegExp, extend this if you need more players
                players = /www.youtube.com|player.vimeo.com/;

        // If the RegExp pattern exists within the current iframe
        if (iframe.src.search(players) > 0) {

            // Calculate the video ratio based on the iframe's w/h dimensions
            var videoRatio = ( iframe.height / iframe.width ) * 100;

            // Replace the iframe's dimensions and position
            // the iframe absolute, this is the trick to emulate
            // the video ratio
            iframe.style.position = 'absolute';
            iframe.style.top = '0';
            iframe.style.left = '0';
            iframe.width = '100%';
            iframe.height = '100%';

            // Wrap the iframe in a new <div> which uses a
            // dynamically fetched padding-top property based
            // on the video's w/h dimensions
            var wrap = document.createElement('div');
            wrap.className = 'fluid-vids';
            wrap.style.width = '100%';
            wrap.style.position = 'relative';
            wrap.style.paddingTop = videoRatio + '%';

            // Add the iframe inside our newly created <div>
            var iframeParent = iframe.parentNode;
            iframeParent.insertBefore(wrap, iframe);
            wrap.appendChild(iframe);
        }
    }

})(window, document);