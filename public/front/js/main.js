jQuery(document).ready(function($){
	if($('.slider-section').length>0){
		$('.slider-section').slick({
			arrows:false,
			fade: true,
			autoplay:true,
			speed:600,
			
		});
	}
	if($('.testimon-slider').length>0){
		$('.testimon-slider').slick({
			arrows:true,			
			autoplay:false,
			speed:1000,	
			prevArrow:'<span class="fa fa-angle-left post-prev"></span>',
			nextArrow:'<span class="fa fa-angle-right post-next"></span>',
		
		});
	}
	if($('.brandlogos').length>0){
		$('.brandlogos').slick({
			arrows:false,			
			autoplay:true,
			speed:1000,	
			infinite:true,
			slidesToShow: 6,
		});
	}
	
})