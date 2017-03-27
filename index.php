<!doctype html>
<html lang="zh-TW">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>期王金融 台指期貨交易平台</title>
        <?php include 'include/meta.php' ?>
       	<?php include 'include/css.php' ?>
       	<script src="js/jquery.min.js"></script>
       	<script>
       		    var currentURL = window.location.href;
       				var windowWidth = $(window).width();
       		    if (windowWidth < 769) {
       		        window.location.href = "http://www.king75888.com/m/";
       		    }
       		    /*$(function(){
       		    	$("#loading").height($(window).height())
       		    })*/
       		    $(window).load(function(){
       		    	$("#loading").fadeOut(100)
       		    })
       	</script>
    </head>
    <body>
    <div id='loading'><div class="img"><img src="img/loading.gif" alt="" width="80px"></div></div>
		<?php include 'pages/nav.php' ?>
		<div class="main-container">
			<?php include 'pages/slider.php' ?>
			<!-- section 1 -->
		    <?php include 'pages/section1.php' ?>
			<!-- section1 End -->
		    <!-- section2 -->
			<?php include 'pages/section2.php' ?>
		   <!-- section2 End -->
		   <!-- section 3 -->
		    <?php include 'pages/section3.php' ?>
			<!-- section3 End -->
			<!-- section4 -->
			<?php include 'pages/section4.php' ?>
			<!-- section4 End -->
			<!-- section5 -->
		    <?php include 'pages/section5.php' ?>
		    <!-- section5 End -->
		    <!-- section 6 -->
	      	<?php include 'pages/section6.php' ?>
			<!-- section6 End -->
			<!-- section7 -->
	       <?php include  'pages/section7.php' ?>
		    <!-- section7 End -->
		    
		    <?php include 'pages/footer.php' ?>
		</div>
	<?php include 'include/js.php' ?>
	<script>
		new WOW().init();
	</script>
    </body>
</html>
