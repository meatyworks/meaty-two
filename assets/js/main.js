jQuery(document).ready(function($){ 

$('h1#activate-mobile').click(function(){
	$('ul.main-menu').slideToggle();
});

//Timer Function Below
/*
$('#nav-helper a').click(function(){
		setTimeout(function(){ 
			$(".numbers").each(function(i) {
				$(this).delay((i + 1) * 50).fadeIn();
       		}); 
			}, 1500
		);				
		return false;
	});
*/

//SMOOTH SCROLL care of CSS TRICKS 
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });


});
