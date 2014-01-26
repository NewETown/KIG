<?php

require "../settings.php";

KIGProjectHeader();

?>

<!-- Body stuff -->
<div id="box" class="bounding-box">
	<div class="row">
		<img src="img/text_main.svg" class="img-responsive title-img">
	</div>
	<div class="row">
		<img src="img/text_save.svg" class="img-responsive title-img">
	</div>
	<!-- <div class="row">
		<div class="col-md-10">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		</div>
		<div class="col-md-2">
			<a href="#" data-toggle="modal" data-target="#myModal" onclick="tips()"><img src="http://placehold.it/100&text=tips" class="img-responsive img-circle"></a>
		</div>
	</div> 
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center" style="margin-bottom:50px;">These are the things we invest in!</h2>
		</div>
	</div> -->
	<div class="row">
		<div class="col-sm-offset-5 col-sm-2 tips-icon">
			<a href="#" data-toggle="modal" data-target="#myModal" onclick="tips()"><img src="img/icon_tips.svg" class="img-responsive"></a>
		</div>
	</div>
	<img src="img/cycle.svg" class="img-responsive focus-image">
	<div class="row img-lift">
		<div class="col-md-4 col-sm-offset-1">
			<a href="#" data-toggle="modal" data-target="#myModal" onclick="renewable()"><img src="img/icon_renewable.svg" class="img-responsive img-circle primary-image"></a>
		</div>
		<div class="col-md-4 col-sm-offset-2">
			<a href="#" data-toggle="modal" data-target="#myModal" onclick="wind()"><img src="img/icon_wind.svg" class="img-responsive img-circle primary-image"></a>
		</div>
	</div>
	<div class="spacer-row" style="height:270px;">
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-1">
			<a href="#" data-toggle="modal" data-target="#myModal" onclick="hydro()"><img src="img/icon_hydroelectric.svg" class="img-responsive img-circle primary-image"></a>
		</div>
		<div class="col-md-4 col-md-offset-2">
			<a href="#" data-toggle="modal" data-target="#myModal" onclick="efficiency()"><img src="img/icon_efficiency.svg" class="img-responsive img-circle primary-image"></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<img src="img/text_conserve.svg" class="img-responsive">
		</div>
	</div>
	<div class="row">
		<img src="img/text_mypse.svg" class="pull-right img-responsive">
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div> -->
			<div class="modal-body">
				<div id="modal-content" class="row">
					<div class="col-md-1">
						<button id="btn-left" class="btn btn-default lower pull-left" type="button" onclick="left()" style="margin-top: 128.5px;"><span class="glyphicon glyphicon-chevron-left"></span></button>
					</div>
					<div id="modal_svg" class="col-md-10">
					</div>
					<div class="col-md-1">
						<button id="btn-right" class="btn btn-default lower pull-right" type="button" onclick="right()" style="margin-top: 128.5px;"><span class="glyphicon glyphicon-chevron-right"></span></button>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal-info">
	<div id="renewable">
		<img src="img/modal_renewable.svg" class="img-responsive">
	</div>
	<div id="wind">
		<img src="img/modal_wind.svg" class="img-responsive">
	</div>
	<div id="hydro">
		<img src="img/modal_hydro.svg" class="img-responsive">
	</div>
	<div id="efficiency">
		<img src="img/modal_efficiency.svg" class="img-responsive">
	</div>
	<div id="tips">
		<img src="img/modal_tip_appliances.svg" class="img-responsive">
		<img src="img/modal_tip_eeprograms.svg" class="img-responsive">
		<img src="img/modal_tip_heating.svg" class="img-responsive">
		<img src="img/modal_tip_lighting.svg" class="img-responsive">
		<img src="img/modal_tip_waterheating.svg" class="img-responsive">
		<img src="img/modal_tip_weatherization.svg" class="img-responsive">
	</div>
</div>


<script type="text/javascript">
var currItr = 0, // Figures out which part of the modal content to present
	currCont, // Figures out which modal content to present
	content = [];

$(document).ready(function() {

	// Add all of the modal content to content
	var mod_info = $('.modal-info');
	mod_info.children().each(function() {
		var _context = $(this);
		var _content = _context.children();
		content.push(_content);
	});

});

function renewable() {currCont=0; currItr=0; loadCont();}
function wind() {currCont=1; currItr=0; loadCont();}
function hydro() {currCont=2; currItr=0; loadCont();}
function efficiency() {currCont=3; currItr=0; loadCont();}
function tips() {currCont=4; currItr=0; loadCont();}

function right() {
	currItr++;
	if (currItr > (content[currCont].length - 1))
		currItr = 0;
	console.log("Right: " +  currItr);
	loadCont();
}

function left() {
	currItr--;
	if (currItr < 0)
		currItr = content[currCont].length - 1;
	console.log("Left: " +  currItr);
	loadCont();
}

function loadCont() {
	if(content[currCont].length != 1) {
		$('#btn-right').css('display', 'inherit');
		$('#btn-left').css('display', 'inherit');
	} else {
		$('#btn-right').css('display', 'none');
		$('#btn-left').css('display', 'none');
	}
	$('#modal_svg').children().remove();
	$('#modal_svg').append(content[currCont][currItr]);

	setButtonHeight();
}

function setButtonHeight() {
	var h = $('#modal-content').height() * .5 - 10;

	if (h < 0)
		setTimeout(setButtonHeight, 200);
	else if(currItr == 5) {
		// super hacky
		$('#btn-left').css('margin-top', 60);
		$('#btn-right').css('margin-top', 60);
	}
	else {
		$('#btn-left').css('margin-top', h);
		$('#btn-right').css('margin-top', h);
	}
}

</script>

<?php

KIGProjectFooter();

?>