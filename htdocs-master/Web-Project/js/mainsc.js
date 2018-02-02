jQuery(document).ready(function ($) {
  //SLIDER
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;

	$('#slider').css({ width: slideWidth, height: slideHeight });

	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 500, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 500, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });
    //END OF SLIDER


		$(".show_login").click(function(){
		showpopup();
   	});
   	$(".opacity").click(function(){
    	hidepopup();
			hidepopup3();
   	});
		function showpopup()
		{
		   $("#loginform").fadeIn();
		   $("#loginform").css({"visibility":"visible","display":"block"});
		   $(".opacity").css({"visibility":"visible","display":"block"});
		}

		function hidepopup()

		{
		   $("#loginform").fadeOut();
		   $("#loginform").css({"visibility":"hidden","display":"none"});
		   $(".opacity").css({"visibility":"hidden","display":"none"});
		}
		function hidepopup3()

		{
		   $(".succesfull").fadeOut();
		   $(".succesfull").css({"visibility":"hidden","display":"none"});
		   $(".opacity").css({"visibility":"hidden","display":"none"});
		}
		function showpopup3()
		{
   		$(".succesfull").fadeIn();
   		$(".succesfull").css({"visibility":"visible","display":"block"});
   		$(".opacity").css({"visibility":"visible","display":"block"});
		}
});
