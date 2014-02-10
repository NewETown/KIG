<?php

require_once '../settings.php';

KIGProjectHeaderNoBS();

?>
	<div class="hero ">
		<div class="left-curtain animated pull-left-curtain">
			<img src="http://placehold.it/720x1050&text=Left+Curtain">
		</div>
		<div class="youtube-video">
			<iframe id="video" src="http://player.vimeo.com/video/15888399" width="100%" height="100%" wmode="transparent" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			<figcaption>
				<p style="text-align:center; padding-top: 20px;"><a href="#map">Skip Video</a></p>
			</figcaption>
		</div>
		<div class="right-curtain animated pull-right-curtain">
			<img src="http://placehold.it/720x1050&text=Right+Curtain">
		</div>
	</div>
	<div class="spacer">
		<h2 style="text-align: center;">Well that was cool</h2>
	</div>
	<div id="map" class="map">
		<img src="http://placehold.it/3000x1500&text=Map" class="img-full">
	</div>

<script type="text/javascript" src="js/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	$('.youtube-video').smoothScroll();

	$('.youtube-video a').click(function(event) {
		event.preventDefault();
		var link = this;
		$.smoothScroll({
			scrollTarget: link.hash
		});
	});
});
</script>

<?php

KIGProjectFooterNoBS();

?>