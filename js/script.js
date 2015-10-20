jQuery(function ($) {
// console.log('test');
$('#header-overlay-text').fitText();
$('.header-phone').fitText(2.2);
$('.header-phone-bars').fitText();
//hover for registry widget, move this to the plugin when you can.
$('.reg-widg').hover(
		function(){
console.log("helloworld");
      $( this ).find( ".caption " ).fadeIn(300);
		},
		function(){
			$( this ).find( ".caption " ).fadeOut(300);
		}
	);
});
