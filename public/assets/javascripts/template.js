$(document).ready(function(){

	// Handle minimalize sidebar menu

    $('.hide-menu').on('click', function(event){
        event.preventDefault();
       
        if ($(window).width() < 769) {
            $("body").toggleClass("show-sidebar");
        } else {
            $("body").toggleClass("hide-sidebar");
        }
    });

    //Initialize metismenu in sideBar
	$('#side-menu').metisMenu();

    
});