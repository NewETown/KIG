function drawStats() {
	// This generates the Raphael drawing for KIG's circular bar graph
	var _container = $('#kig_stats');
	// Figure out the size to display the charts at
	// Each chart needs to scale with viewport size
	var div_height = div_width = _container.width();
	// Set x and y base to be half of the containing div
	var x_base = y_base = div_height/2;

	var rad = x_base / 3, //55;
	    small_rad = rad / 3,
	    larer_rad = rad / 2,
	    rad_offset = rad / 3,
	    speed = 250, // Represents the speed of the animations in ms
	    text_base = "Some Stats";

	var r = Raphael('kig_stats', div_width, div_height),
		rad;

	// window.addEventListener('resize', function() {
	// 	// for(var i in _elements) _elements[i].remove();
	// 	r.remove();
	// });

	// The circle gets an x and y center point
	// r.circle(x_base, y_base, rad * 1.15).attr({ stroke: 'none', fill: '#193340' });

	var title;

	r.customAttributes.arc = function(value, total, rad) {
		var alpha = 360 / total * value,
			offset = 90,
			a = (offset - alpha) * Math.PI/180,
			b = offset * Math.PI/180,
			sx = x_base + rad * Math.cos(b),
			sy = y_base - rad * Math.sin(b),
			x = x_base + rad * Math.cos(a),
			y = y_base - rad * Math.sin(a),
			path;
			if ( value == total)
				path = [['M', sx, sy], 
					   ['A', rad, rad, 0, 1, 1, x - .01, y]];

			else
				path = [['M', sx, sy], 
					   ['A', rad, rad, 0, +(alpha > 180), 1, x, y]];

		// console.log("Value: " + value + " alpha: " + alpha + " Rad: " + rad + " sx: " + sx + " sy: " + sy + " x: " + x + " y: " + y);
		return {path: path};
	}

	_container.find('.stat').each(function(i) {
		var t = $(this),
			color = t.find('.color').val(),
			value = t.find('.percent').val(),
			text = t.find('.text').text();
		rad += rad_offset; //15;

		var anim = Raphael.animation({
			arc:[value, 100, rad]}, 1000, '<>'
		);

		console.log("Doing things and stuff");

		var z = r.path().attr({arc: [0, 100, rad], stroke: color, 'stroke-width': small_rad });

		$(window).scroll(function() {
			if($(window).scrollTop() > 650)
				z.animate(anim);
		});

		z.mouseover(function() {
			this.animate({'stroke-width': larer_rad, opacity: .75 }, 1000, 'elastic');
			title.animate({opacity: 0}, speed, '>', function() {
				this.attr({text: text + '\n' + value + '%' }).animate({opacity: 1}, speed, '<');
			});
		}).mouseout(function() {
			this.stop().animate({'stroke-width': small_rad, opacity: 1 }, 1000, 'elastic');
			title.stop().animate({opacity: 0}, speed, '>', function() {
				title.attr({ text: text_base}).animate({opacity: 1}, speed, '<');
			});
		});

	});

	title = r.text(x_base, y_base, text_base).attr({
		font: '20px Arial',
		fill: '#000'
	});

}