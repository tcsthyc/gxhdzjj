var itemsCount=$('.floor-products-list > .product-item').length;
for(var i=0;i<itemsCount;i++){
	var left=i%2==0?0:$(window).width()*3/4;
	$('.floor-products-list > .product-item:eq('+i+')').find('.tools-panel').css('left',left);
}

$(document).ready(function(){
	$('.floor-products-list > .product-item').hover(
		function(){
			$(this).find('.tools-panel').fadeIn();
		},
		function(){
			$(this).find('.tools-panel').fadeOut();
		}
	);
});