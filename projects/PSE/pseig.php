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
		<div class="col-md-10">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		</div>
		<div class="col-md-2">
			<img src="http://placehold.it/100&text=tips" class="img-responsive img-circle">
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
			<a href="#" data-toggle="modal" data-target="#myModal" onclick="cl0()"><img src="http://placehold.it/250" class="img-responsive img-circle primary-image"></a>
		</div>
		<div class="col-md-4 col-md-offset-4">
			<a href="#" data-toggle="modal" data-target="#myModal" onclick="cl1()"><img src="http://placehold.it/250" class="img-responsive img-circle primary-image"></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4" style="top:50px;">
			<a href="#" data-toggle="modal" data-target="#myModal" onclick="cl2()"><img src="http://placehold.it/250" class="img-responsive img-circle primary-image"></a>
		</div>
	</div>

</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"></h4>
			</div>
			<div class="modal-body">
				<div id="modal-content" class="row">
					<div class="col-md-1">
						<button id="btn-left" class="btn btn-default lower" type="button" onclick="left()"><span class="glyphicon glyphicon-chevron-left"></span></button>
					</div>
					<div id="modal_text" class="col-md-7">
					</div>
					<div id="modal_img" class="col-md-3">
					</div>
					<div class="col-md-1">
						<button id="btn-right" class="btn btn-default center lower" type="button" onclick="right()"><span class="glyphicon glyphicon-chevron-right"></span></button>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal-info">
	<div id="mod0">
		<span class="title">This is a Cool Modal</span>
		<div class="slide1">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim sed urna vestibulum sagittis. Vivamus fringilla molestie libero, eu ullamcorper urna aliquam eget. Aliquam blandit sapien vel augue porta adipiscing. Vivamus sit amet aliquam nisl. Etiam sed odio eget nunc mollis dapibus. Pellentesque et aliquam est, nec vulputate tortor. Cras eu porta quam, non auctor ipsum. Mauris venenatis aliquet urna sit amet consectetur. Pellentesque id luctus sem. In vel placerat quam, sodales elementum dolor. Fusce ut felis dignissim, viverra tortor vel, cursus nulla. Proin ut aliquet metus. Phasellus nisl magna, varius sit amet varius ac, sagittis sed neque. Proin in enim rhoncus, semper odio at, blandit purus.</p>
			<img src="http://placehold.it/200&text=Modal+one+one" class="img-responsive">
		</div>
		<div class="slide2">
			<p>Ut vitae magna lacus. Maecenas laoreet arcu et turpis mollis pellentesque. Proin et euismod odio. Donec tempus eget ante a pellentesque. Nulla mollis posuere odio. Sed gravida mollis arcu, at luctus velit porta ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam mollis, nisl vitae tempus ultricies, ligula magna scelerisque neque, vel faucibus est quam et est. Aenean nec nisi sit amet risus luctus tristique. Quisque sit amet diam massa. Proin non dolor vel diam placerat rhoncus nec in urna. Cras condimentum est purus, sed molestie dui tempus at. Maecenas pulvinar turpis purus. Curabitur dolor tellus, ultricies id velit tempor, sollicitudin adipiscing sapien. Curabitur convallis velit at dui tempus, non tempus enim mollis. </p>
			<img src="http://placehold.it/200&text=Modal+one+two" class="img-responsive">
		</div>
		<div class="slide3">
			<p>Praesent vulputate mauris et est euismod aliquet. Donec sit amet volutpat turpis. Integer scelerisque tellus id massa vestibulum malesuada. Mauris commodo pharetra tellus euismod blandit. In suscipit suscipit libero laoreet bibendum. Aliquam placerat tortor dolor, in semper libero tempus sed. Nulla blandit magna sit amet urna pretium, eu pulvinar enim convallis. Morbi blandit viverra faucibus. Integer congue porta odio, vel tincidunt justo scelerisque eu. Nam sodales nunc et elementum varius. Phasellus vel dolor eros. Etiam fermentum nibh rhoncus pretium mattis. Aenean molestie elit at neque consectetur, non viverra dui varius. Maecenas sagittis commodo nisi ac semper. Quisque elementum varius imperdiet. Maecenas eros ante, laoreet rutrum rutrum ultricies, rhoncus in neque. </p>
			<img src="http://placehold.it/200&text=Modal+one+three" class="img-responsive">
		</div>
	</div>
	<div id="mod1">
		<span class="title">This is Also a Cool Modal</span>
		<div class="slide1">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim sed urna vestibulum sagittis. Vivamus fringilla molestie libero, eu ullamcorper urna aliquam eget. Aliquam blandit sapien vel augue porta adipiscing. Vivamus sit amet aliquam nisl. Etiam sed odio eget nunc mollis dapibus. Pellentesque et aliquam est, nec vulputate tortor. Cras eu porta quam, non auctor ipsum. Mauris venenatis aliquet urna sit amet consectetur. Pellentesque id luctus sem. In vel placerat quam, sodales elementum dolor. Fusce ut felis dignissim, viverra tortor vel, cursus nulla. Proin ut aliquet metus. Phasellus nisl magna, varius sit amet varius ac, sagittis sed neque. Proin in enim rhoncus, semper odio at, blandit purus.</p>
			<img src="http://placehold.it/200&text=Modal+two+one" class="img-responsive">
		</div>
		<div class="slide2">
			<p>Ut vitae magna lacus. Maecenas laoreet arcu et turpis mollis pellentesque. Proin et euismod odio. Donec tempus eget ante a pellentesque. Nulla mollis posuere odio. Sed gravida mollis arcu, at luctus velit porta ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam mollis, nisl vitae tempus ultricies, ligula magna scelerisque neque, vel faucibus est quam et est. Aenean nec nisi sit amet risus luctus tristique. Quisque sit amet diam massa. Proin non dolor vel diam placerat rhoncus nec in urna. Cras condimentum est purus, sed molestie dui tempus at. Maecenas pulvinar turpis purus. Curabitur dolor tellus, ultricies id velit tempor, sollicitudin adipiscing sapien. Curabitur convallis velit at dui tempus, non tempus enim mollis. </p>
			<img src="http://placehold.it/200&text=Modal+two+two" class="img-responsive">
		</div>
		<div class="slide3">
			<p>Praesent vulputate mauris et est euismod aliquet. Donec sit amet volutpat turpis. Integer scelerisque tellus id massa vestibulum malesuada. Mauris commodo pharetra tellus euismod blandit. In suscipit suscipit libero laoreet bibendum. Aliquam placerat tortor dolor, in semper libero tempus sed. Nulla blandit magna sit amet urna pretium, eu pulvinar enim convallis. Morbi blandit viverra faucibus. Integer congue porta odio, vel tincidunt justo scelerisque eu. Nam sodales nunc et elementum varius. Phasellus vel dolor eros. Etiam fermentum nibh rhoncus pretium mattis. Aenean molestie elit at neque consectetur, non viverra dui varius. Maecenas sagittis commodo nisi ac semper. Quisque elementum varius imperdiet. Maecenas eros ante, laoreet rutrum rutrum ultricies, rhoncus in neque. </p>
			<img src="http://placehold.it/200&text=Modal+two+three" class="img-responsive">
		</div>
	</div>
	<div id="mod2">
		<span class="title">This is the Last Cool Modal</span>
		<div class="slide1">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim sed urna vestibulum sagittis. Vivamus fringilla molestie libero, eu ullamcorper urna aliquam eget. Aliquam blandit sapien vel augue porta adipiscing. Vivamus sit amet aliquam nisl. Etiam sed odio eget nunc mollis dapibus. Pellentesque et aliquam est, nec vulputate tortor. Cras eu porta quam, non auctor ipsum. Mauris venenatis aliquet urna sit amet consectetur. Pellentesque id luctus sem. In vel placerat quam, sodales elementum dolor. Fusce ut felis dignissim, viverra tortor vel, cursus nulla. Proin ut aliquet metus. Phasellus nisl magna, varius sit amet varius ac, sagittis sed neque. Proin in enim rhoncus, semper odio at, blandit purus.</p>
			<img src="http://placehold.it/200&text=Modal+three+one" class="img-responsive">
		</div>
		<div class="slide2">
			<p>Ut vitae magna lacus. Maecenas laoreet arcu et turpis mollis pellentesque. Proin et euismod odio. Donec tempus eget ante a pellentesque. Nulla mollis posuere odio. Sed gravida mollis arcu, at luctus velit porta ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam mollis, nisl vitae tempus ultricies, ligula magna scelerisque neque, vel faucibus est quam et est. Aenean nec nisi sit amet risus luctus tristique. Quisque sit amet diam massa. Proin non dolor vel diam placerat rhoncus nec in urna. Cras condimentum est purus, sed molestie dui tempus at. Maecenas pulvinar turpis purus. Curabitur dolor tellus, ultricies id velit tempor, sollicitudin adipiscing sapien. Curabitur convallis velit at dui tempus, non tempus enim mollis. </p>
			<img src="http://placehold.it/200&text=Modal+three+two" class="img-responsive">
		</div>
		<div class="slide3">
			<p>Praesent vulputate mauris et est euismod aliquet. Donec sit amet volutpat turpis. Integer scelerisque tellus id massa vestibulum malesuada. Mauris commodo pharetra tellus euismod blandit. In suscipit suscipit libero laoreet bibendum. Aliquam placerat tortor dolor, in semper libero tempus sed. Nulla blandit magna sit amet urna pretium, eu pulvinar enim convallis. Morbi blandit viverra faucibus. Integer congue porta odio, vel tincidunt justo scelerisque eu. Nam sodales nunc et elementum varius. Phasellus vel dolor eros. Etiam fermentum nibh rhoncus pretium mattis. Aenean molestie elit at neque consectetur, non viverra dui varius. Maecenas sagittis commodo nisi ac semper. Quisque elementum varius imperdiet. Maecenas eros ante, laoreet rutrum rutrum ultricies, rhoncus in neque. </p>
			<img src="http://placehold.it/200&text=Modal+three+three" class="img-responsive">
		</div>
	</div>
</div>


<script type="text/javascript">
var currItr = 0, // Figures out which part of the modal content to present
	currCont, // Figures out which modal content to present
	content = [];

$(document).ready(function() {
	var h = $('#box').height(),
	    w = $('#box').width();

	$('#tmp').css('top', (h/2) - 150);
	$('#tmp').css('left', w/2 + 15);

	// Add all of the modal content to content
	var mod_info = $('.modal-info');
	mod_info.children().each(function() {
		var _context = $(this);
		var _title = _context.find(".title").text();
		var _content = _context.children("div");
		var _json = {};
		var _text = [], _img = [];
		_content.each(function() {
			_t = $(this);
			_t.children().each(function() {
				if(this.nodeName == "P")
					_text.push(this);
				if(this.nodeName == "IMG")
					_img.push(this);
			});
		});
		_json = {
					"title": _title,
					"content": _content,
					"img": _img
				};
		console.log(_json);
		content.push(_json);
	});

});

function cl0() {currCont=0; loadCont();}
function cl1() {currCont=1; loadCont();}
function cl2() {currCont=2; loadCont();}

function right() {
	currItr++;
	if (currItr > 2)
		currItr = 0;
	console.log(currItr);
	loadCont();
}

function left() {
	currItr--;
	if (currItr < 0)
		currItr = 2;
	console.log(currItr);
	loadCont();
}

function loadCont() {
	$('#modal_text').children().remove();
	$('#modal_img').children().remove();
	$('#modal_text').append(content[currCont]['content'][currItr]);
	$('#modal_img').append(content[currCont]['img'][currItr]);
	$('#myModalLabel').html(content[currCont]['title']);
}

</script>

<?php

KIGProjectFooter();

?>