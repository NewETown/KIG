var currItr = 0, // Figures out which part of the modal content to present
	currCont, // Figures out which modal content to present
	faded = 0,
	tripwire = ($(window).height() > 0) ? tripwire = $(window).height() : tripwire = 400, // Initialize for safety
	content = [];

$(document).ready(function() {

	// Add all of the modal content to content
	var mod_info = $('.modal-info');
	mod_info.children().each(function() {
		var _context = $(this);
		var _content = _context.children();
		content.push(_content);
	});

	$( "#event-button" ).click(function() {
		$( "#expander" ).slideToggle();
	});

	$('.hidden').removeClass("hidden");
	setTimeout(function() {
		$('#event-button').removeClass("fade-in");
	}, 1000);

	// var _d = $('#people-row').offset();
	// var _t = $('#people-row').height() * 1.7;
	// if (_t < 400)
	// 	_t = 225;
	// tripwire = _d.top - _t;

});

// $(window).scroll(function() {

// 	// _scroll = $(window).scrollTop();

// 	// if (_scroll > tripwire && faded == 0) {
// 	// 	faded = 1;
// 	// 	$('.hidden').addClass("fade-in").removeClass("hidden");
// 	// 	setTimeout(function() {
// 	// 		$('#event-button').removeClass("fade-in");
// 	// 	}, 1000);
// 	// }
// });

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
	$('.modal_img_container').children().remove();
	$('.modal_img_container').append(content[currCont][currItr]);

	//setButtonHeight();
}

function setButtonHeight() {
	var h = $('#modal-content').height() * .5 - 10;

	if (h < 0)
		setTimeout(setButtonHeight, 200);
	else if(currItr == 5) {
		// super hacky
		$('#btn-left').css('margin-top', 30);
		$('#btn-right').css('margin-top', 30);
	}
	else {
		$('#btn-left').css('margin-top', h);
		$('#btn-right').css('margin-top', h);
	}
}