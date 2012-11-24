
$(function() {

	var $i = $('input'),
		$form = $('form');
	
	$i[0].focus();
	$i[0].select();
	
	function o(o) {
		$form.stop().animate({opacity: o}, {duration: 300});
	}
	
	$form.hover(
		function() {o(1);},
		function() {o(0);}
	);
	o(0);
	
});
