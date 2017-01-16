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
<script>
	var operatingSystem, userAgentString = navigator.userAgent;
	var link = $("#store");

	if (userAgentString.indexOf("iPhone") > -1 || userAgentString.indexOf("iPod") > -1 || userAgentString.indexOf("iPad") > -1) {
	    operatingSystem = "iOS";
	    link.attr("href", "https://itunes.apple.com/tw/app/ke-ling-ke-ling/id1036149753?l=zh&mt=8");
	} else if (/Android/.test(userAgentString)) {
	    operatingSystem = "Android";
	    link.attr("href", "https://play.google.com/store/apps?hl=tw");
	} else if (/Windows Phone/.test(userAgentString)) {
	    operatingSystem = "Windows Phone";
	    link.attr("href", "http://www.windowsphone.com/tw/store");
	}
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