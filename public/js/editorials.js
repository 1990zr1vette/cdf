
$.each($('.article'),function(){if ($(this).find('.articleimg').height() > $(this).find('.articleinfo').height()){$(this).css('height', $('.articleimg').height() + 100);}else{$(this).css('height', $(this).find('.articleinfo').height() + 100);}});

$.fn.isOnScreen = function(){
	var win = $(window);
	var viewport = {top:win.scrollTop(),left:win.scrollLeft()};
	viewport.right = viewport.left + win.width();
	viewport.bottom = viewport.top + win.height();
	var bounds = this.offset();
	bounds.right = bounds.left + this.outerWidth();
	bounds.bottom = bounds.top + this.outerHeight();
	return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};

$.each($('.article'),function(){
	var articleimg = $(this).find('.articleimg');	
	$(articleimg).css('left','-' + ($(articleimg).width() + 40) + 'px');
	$(articleimg).attr('data-left',$(articleimg).position().left);
	
	var articleinfo = $(this).find('.articleinfo');
	$(articleinfo).css('left', $(articleinfo).width() + 100 );
	$(articleinfo).attr('data-left', $(articleinfo).position().left  );	
	
	$(this).attr('data-on-screen','0');
});

checkItems();

$(document).ready(function(){$(window).scroll(function(){checkItems();});});

function checkItems()
{
	$.each($('.article'),function(index){
		if ($(this).isOnScreen())
		{
			if ( $(this).attr('data-on-screen') == '0' )
			{
				$(this).attr('data-on-screen','1');
				$(this).find('.articleimg').animate({opacity:1,left:20},1000);
				$(this).find('.articleinfo').animate({opacity:1,left:20},1000);
			}
		}
		else
		{
			if ( $(this).attr('data-on-screen') == '1' )
			{
				$(this).attr('data-on-screen','0');
				var articleimg = $(this).find('.articleimg');
				$(articleimg).css('opacity',0).css('left',parseInt($(articleimg).attr('data-left')));
				var articleinfo = $(this).find('.articleinfo');
				$(articleinfo).css('opacity',0).css('left',parseInt($(articleinfo).attr('data-left')));
			}
		}
	});
}

