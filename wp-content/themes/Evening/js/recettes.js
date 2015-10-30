$(document).ready(function(){
	
	var DomSize;
	
	function sliderResize(type){
		
		var increase = 36;
		
		switch (type) {
			case 'desktop':
				increase = 36;
				break;
				
			case 'tablette':
				increase = 54;
				break;
			
			case 'smartphone':
				increase = 100;
				break;
				
			default:
				break;
		}
		
	var left = 0;
	$('.recipes-slides li').each(function(index){
		$(this).css({
			'left': left+'%'
		});
		left += increase;
	})
	
	}
	
	$(window).on('load', function(){
		testScreenSize();
		
		$('.recipes-slides').css({
			'height': $('.recipes-slides li').css('height')
		})
	});
	
	$(window).on('resize', function(){
		testScreenSize();
		
		$('.recipes-slides').css({
			'height': $('.recipes-slides li').css('height')
		})
	});
	
	$('.right-arrow').on('click', function(){
		toTheRight();
	})
	
	function testScreenSize(){
		
		var screenWidth = window.innerWidth;
		
		if(screenWidth >= 992){
			DomSize = 'desktop';
		}else if(screenWidth >= 769){
			DomSize = 'tablette';
		}else if(screenWidth <= 769){
			DomSize = 'smartphone';
		}
			sliderResize(DomSize);
	}
	
	function toTheRight(){
		
		var elmt = $('.recipes-slides li');
		var length = elmt.length - 1;
		
		if(elmt[length].style.left != "72%" && elmt[length].style.left != "54%" && elmt[length].style.left != "0%"){
			var upSpace;
			switch (DomSize) {
				case 'desktop':
					upSpace = 36;
					break;
				
				case 'tablette':
					upSpace = 54;
					break;
					
				case 'smartphone':
					upSpace = 100;
					break;
			}
			
			elmt.each(function(index){
	
				var way = ''+this.style.left;
				way = way.substring(0, way.length-1);
				var newLeft = parseInt(way, 10) - upSpace;
				console.log(newLeft);
				
				$(this).animate({
					'left': newLeft +'%'
				}, 500);
		})
	}
	}
	
});