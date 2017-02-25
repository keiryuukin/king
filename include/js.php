
<!-- /WhatsHelp.io widget -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/masonry.min.js"></script>
<script src="js/twitterfetcher.min.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/ytplayer.min.js"></script>
<script src="js/countdown.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/redirection-mobile.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script>
	 $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    	$(".container").fitVids();
  		
  		$("ul#main_navbar li a").each(function() {   
		    if (this.href == window.location.href) {
		        $(this).parent().toggleClass("active");
		        $(this).parent().parent().toggleClass("in");
		    }
			});

  		 SA.redirection_mobile ({
  		    mobile_url : "www.king75888.com/m/",
  		});	

       
	});
</script>

<script>
     // Can also be used with $(document).ready()
     $(window).load(function() {
       $('.flexslider').flexslider({
         animation: "slide",
         controlNav: false
       });
     });

</script>