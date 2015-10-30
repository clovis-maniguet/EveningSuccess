$(document).ready(function(){
		
	var flag = true;
	
	$('.button-nav').click(function(){
		
		if(flag == true){
			
			$('ul').addClass('show');
			flag = false;
			
		}else{
			
			$('ul').removeClass('show');;
			flag = true;
			
		}
		
	});
	
	$('input[type="submit"]').click(function(e){
		
		e.preventDefault();
		
		var name = $('#name');
		var forname = $('#forname');
		var city = $('#city');
		var mail = $('#mail');
		var object = $('#object');
		var message = $('#message');
		
		var nameVal = name.val();
		var fornameVal = forname.val();
		var cityVal = city.val();
		var mailVal = mail.val();
		var objectVal = object.val();
		var messageVal = message.val();
		
		var nameError = $('.error-message-name');
		var fornameError = $('.error-message-forname');
		var cityError = $('.error-message-city');
		var mailError = $('.error-message-mail');
		var objectError = $('.error-message-object');
		var messageError = $('.error-message-message');
		
		function isEmail(mail) {
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			return regex.test(mail);
		}
		
		if(nameVal == ""){
			
			nameError.fadeIn();
			
		}else{
			
			nameError.fadeOut();
			
		}
		
		if(fornameVal == ""){
			
			fornameError.fadeIn();
			
		}else{
			
			fornameError.fadeOut();
			
		}
		
		if(cityVal == ""){
			
			cityError.fadeIn();
			
		}else{
			
			cityError.fadeOut();
			
		}
		
		if(mailVal == "" || !isEmail(mail)){
			
			mailError.fadeIn();
			
		}else{
			
			mailError.fadeOut();
			
		}
		
		if(objectVal == "none"){
			
			objectError.fadeIn();
			
		}else{
			
			objectError.fadeOut();
			
		}
		
		if(messageVal == ""){
			
			messageError.fadeIn();
			
		}else{
			
			messageError.fadeOut();
			
		}
		
	});	
		
	
	var windowWidth = $(window).width();
	
	$(window).scroll(function(){
		
		if(windowWidth < 1550 && windowWidth > 993){
		
			var scrollTop = $(window).scrollTop()
			
			if(scrollTop > 93){
			
				$('.nav-top').addClass('scroll');
			
			}else{
				$('.nav-top').removeClass('scroll');
			}
		}
	});
	
	function pageHomeHeight(){
		
		var windowHeight = $(window).height();
		var headerHeight = $('header').height();
		var footerHeight = $('footer').height();
		var pageHomeHeight = windowHeight - headerHeight - footerHeight; 
		
		$('.page-home').css('height', pageHomeHeight + 'px');
		
	}
	
	pageHomeHeight();
	
	$(window).resize(function(){
		
		pageHomeHeight();
		
	});
	
});