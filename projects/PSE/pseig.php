<?php

require "../settings.php";

KIGProjectHeader();

?>

<!-- Body stuff -->
<div id="box" class="bounding-box">
	<div class="row row-highlight">
		<h1 class="text-center">PSE Invests in Stuff</h1>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center" style="margin-bottom:50px;">These are the things we invest in!</h2>
		</div>
	</div>
	<img id="tmp" src="http://placehold.it/300&text=We+Do+Cool+Things+And+Stuff" class="img-responsive img-circle focus-image">
	<div class="row">
		<div class="col-md-4">
			<a href="#" data-toggle="modal" data-target="#myModal"><img src="http://placehold.it/250" class="img-responsive img-circle primary-image"></a>
		</div>
		<div class="col-md-4 col-md-offset-4">
			<a href="#" data-toggle="modal" data-target="#myModal"><img src="http://placehold.it/250" class="img-responsive img-circle primary-image"></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4" style="top:50px;">
			<a href="#" data-toggle="modal" data-target="#myModal"><img src="http://placehold.it/250" class="img-responsive img-circle primary-image"></a>
		</div>
	</div>

</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
$(document).ready(function() {
	var h = $('#box').height(),
	    w = $('#box').width();

	$('#tmp').css('top', (h/2) - 150);
	console.log(h);
	$('#tmp').css('left', w/2 + 15);
	console.log(w);
});

</script>

<?php

KIGProjectFooter();

?>