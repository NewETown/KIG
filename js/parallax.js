var marbles = $('.marble-container').children();
var marble0, marble1, marble2, scrollDir = 1, prevScroll = 0;

$(window).scroll(function() {

	_scroll = $(window).scrollTop();

	if(_scroll > prevScroll)
		scrollDir = 1;
	else
		scrollDir = -1;

	if(_scroll > 2400)  {
		$('#left-fist').addClass("left-fist fist-bump");
		$('#right-fist').addClass("right-fist fist-bump");
	}

	if(_scroll > 4600 && _scroll < 5600) {

		marble0.each(function() {
			var _t = $(this),
			    _h = parseInt(_t.css('margin-top').replace(/[^-\d\.]/g, ''));

			_t.css({'margin-top': function() {
	    		return _h + (20 * scrollDir);
		  		}
			});
		});

		marble1.each(function() {
			var _t = $(this),
			    _h = parseInt(_t.css('margin-top').replace(/[^-\d\.]/g, ''));

			_t.css({'margin-top': function() {
	    		return _h + (40 * scrollDir);
		  		}
			});
		});

		marble2.each(function() {
			var _t = $(this),
			    _h = parseInt(_t.css('margin-top').replace(/[^-\d\.]/g, ''));

			_t.css({'margin-top': function() {
	    		return _h + (60 * scrollDir);
		  		}
			});
		});
	}
	
	prevScroll = _scroll;
	console.log($(window).scrollTop());
});

$(document).ready(function() {

	var marble_container = $('.marble-container'),
	    _w = marble_container.width(),
	    _w_min = _w / 5,
	    _h = marble_container.height();

	marble_container.children().each(function() {
		var _x = Math.floor(Math.random() * (_w - _w_min) ),
		    _y = Math.floor((Math.random() * _h)/2),
		    _m = Math.floor(Math.random() * 2),
		    _img = $(this);

		_img.css('margin-top', _y);
		_img.css('margin-left', _x);
		_img.addClass('marble'+_m);
	});

	marble0 = $('.marble0');
	marble1 = $('.marble1');
	marble2 = $('.marble2');
});