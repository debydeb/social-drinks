$(document).ready(function(){
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#home').parallax("50%", 0 ,0.1,true);
	$('#somos').parallax("50%", 0 ,0.1, true);
	$('#reunion').parallax("50%", 2750, 0.3, true)

	function scrollToAnchor(aid){
		var aTag = $("a[name='"+ aid +"']");
		$('html,body').animate({scrollTop: aTag.offset().top}, 'slow');
	}
	$("#li1").click(function() {
		scrollToAnchor('home');
	});
	$("#li2").click(function() {
		scrollToAnchor('somos');
	});
	$("#li3").click(function() {
		scrollToAnchor('reunion');
	});
	$("#li4").click(function() {
		scrollToAnchor('contacto');
	});	
	
/*
 var scroll_pos = 0;
    var animation_begin_pos = 0; //where you want the animation to begin
    var animation_end_pos = 500; //where you want the animation to stop
    var beginning_color = new $.Color( 'rgb(255,255,255)' ); //we can set this here, but it'd probably be better to get it from the CSS; for the example we're setting it here.
    var ending_color = new $.Color( 'rgb(0,0,0)' ); ;//what color we want to use in the end
    $(document).scroll(function() {
        scroll_pos = $(this).scrollTop(); 
        if(scroll_pos >= animation_begin_pos && scroll_pos <= animation_end_pos ) { 
           // console.log( 'scrolling and animating' );
            //we want to calculate the relevant transitional rgb value
            var percentScrolled = scroll_pos / ( animation_end_pos - animation_begin_pos );
            var newRed = beginning_color.red() + ( ( ending_color.red() - beginning_color.red() ) * percentScrolled );
            var newGreen = beginning_color.green() + ( ( ending_color.green() - beginning_color.green() ) * percentScrolled );
            var newBlue = beginning_color.blue() + ( ( ending_color.blue() - beginning_color.blue() ) * percentScrolled );
            var newColor = new $.Color( newRed, newGreen, newBlue );
            //console.log( newColor.red(), newColor.green(), newColor.blue() );
            $('#home').animate({ backgroundColor: newColor }, 0);
        } else if ( scroll_pos > animation_end_pos ) {
             $('#home').animate({ backgroundColor: ending_color }, 0);
        } else if ( scroll_pos < animation_begin_pos ) {
             $('#home').animate({ backgroundColor: beginning_color }, 0);
        } else { }
    });
	
	*/

})//fin document ready