<script>
	addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar() { window.scrollTo(0, 1); }
</script>
<script src="<?php echo path_homeTheme; ?>js/menu.js"></script>
<script src="<?php echo path_homeTheme; ?>js/blast.min.js"></script>
<script src="<?php echo path_homeTheme; ?>js/scrolling-nav.js"></script>
<script src="<?php echo path_homeTheme; ?>js/move-top.js"></script>
<script src="<?php echo path_homeTheme; ?>js/easing.js"></script>
<script>
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();

			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
	$(document).ready(function () {
		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script>
<script src="<?php echo path_homeTheme; ?>js/SmoothScroll.min.js"></script>
<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip(); 
});
</script>