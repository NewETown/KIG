var marbles = $('.marble-container').children();
var marble0, marble1, marble2, scrollDir = 1, prevScroll = 0;

$(document).ready(function() {

	var marble_container = $('.marble-container'),
	    _w = marble_container.width(),
	    _w_min = _w / 5,
	    _h = marble_container.height();
	    console.log("Dist from top: " + parseInt(marble_container.offset().top));

	marble_container.children().each(function() {
		var _dist = parseInt(marble_container.offset().top),
			_x = Math.floor(Math.random() * (_w - _w_min) ),
		    _y = _dist + _h + Math.floor((Math.random() * _h/2)),
		    _m = Math.floor(Math.random() * 2),
		    _img = $(this);

		_img.css('top', _y);
		_img.css('margin-left', _x);
		_img.addClass('marble'+_m);
	});

	marble0 = $('.marble0');
	marble1 = $('.marble1');
	marble2 = $('.marble2');
});

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

	if(_scroll > 4900 && _scroll < 5400) {

		console.log(_scroll);

		marble0.each(function() {
			var _t = $(this),
			    _h = parseInt(_t.css('top'));//.replace(/[^-\d\.]/g, ''));

			_t.css({'top': function() {
	    		return _h + (20 * scrollDir); // Math.max(Math.min(_h + (20 * scrollDir), 530), 30);
		  		}
			});
		});

		marble1.each(function() {
			var _t = $(this),
			    _h = parseInt(_t.css('top'));//.replace(/[^-\d\.]/g, ''));

			_t.css({'top': function() {
	    		return _h + (40 * scrollDir); // Math.max(Math.min(_h + (40 * scrollDir), 530), 30);
		  		}
			});
		});

		marble2.each(function() {
			var _t = $(this),
				_h = parseInt(_t.css('top'));//.replace(/[^-\d\.]/g, ''));

			_t.css({'top': function() {
	    		return _h + (60 * scrollDir); // Math.max(Math.min(_h + (60 * scrollDir), 530), 30);
		  		}
			});
		});
	}
	
	prevScroll = _scroll;
});