$(document).ready(function(){
	$(window).scroll(function(e){

		var el = $('.follow-bar')
		,	bigImage = $('#big-image');

		if ($(this).scrollTop() > 120 && el.css('position') !== 'fixed'){ 
			el.css({'position': 'fixed', 'top': '45px'});
			bigImage.css({'position': 'fixed', 'top': '-125px'});
		}
		else if($(this).scrollTop() < 120 && el.css('position') === 'fixed'){
			el.css({'position': 'relative', 'top':'0'});
			bigImage.css({'position': 'relative', 'top': '0'});
		}
	});
});