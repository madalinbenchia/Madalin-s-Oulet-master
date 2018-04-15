</div><br><br>

	<!--footer -->
	<footer class="col-md-12 text-center" id="footer">&copy; Copyright 2013-2018 Shaunta's Boutique</footer>
	

	<script>
		jQuery(window).scroll(function(){

			var vscroll = jQuery(this).scrollTop();
			jQuery('#logoText').css({
				"transform" : "translate(0px, "+vscroll/2 +"px)"
			});

			var vscroll = jQuery(this).scrollTop();
			jQuery('#back-flower').css({
				"transform" : "translate("+vscroll/5+"px, -"+vscroll/12 +"px)"
			});

			var vscroll = jQuery(this).scrollTop();
			jQuery('#for-flower').css({
				"transform" : "translate(0px, -"+vscroll/2 +"px)"
			});
		});
	</script>
</body>
</html>