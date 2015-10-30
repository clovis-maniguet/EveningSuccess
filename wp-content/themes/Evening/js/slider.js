function redimensionnement(){ 
 
    var $image = $('.slider-list ul li img');
    var image_width = $image.width(); 
    var image_height = $image.height();     
     
    var over = image_width / image_height; 
    var under = image_height / image_width; 
     
    var body_width = $(window).width(); 
    var body_height = $(window).height(); 
     
    if (body_width / body_height >= over) { 
      $image.css({ 
        'width': body_width + 'px', 
        'height': Math.ceil(under * body_width) + 'px', 
        'left': '0px', 
        'top': Math.abs((under * body_width) - body_height) / -2 + 'px' 
      }); 
    }  
     
    else { 
      $image.css({ 
        'width': Math.ceil(over * body_height) + 'px', 
        'height': body_height + 'px', 
        'top': '0px', 
        'left': Math.abs((over * body_height) - body_width) / -2 + 'px' 
      }); 
    } 
} 

$(document).ready(function(){
	
	var i=1;
	var sliderLi = $('.slider-list ul li');
	var sliderLiLeft = sliderLi.css('left');
	var sliderLength = sliderLi.length+1;
	var rightArrow = $('.glyphicons-chevron-right');
	var leftArrow = $('.glyphicons-chevron-left');
	
	sliderLi.each(function(){
		$(this).css('left', 100*(i-1) + '%');
		i++;
	});
	
	i=1;
	
	function rightArrowClick(){
				
		$('#slider'+i).removeClass('active').css('left', '-100%');
		$('#slider'+(i+1)).addClass('active').css('left', '0');
		i++;
		
		if(i==sliderLength){
			$('#slider1').addClass('active').css('left', '0');
			$('#slider1').nextAll().removeClass('active').css('left', '100%');
			i=1;	
		}
	}
	
	function leftArrowClick(){
		$('#slider'+i).removeClass('active').css('left', '100%');
		$('#slider'+(i-1)).addClass('active').css('left', '0');
		i--;
		
		if(i==0){
			$('#slider'+(sliderLength-1)).addClass('active').css('left', '0');
			$('#slider'+(sliderLength-1)).prevAll().removeClass('active').css('left', '-100%');
			i=sliderLength-1;
		}
	}
	
	rightArrow.click(function(){
		rightArrowClick();
	});
	
	leftArrow.click(function(){
		leftArrowClick();
	});
	
	setInterval(rightArrowClick, 5000);
	
    redimensionnement();
     
    $(window).resize(function(){ 
        redimensionnement(); 
    }); 
	
});