var marbles = $('.marble-container').children();
var marble0, marble1, marble2, scrollDir = 1, prevScroll = 0, fistBumpOffset = $('#fist-bump-row').offset().top + 175;

$(document).ready(function() {
	setTimeout(setMarbles, 500);	
});

function setMarbles() {
	var marble_container = $('.marble-container'),
	    _w = marble_container.width(),
	    _w_min = _w / 5,
	    _h = marble_container.height();
	    console.log("Dist from top: " + marble_container.offset().top);

	marble_container.children().each(function() {
		var _dist = marble_container.offset().top,
			_x = Math.floor(Math.random() * (_w - _w_min) ),
		    _y = Math.random() * (_h/3) + _dist, //Math.max(_dist + (_h * .6) + Math.floor((Math.random() * _h/3)), 5375),
		    _m = Math.floor(Math.random() * 2),
		    _img = $(this);

		_img.css('top', _y);
		_img.css('margin-left', _x);
		_img.addClass('marble'+_m);
	});

	marble0 = $('.marble0');
	marble1 = $('.marble1');
	marble2 = $('.marble2');
}

$(window).scroll(function() {

	_scroll = $(window).scrollTop();

	if(_scroll > prevScroll)
		scrollDir = 1;
	else
		scrollDir = -1;

	if(_scroll > fistBumpOffset)  {
		$('#left-fist').addClass("left-fist fist-bump");
		$('#right-fist').addClass("right-fist fist-bump");
	}

	if(_scroll > 5200 && _scroll < 5800) {

		console.log(_scroll);

		marble0.each(function() {
			var _t = $(this),
			    _h = parseInt(_t.css('top'));

			_t.css({'top': function() {
	    		return Math.max(5300, _h + (50 * scrollDir));
		  		}
			});
		});

		marble1.each(function() {
			var _t = $(this),
			    _h = parseInt(_t.css('top'));

			_t.css({'top': function() {
	    		return Math.max(5300, _h + (75 * scrollDir));
		  		}
			});
		});

		marble2.each(function() {
			var _t = $(this),
				_h = parseInt(_t.css('top'));

			_t.css({'top': function() {
	    		return Math.max(5300, _h + (100 * scrollDir));
		  		}
			});
		});
	}
	
	prevScroll = _scroll;
});