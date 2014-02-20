var scrollDir = 1,
	prevScroll = 0, 
	fistBumpOffset = $('#fist-bump-row').offset().top + 175,
	row1_offset = $('#row1').offset().top + 15,
	row2_offset = $('#row2').offset().top + 45,
	row3_offset = $('#row3').offset().top + 60,
	row4_offset = $('#row4').offset().top + 75,
	row5_offset = $('#row5').offset().top + 90,
	marble_offset, 
	marble_container_height;

$(document).ready(function() {
	var marble_container = $('.marble-container');
	marble_offset = marble_container.offset().top;
	marble_container_height = marble_container.height();

	$('#marbles').css('top', 0);
});

$(window).scroll(function() {

	_scroll = $(window).scrollTop();

	if(_scroll > prevScroll)
		scrollDir = 1;
	else
		scrollDir = -1;

	if(_scroll > row1_offset)
		$('#row1').addClass('animated');

	if(_scroll > row2_offset)
		$('#row2').addClass('animated');

	if(_scroll > row3_offset)
		$('#row3').addClass('animated');

	if(_scroll > row4_offset)
		$('#row4').addClass('animated');

	if(_scroll > row5_offset)
		$('#row5').addClass('animated');

	if(_scroll > fistBumpOffset)  {
		$('#left-fist').addClass("left-fist fist-bump");
		$('#right-fist').addClass("right-fist fist-bump");
	}

	if(_scroll > (marble_offset + marble_container_height) && _scroll < (marble_offset + 1500 )) {

		console.log(_scroll);

		$('#marbles').css({'top': function() {
			return parseInt($('#marbles').css('top')) + (30 * scrollDir);
		}});

	}
	
	prevScroll = _scroll;
});