
jQuery(function ($) {

// console.log('test');
$('#header-overlay-text').fitText();
$('.header-phone').fitText(2.2);
$('.header-phone-bars').fitText();
        $('.reg-widg').hover(
						function(){
				      $( this ).find( ".caption " ).fadeIn(300);
						},
						function(){
							$( this ).find( ".caption " ).fadeOut(300);
						}
					);

});
