
$(function() {

	var $i = $('input'),
		$form = $('form'),
		timeout = null;
	
	$i[0].focus();
	$i[0].select();
	
	function o(o) {
		$form.stop().animate({opacity: o}, {duration: 450});
	}
	
	$form.hover(
		function() {
			window.clearTimeout(timeout);
			o(1);
		},
		function() {o(0);}
	);
	
	$i.bind('keypress keydown keyup', function() {
		$form.css({opacity: 1});
	});
	
	timeout = window.setTimeout(function() {
		o(0);
	}, 1000);
	
});
